<?php

namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

use App\Entity\Course;
use App\Entity\Chapitre;
use App\Entity\Chapitrefile;
use App\Entity\Chapitrequizz;


class ChapitreStatisticsJob
{
    /*private EntityManagerInterface $entityManager;

    function __construct(EntityManagerInterface $mgr)
    {
        $entityManager = $mgr;
    }*/


    public function courseStatistics(Course $course, EntityManagerInterface $entityManager)
    {
        $statistics = [];

        // Example: Count the number of chapitres for the course
        $chapitreCount = $entityManager
            ->getRepository(Chapitre::class)
            ->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.courseid = :courseId')
            ->setParameter('courseId', $course->getCourseid())
            ->getQuery()
            ->getSingleScalarResult();

        $statistics['chapitreCount'] = $chapitreCount;

        // Example: Distribution of chapitre types for the course
        $chapitreTypeDistribution = $entityManager
            ->getRepository(Chapitre::class)
            ->createQueryBuilder('c')
            ->select('c.type, COUNT(c.id) as count')
            ->where('c.courseid = :courseId')
            ->groupBy('c.type')
            ->setParameter('courseId', $course->getCourseid())
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $typeMapping = [
            0 => 'Text',
            1 => 'Quizz',
            2 => 'PDF',
            3 => 'Image',
            4 => 'Video',
        ];

        // Replace integer type with corresponding string
        foreach ($chapitreTypeDistribution as &$item) {
            $item['type'] = $typeMapping[$item['type']] ?? 'Unknown';
        }

        $statistics['chapitreTypeDistribution'] = $chapitreTypeDistribution;


        $rsm = new ResultSetMappingBuilder($entityManager);
        $rsm->addScalarResult('creationDate', 'creationDate');

        $chapitreCreationDates = $entityManager
            ->createNativeQuery('SELECT creationDate FROM chapitre WHERE courseid = :courseId', $rsm)
            ->setParameter('courseId', $course->getCourseid())
            ->getResult();

        $dateStatistics = [];
        foreach ($chapitreCreationDates as $creationDate) {
            $formattedDate = $creationDate['creationDate'];//->format('Y-m-d');
            if (!isset($dateStatistics[$formattedDate])) {
                $dateStatistics[$formattedDate] = 1;
            } else {
                $dateStatistics[$formattedDate]++;
            }
        }

        $statistics['chapitreCreationDates'] = $dateStatistics;

        return $statistics;
    }

    public function chapitreStatitstics(Chapitre $chapitre, EntityManagerInterface $entityManager)
    {
    }

}
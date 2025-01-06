<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;

use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Course;
use App\Entity\Chapitre;
use App\Entity\Chapitrefile;
use App\Entity\Chapitrequizz;


class ChapitreToHTMLJob
{
    public function courseToPDF(Course $course, EntityManagerInterface $entityManager, ?string $saveFolder)
    {
        $html = $this->courseToHTML($course, $entityManager);

        // Create PDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // If $saveFolder is not provided, use the system's temporary directory
        if ($saveFolder === null) {
            $saveFolder = sys_get_temp_dir();
        }

        // Output PDF to a file (you can also stream or download it)
        $pdfFilePath = $saveFolder . $course->getCourseid() . '_course.pdf';
        file_put_contents($pdfFilePath, $dompdf->output());

        return $pdfFilePath;
    }

    public function courseToHTML(Course $course, EntityManagerInterface $entityManager)
    {
        	$repo = $entityManager->getRepository(Chapitre::class);

            $chapitres = $repo->findBy(['courseid' => $course->getCourseid()]);

            $html = '';
            foreach ($chapitres as $chapitre) {
                $html .= $this->chapitreToHTML($chapitre, $entityManager);
            }

            return $html;
    }

    public function chapitreToHTML(Chapitre $chapitre, EntityManagerInterface $entityManager)
    {
        $chapitreRepository = $entityManager->getRepository(Chapitre::class);
        $chapitrequizzRepository = $entityManager->getRepository(Chapitrequizz::class);
        $chapitrefileRepository = $entityManager->getRepository(Chapitrefile::class);

        $file = $chapitrefileRepository->findOneBy(['chapitreid' => $chapitre->getId()]);

        $html = "";

        $html .= "<h1>".$chapitre->getName()."</h1>";

        //public enum ChapitreType { Text, Quizz, PDF, Image, Video }
        $type = $chapitre->getType();

        if($type == 0 && !is_null($file)) //text
        {
            // read text file blob as string, then add it to html
            $textContent = stream_get_contents($file->getContent());
            $html .= nl2br($textContent)    ;
        }
        else if($type == 3 && !is_null($file)) //img
        {
            $base64Src = base64_encode(stream_get_contents($file->getContent()));
            $html .= '<img src="data:image/jpg;base64,'. $base64Src .'">';
        } 
        else if($type == 4 && !is_null($file)) //video
        {
            $base64Src = base64_encode(stream_get_contents($file->getContent()));
            $html .= '<div class="gallery"><video controls>';
            $html .= '<source src="data:video/mp4;base64,' . $base64Src . '" type="video/mp4">';
            $html .= '</video></div>';
        }
        return $html;
    }

}
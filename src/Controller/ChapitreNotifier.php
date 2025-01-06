<?php

namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Course;
use App\Entity\Chapitre;
use App\Entity\Chapitrefile;
use App\Entity\Chapitrequizz;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ChapitreNotifier
{

    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function notifyStudentsAboutCourseChanged(Course $course, EntityManagerInterface $entityManager)
    {
        # you need to activate "less secure apps" in gmail
        # https://stackoverflow.com/questions/33939393/failed-to-authenticate-on-smtp-server-error-using-gmail

        $profMail = 'aymen.ayoo@gmail.com';
        $studentsMails = ['aymen.ayoo@gmail.com'];

        $email = (new Email())
            ->from('no-reply@example.com')
            ->subject('A course you bought ('. $course->getTitle() .') has been modified')
            ->html('<p>Make sure to have a look</p>');

        foreach($studentsMails as $std)
            $email->addTo($std);

        //$email->addTo($profMail);

        $this->mailer->send($email);
    }


}
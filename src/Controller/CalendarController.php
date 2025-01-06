<?php

namespace App\Controller;

use CalendarBundle\Entity\Event;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CalendarController extends AbstractController
{
    /**
     * @Route("/calendar", name="app_calendar")
     */
    public function index()
    {
        return $this->render('calendar/index.html.twig');
    }

    /**
     * @Route("/calendar/load-events", name="app_calendar_load_events", methods={"POST"})
     */
    public function loadEvents(EntityManagerInterface $entityManager): JsonResponse
    {
        $events = $entityManager->getRepository(Event::class)->findAll();
        $formattedEvents = [];

        foreach ($events as $event) {
            $formattedEvents[] = [
                'title' => $event->getTitle(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
            ];
        }

        return new JsonResponse($formattedEvents);
    }
}
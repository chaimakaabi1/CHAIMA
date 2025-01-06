<?php

namespace App\EventSubscriber;

use CalendarBundle\CalendarEvents;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CalendarSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            CalendarEvents::SET_DATA => 'onCalendarSetData',
        ];
    }

    public function onCalendarSetData(CalendarEvent $calendar): void
    {
        $start = $calendar->getStart();
        $end = $calendar->getEnd();
        $filters = $calendar->getFilters();

        $events = $this->fetchEvents($start, $end, $filters);

        foreach ($events as $event) {
            $calendar->addEvent($event);
        }
    }

    private function fetchEvents(\DateTimeInterface $start, \DateTimeInterface $end, array $filters): array
    {
        // Logic to fetch events from the database or any other source
        // You can customize this method to fit your needs
        $events = [
            new Event(
                'Event 1',
                new \DateTime('2023-11-01 10:00:00'),
                new \DateTime('2023-11-01 12:00:00')
            ),
            new Event(
                'Event 2',
                new \DateTime('2023-11-02 14:00:00'),
                new \DateTime('2023-11-02 16:00:00')
            ),
        ];

        return $events;
    }
}
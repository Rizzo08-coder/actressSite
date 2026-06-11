<?php

namespace App\Http\Controllers;

use App\Models\DataLayer;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getEvents(){
        $dl = new DataLayer();
        $event_list = $dl->listEvents();
        return view('eventi', compact('event_list'));
    }

    // Durata predefinita di uno spettacolo, usata per calcolare l'orario di fine.
    private const DURATION_HOURS = 2;

    /**
     * Genera e restituisce il file .ics dell'evento (Apple Calendar, Outlook, ecc.).
     */
    public function calendar(Event $event){
        $event->loadMissing('show');

        $start = Carbon::parse(
            Carbon::parse($event->data)->format('Y-m-d') . ' ' . Carbon::parse($event->hour)->format('H:i:s'),
            'Europe/Rome'
        );
        $end = (clone $start)->addHours(self::DURATION_HOURS);

        $title    = $event->show->title ?? 'Spettacolo';
        $location = $event->place ?? '';
        $url      = route('event');

        $lines = [
            'BEGIN:VCALENDAR',
            'VERSION:2.0',
            'PRODID:-//Signora Maria//Calendario//IT',
            'CALSCALE:GREGORIAN',
            'METHOD:PUBLISH',
            'BEGIN:VTIMEZONE',
            'TZID:Europe/Rome',
            'BEGIN:DAYLIGHT',
            'TZOFFSETFROM:+0100',
            'TZOFFSETTO:+0200',
            'TZNAME:CEST',
            'DTSTART:19700329T020000',
            'RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=-1SU',
            'END:DAYLIGHT',
            'BEGIN:STANDARD',
            'TZOFFSETFROM:+0200',
            'TZOFFSETTO:+0100',
            'TZNAME:CET',
            'DTSTART:19701025T030000',
            'RRULE:FREQ=YEARLY;BYMONTH=10;BYDAY=-1SU',
            'END:STANDARD',
            'END:VTIMEZONE',
            'BEGIN:VEVENT',
            'UID:event-' . $event->id . '@signoramaria',
            'DTSTAMP:' . now()->utc()->format('Ymd\THis\Z'),
            'DTSTART;TZID=Europe/Rome:' . $start->format('Ymd\THis'),
            'DTEND;TZID=Europe/Rome:' . $end->format('Ymd\THis'),
            'SUMMARY:' . $this->escapeIcs($title),
            'LOCATION:' . $this->escapeIcs($location),
            'DESCRIPTION:' . $this->escapeIcs($title . ($location ? ' — ' . $location : '')),
            'URL:' . $url,
            'END:VEVENT',
            'END:VCALENDAR',
        ];

        $ics = implode("\r\n", $lines) . "\r\n";
        $filename = 'evento-' . $event->id . '.ics';

        return response($ics, 200, [
            'Content-Type'        => 'text/calendar; charset=utf-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    // Escape dei caratteri speciali secondo la specifica iCalendar (RFC 5545).
    private function escapeIcs(string $text): string{
        return str_replace(
            ['\\', ',', ';', "\n"],
            ['\\\\', '\\,', '\\;', '\\n'],
            $text
        );
    }
}

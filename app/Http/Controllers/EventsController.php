<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the events.
     */
    public function index()
    {
        // Get upcoming and ongoing events first, then others
        $featuredEvents = Event::where('status', 'upcoming')
            ->orWhere('status', 'ongoing')
            ->orderBy('start_date')
            ->take(3)
            ->get();

        $upcomingEvents = Event::where('status', 'upcoming')
            ->orderBy('start_date')
            ->take(6)
            ->get();

        $pastEvents = Event::where('status', 'completed')
            ->orderBy('start_date', 'desc')
            ->take(3)
            ->get();

        // Group events by category for the filter
        $categories = Event::select('category')
            ->distinct()
            ->pluck('category');

        return view('events.index', compact(
            'featuredEvents',
            'upcomingEvents',
            'pastEvents',
            'categories'
        ));
    }

    /**
     * Display the specified event.
     */
    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        // Get related events (same category)
        $relatedEvents = Event::where('category', $event->category)
            ->where('id', '!=', $event->id)
            ->where('status', '!=', 'cancelled')
            ->orderBy('start_date')
            ->take(3)
            ->get();

        return view('events.show', compact('event', 'relatedEvents'));
    }

    /**
     * Display events by category.
     */
    public function category($category)
    {
        $events = Event::where('category', $category)
            ->orderBy('start_date')
            ->paginate(9);

        return view('events.category', compact('events', 'category'));
    }

    /**
     * Display the calendar view of events.
     */
    public function calendar()
    {
        $events = Event::where('status', '!=', 'cancelled')
            ->get()
            ->map(function ($event) {
                return [
                    'id' => $event->id,
                    'title' => $event->title,
                    'start' => $event->start_date->format('Y-m-d\TH:i:s'),
                    'end' => $event->end_date->format('Y-m-d\TH:i:s'),
                    'url' => route('events.show', $event->slug),
                    'color' => $this->getCategoryColor($event->category),
                ];
            });

        return view('events.calendar', [
            'events' => $events->toJson()
        ]);
    }

    /**
     * Get color code for event category.
     */
    private function getCategoryColor($category)
    {
        return match($category) {
            'academic' => '#3788d8',
            'sports' => '#28a745',
            'cultural' => '#9c27b0',
            'religious' => '#f9a825',
            default => '#6c757d',
        };
    }
}

@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/events-banner.jpg') }}" alt="School Events" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=School+Events'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">School Events</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Stay updated with all the events and activities happening at St. Francis of Assisi Private School
        </p>
    </div>
</div>

<!-- Category Filters -->
<section class="py-8 bg-white shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('events.index') }}" class="inline-block px-6 py-2 rounded-full {{ request()->routeIs('events.index') && !request()->route('category') ? 'bg-primary text-white' : 'bg-gray-100 text-gray-800 hover:bg-gray-200' }} transition-colors">
                All Events
            </a>

            @foreach($categories as $category)
                <a href="{{ route('events.category', $category) }}" class="inline-block px-6 py-2 rounded-full {{ request()->route('category') == $category ? 'bg-primary text-white' : 'bg-gray-100 text-gray-800 hover:bg-gray-200' }} transition-colors capitalize">
                    {{ $category }}
                </a>
            @endforeach

            <a href="{{ route('events.calendar') }}" class="inline-block px-6 py-2 rounded-full {{ request()->routeIs('events.calendar') ? 'bg-primary text-white' : 'bg-gray-100 text-gray-800 hover:bg-gray-200' }} transition-colors">
                <i class='bx bx-calendar mr-1'></i> Calendar View
            </a>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Featured Events -->
        @if($featuredEvents->count() > 0)
            <div class="mb-20">
                <h2 class="text-3xl font-bold text-primary mb-10 text-center">Featured Events</h2>

                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($featuredEvents as $event)
                        <div class="bg-white rounded-lg overflow-hidden shadow-sm group hover:shadow-md transition-all h-full flex flex-col">
                            <div class="relative h-48">
                                @if($event->image)
                                    <img src="{{ asset($event->image) }}" alt="{{ $event->title }}"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                @else
                                    <div class="w-full h-full bg-primary/10 flex items-center justify-center">
                                        <i class='bx bx-calendar-event text-5xl text-primary/30'></i>
                                    </div>
                                @endif

                                <div class="absolute top-4 right-4">
                                    <span class="inline-block px-3 py-1 bg-primary text-white text-xs font-semibold rounded-full capitalize">
                                        {{ $event->category }}
                                    </span>
                                </div>

                                @if($event->status === 'cancelled')
                                    <div class="absolute inset-0 bg-black/60 flex items-center justify-center">
                                        <span class="inline-block px-4 py-2 bg-red-600 text-white font-bold rounded-lg transform rotate-12">
                                            CANCELLED
                                        </span>
                                    </div>
                                @endif
                            </div>

                            <div class="p-6 flex-grow flex flex-col">
                                <div class="flex items-center text-gray-500 text-sm mb-2">
                                    <i class='bx bx-calendar mr-2'></i>
                                    <span>{{ $event->start_date->format('F j, Y') }}</span>

                                    <i class='bx bx-time-five ml-4 mr-2'></i>
                                    <span>{{ $event->start_date->format('g:i A') }}</span>
                                </div>

                                <h3 class="text-xl font-semibold mb-2 hover:text-primary transition-colors">
                                    <a href="{{ route('events.show', $event->slug) }}">{{ $event->title }}</a>
                                </h3>

                                <div class="flex items-start mb-4 text-gray-500 text-sm">
                                    <i class='bx bx-map mt-1 mr-2'></i>
                                    <span>{{ $event->location }}</span>
                                </div>

                                <div class="text-gray-600 text-sm line-clamp-3 mb-4 flex-grow">
                                    {!! Str::limit(strip_tags($event->description), 150) !!}
                                </div>

                                <a href="{{ route('events.show', $event->slug) }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                                    View Details
                                    <i class='bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Upcoming Events -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">Upcoming Events</h2>

            @if($upcomingEvents->count() > 0)
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($upcomingEvents as $event)
                        <div class="bg-white rounded-lg overflow-hidden shadow-sm transition-all flex flex-col">
                            <div class="p-6 flex items-start">
                                <div class="flex-shrink-0 w-16 h-16 bg-primary/10 rounded-lg flex flex-col items-center justify-center mr-4">
                                    <span class="text-primary font-bold text-xl">{{ $event->start_date->format('d') }}</span>
                                    <span class="text-primary text-xs">{{ $event->start_date->format('M') }}</span>
                                </div>

                                <div class="flex-grow">
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-lg font-semibold mb-2 hover:text-primary transition-colors">
                                            <a href="{{ route('events.show', $event->slug) }}">{{ $event->title }}</a>
                                        </h3>

                                        <span class="inline-block px-2 py-1 bg-gray-100 text-xs font-medium rounded-full capitalize">
                                            {{ $event->category }}
                                        </span>
                                    </div>

                                    <div class="flex items-center text-gray-500 text-sm mb-1">
                                        <i class='bx bx-time-five mr-1'></i>
                                        <span>{{ $event->start_date->format('g:i A') }}</span>
                                    </div>

                                    <div class="flex items-center text-gray-500 text-sm mb-3">
                                        <i class='bx bx-map mr-1'></i>
                                        <span>{{ $event->location }}</span>
                                    </div>

                                    <a href="{{ route('events.show', $event->slug) }}" class="inline-flex items-center text-primary text-sm hover:text-primary/80">
                                        View Details
                                        <i class='bx bx-right-arrow-alt ml-1'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-10">
                    <a href="{{ route('events.calendar') }}" class="inline-block px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors font-medium">
                        View All Events
                    </a>
                </div>
            @else
                <div class="text-center bg-white p-8 rounded-lg shadow-sm">
                    <i class='bx bx-calendar-x text-5xl text-gray-300 mb-3'></i>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">No Upcoming Events</h3>
                    <p class="text-gray-500">Check back later for new events or view our past events below.</p>
                </div>
            @endif
        </div>

        <!-- Past Events -->
        @if($pastEvents->count() > 0)
            <div>
                <h2 class="text-3xl font-bold text-primary mb-10 text-center">Past Events</h2>

                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($pastEvents as $event)
                        <div class="bg-white/70 rounded-lg overflow-hidden shadow-sm flex items-start p-6">
                            <div class="flex-shrink-0 w-14 h-14 bg-gray-200 rounded-lg flex flex-col items-center justify-center mr-4">
                                <span class="text-gray-600 font-bold text-lg">{{ $event->start_date->format('d') }}</span>
                                <span class="text-gray-600 text-xs">{{ $event->start_date->format('M') }}</span>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold mb-1 text-gray-700">
                                    <a href="{{ route('events.show', $event->slug) }}">{{ $event->title }}</a>
                                </h3>

                                <div class="flex items-center text-gray-500 text-sm mb-2">
                                    <i class='bx bx-map mr-1'></i>
                                    <span>{{ $event->location }}</span>
                                </div>

                                <span class="inline-block px-2 py-1 bg-gray-100 text-xs font-medium rounded-full capitalize">
                                    {{ $event->category }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>

<!-- Calendar Highlight -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Stay Updated with Our Events</h2>
        <p class="max-w-2xl mx-auto mb-8">
            View our complete school calendar to plan ahead and never miss an important event or activity.
        </p>
        <a href="{{ route('events.calendar') }}" class="inline-block px-8 py-3 bg-white text-primary rounded-lg hover:bg-gray-100 transition-colors font-medium">
            <i class='bx bx-calendar mr-2'></i>
            View School Calendar
        </a>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Any additional scripts for the events page
</script>
@endpush

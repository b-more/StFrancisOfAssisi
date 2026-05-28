@extends('layouts.app')

@section('title', 'School Calendar, Term 2 2025')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/calendar-banner.jpg') }}" alt="School Calendar" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.style.display='none'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">School Activity Calendar</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Stay organized and never miss important school events, activities, and deadlines
        </p>
    </div>
</div>

<!-- Main Calendar Content -->
<div class="container mx-auto px-4 py-20">
    <!-- Professional Calendar Header with Logo -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
        <div class="flex flex-col md:flex-row items-center justify-between mb-6">
            <!-- Left: School Logo -->
            <div class="flex items-center mb-4 md:mb-0">
                <img src="{{ asset('images/logo.png') }}" alt="St. Francis School Logo" class="h-20 w-auto mr-4"
                     onerror="this.style.display='none'">
                <div class="text-left">
                    <h1 class="text-xl md:text-2xl font-bold text-primary uppercase tracking-wide">{{ $calendarData['title'] }}</h1>
                    <p class="text-sm text-gray-600 mt-1">
                        {{ implode('/', $calendarData['contacts']) }}
                    </p>
                </div>
            </div>

            <!-- Right: Calendar Title -->
            <div class="text-center md:text-right">
                <h2 class="text-2xl md:text-3xl font-bold text-primary mb-2">{{ $calendarData['subtitle'] }}</h2>
                <div class="flex items-center justify-center md:justify-end text-gray-600">
                    <i class='bx bx-calendar text-primary mr-2'></i>
                    <span>Academic Year 2025</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Professional Calendar Table -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
        <div class="overflow-x-auto">
            <table class="w-full border-collapse text-sm">
                <!-- Enhanced Header -->
                <thead>
                    <tr class="bg-gradient-to-r from-primary to-primary/90 text-white">
                        @foreach($calendarData['months'] as $month)
                            <th class="border border-gray-300 p-4 text-center font-bold uppercase tracking-wider" colspan="2">
                                {{ $month['name'] }}
                            </th>
                        @endforeach
                    </tr>
                    <tr class="bg-primary/10">
                        @foreach($calendarData['months'] as $month)
                            <th class="border border-gray-300 p-3 text-center font-semibold text-primary bg-gray-50">DATE</th>
                            <th class="border border-gray-300 p-3 text-center font-semibold text-primary bg-gray-50">DAY</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @php
                        $maxRows = max(array_map(fn($month) => count($month['days']), $calendarData['months']));
                    @endphp

                    @for($i = 0; $i < $maxRows; $i++)
                        <tr class="{{ $i % 2 == 0 ? 'bg-white' : 'bg-gray-50/50' }} hover:bg-blue-50/30 transition-colors">
                            @foreach($calendarData['months'] as $month)
                                @if(isset($month['days'][$i]))
                                    <!-- Date Cell -->
                                    <td class="border border-gray-300 p-3 text-center font-bold text-primary bg-gradient-to-b from-gray-50 to-white">
                                        <div class="w-8 h-8 mx-auto rounded-full bg-primary text-white flex items-center justify-center text-sm font-bold">
                                            {{ $month['days'][$i][0] }}
                                        </div>
                                    </td>
                                    <!-- Activity Cell -->
                                    <td class="border border-gray-300 p-3 text-left">
                                        <span class="
                                            @if(str_contains($month['days'][$i][1], 'WEEK'))
                                                text-primary font-bold bg-primary/10 px-2 py-1 rounded text-xs uppercase tracking-wide
                                            @elseif(str_contains($month['days'][$i][1], 'MASS'))
                                                text-purple-700 font-semibold bg-purple-100 px-2 py-1 rounded text-xs
                                            @elseif(str_contains($month['days'][$i][1], 'HOLIDAY'))
                                                text-red-700 font-semibold bg-red-100 px-2 py-1 rounded text-xs
                                            @elseif(str_contains($month['days'][$i][1], 'REMINDERS'))
                                                text-amber-700 font-semibold bg-amber-100 px-2 py-1 rounded text-xs
                                            @elseif(str_contains($month['days'][$i][1], 'TESTS'))
                                                text-red-800 font-bold bg-red-200 px-2 py-1 rounded text-xs uppercase
                                            @elseif(str_contains($month['days'][$i][1], 'CLOSES'))
                                                text-red-700 font-bold bg-red-100 px-2 py-1 rounded text-xs
                                            @elseif(str_contains($month['days'][$i][1], 'OPEN DAY'))
                                                text-green-700 font-bold bg-green-100 px-2 py-1 rounded text-xs
                                            @elseif(str_contains($month['days'][$i][1], 'EXCLUSIONS'))
                                                text-orange-700 font-semibold bg-orange-100 px-2 py-1 rounded text-xs
                                            @else
                                                text-gray-700 font-medium
                                            @endif
                                        ">
                                            {{ $month['days'][$i][1] }}
                                        </span>
                                    </td>
                                @else
                                    <td class="border border-gray-300 p-3 bg-gray-100/30"></td>
                                    <td class="border border-gray-300 p-3 bg-gray-100/30"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <!-- Enhanced Important Notes Section -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
        <div class="flex items-center mb-6">
            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                <i class='bx bx-info-circle text-2xl text-primary'></i>
            </div>
            <h2 class="text-2xl font-bold text-primary">Important Notes & Information</h2>
        </div>

        <div class="grid md:grid-cols-1 gap-4">
            @foreach($calendarData['notes'] as $index => $note)
                <div class="flex items-start p-4 bg-gray-50 rounded-lg border-l-4 border-primary">
                    <div class="flex-shrink-0 w-6 h-6 bg-primary rounded-full flex items-center justify-center mr-4 mt-1">
                        <span class="text-white text-xs font-bold">{{ $index + 1 }}</span>
                    </div>
                    <div class="flex-1">
                        @php
                            $parts = explode(':', $note, 2);
                        @endphp

                        @if(count($parts) > 1)
                            <span class="font-bold text-primary text-sm uppercase tracking-wide">{{ trim($parts[0]) }}:</span>
                            <span class="text-gray-700 ml-2">{{ trim($parts[1]) }}</span>
                        @else
                            <span class="text-gray-700">{{ $note }}</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Professional Color Legend -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg p-6 mb-8 border">
        <h3 class="font-bold text-lg text-primary mb-4 flex items-center">
            <i class='bx bx-palette mr-2'></i>
            Activity Color Guide
        </h3>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 text-sm">
            <div class="flex items-center p-2 bg-white rounded border">
                <div class="w-4 h-4 bg-primary rounded mr-2"></div>
                <span class="font-medium">School Weeks</span>
            </div>
            <div class="flex items-center p-2 bg-white rounded border">
                <div class="w-4 h-4 bg-purple-600 rounded mr-2"></div>
                <span class="font-medium">Mass Days</span>
            </div>
            <div class="flex items-center p-2 bg-white rounded border">
                <div class="w-4 h-4 bg-red-600 rounded mr-2"></div>
                <span class="font-medium">Holidays</span>
            </div>
            <div class="flex items-center p-2 bg-white rounded border">
                <div class="w-4 h-4 bg-amber-600 rounded mr-2"></div>
                <span class="font-medium">Reminders</span>
            </div>
            <div class="flex items-center p-2 bg-white rounded border">
                <div class="w-4 h-4 bg-red-800 rounded mr-2"></div>
                <span class="font-medium">Examinations</span>
            </div>
            <div class="flex items-center p-2 bg-white rounded border">
                <div class="w-4 h-4 bg-green-600 rounded mr-2"></div>
                <span class="font-medium">Special Events</span>
            </div>
        </div>
    </div>

    <!-- Enhanced Action Buttons -->
    <div class="text-center space-y-4 md:space-y-0 md:space-x-4 md:flex md:justify-center mb-12">
        <a href="{{ route('calendar.download') }}"
           class="inline-flex items-center bg-primary hover:bg-primary/90 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg">
            <i class='bx bx-download text-xl mr-3'></i>
            Download Official PDF Calendar
        </a>

        <a href="{{ route('events.index') }}"
           class="inline-flex items-center bg-secondary hover:bg-secondary/90 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg">
            <i class='bx bx-calendar-event text-xl mr-3'></i>
            Browse School Events
        </a>

        <a href="{{ route('contact') }}?subject=Calendar%20Inquiry"
           class="inline-flex items-center bg-gray-700 hover:bg-gray-800 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg">
            <i class='bx bx-envelope text-xl mr-3'></i>
            Contact Administration
        </a>
    </div>

    <!-- Professional Contact Information Grid -->
    <div class="grid md:grid-cols-3 gap-8">
        <!-- Enhanced Contact Information -->
        <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-primary">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                    <i class='bx bx-phone text-2xl text-primary'></i>
                </div>
                <h3 class="font-bold text-lg text-primary">Contact Information</h3>
            </div>
            <div class="space-y-3 text-sm">
                <div class="flex items-center p-2 bg-gray-50 rounded">
                    <i class='bx bx-phone text-secondary mr-3'></i>
                    <span class="font-medium">+260 972 266 217</span>
                </div>
                <div class="flex items-center p-2 bg-gray-50 rounded">
                    <i class='bx bx-phone text-secondary mr-3'></i>
                    <span class="font-medium">+260 962 373 873</span>
                </div>
                <div class="flex items-center p-2 bg-gray-50 rounded">
                    <i class='bx bx-envelope text-secondary mr-3'></i>
                    <span class="font-medium">info@stfrancisofassisizm.com</span>
                </div>
                <div class="flex items-start p-2 bg-gray-50 rounded">
                    <i class='bx bx-map text-secondary mr-3 mt-1'></i>
                    <span class="font-medium">1310/4 East Kamenza, Chililabombwe, Zambia</span>
                </div>
            </div>
        </div>

        <!-- Enhanced School Hours -->
        <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-secondary">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 bg-secondary/10 rounded-full flex items-center justify-center mr-4">
                    <i class='bx bx-time text-2xl text-secondary'></i>
                </div>
                <h3 class="font-bold text-lg text-primary">School Schedule</h3>
            </div>
            <div class="space-y-3 text-sm">
                <div class="flex justify-between p-2 bg-gray-50 rounded">
                    <span class="font-semibold">Monday - Friday:</span>
                    <span class="font-medium">7:30 AM - 4:30 PM</span>
                </div>
                <div class="flex justify-between p-2 bg-gray-50 rounded">
                    <span class="font-semibold">Office Hours:</span>
                    <span class="font-medium">8:00 AM - 5:00 PM</span>
                </div>
                <div class="flex justify-between p-2 bg-gray-50 rounded">
                    <span class="font-semibold">Weekends:</span>
                    <span class="font-medium text-red-600">Closed</span>
                </div>
                <div class="flex justify-between p-2 bg-gray-50 rounded">
                    <span class="font-semibold">Public Holidays:</span>
                    <span class="font-medium text-red-600">Closed</span>
                </div>
            </div>
        </div>

        <!-- Enhanced Quick Access -->
        <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-accent">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center mr-4">
                    <i class='bx bx-link text-2xl text-accent'></i>
                </div>
                <h3 class="font-bold text-lg text-primary">Quick Access</h3>
            </div>
            <div class="space-y-3">
                <a href="{{ route('portal') }}" class="flex items-center p-3 bg-gray-50 hover:bg-primary/10 rounded transition-colors text-sm">
                    <i class='bx bx-user-circle text-primary mr-3'></i>
                    <span class="font-medium">Student/Parent Portal</span>
                </a>
                <a href="{{ route('admissions') }}" class="flex items-center p-3 bg-gray-50 hover:bg-primary/10 rounded transition-colors text-sm">
                    <i class='bx bx-clipboard text-primary mr-3'></i>
                    <span class="font-medium">School Admissions</span>
                </a>
                <a href="{{ route('academics') }}" class="flex items-center p-3 bg-gray-50 hover:bg-primary/10 rounded transition-colors text-sm">
                    <i class='bx bx-book-open text-primary mr-3'></i>
                    <span class="font-medium">Academic Programs</span>
                </a>
                <a href="{{ route('gallery.index') }}" class="flex items-center p-3 bg-gray-50 hover:bg-primary/10 rounded transition-colors text-sm">
                    <i class='bx bx-image text-primary mr-3'></i>
                    <span class="font-medium">Photo Gallery</span>
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add hover effects to calendar cells
        document.querySelectorAll('table tbody tr').forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.02)';
                this.style.boxShadow = '0 4px 12px rgba(0,0,0,0.1)';
            });

            row.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
                this.style.boxShadow = 'none';
            });
        });
    });
</script>
@endpush
@endsection

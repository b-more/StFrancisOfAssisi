@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/events-banner.jpg') }}" alt="School Events" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=School+Events'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">School Events</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Celebrating achievements, traditions, and community through memorable school events
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">School Events at St. Francis</h2>
            <p class="text-gray-600 mb-4">
                School events are an integral part of the St. Francis experience, providing opportunities for celebration, community building, and showcasing student talents. Throughout the academic year, we host a variety of events that bring together students, staff, parents, and the wider community.
            </p>
            <p class="text-gray-600">
                From formal ceremonies to fun-filled festivals, our school events create lasting memories and foster a strong sense of belonging and school spirit. These events also provide valuable opportunities for students to develop leadership, organizational, and teamwork skills.
            </p>
        </div>

        <!-- Upcoming Events -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-8 text-center">Upcoming Events</h3>

            <div class="bg-primary/5 p-6 rounded-lg mb-8">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="md:w-1/4 flex flex-col items-center justify-center bg-white p-4 rounded-lg shadow-sm text-center">
                        <div class="text-4xl font-bold text-primary">15</div>
                        <div class="font-semibold text-gray-800">March</div>
                        <div class="text-sm text-gray-600">2025</div>
                    </div>
                    <div class="md:w-3/4">
                        <h4 class="text-xl font-semibold text-primary mb-2">Annual Sports Day</h4>
                        <p class="text-gray-600 mb-3">
                            Our annual inter-house sports competition featuring track and field events, team sports, and relay races. Students of all ages participate in this day of friendly competition and athletic achievement.
                        </p>
                        <div class="flex flex-wrap gap-4 mb-3">
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-time text-secondary mr-2'></i>
                                <span>8:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-map text-secondary mr-2'></i>
                                <span>School Sports Grounds</span>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            View details
                            <i class='bx bx-right-arrow-alt ml-1'></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-primary/5 p-6 rounded-lg mb-8">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="md:w-1/4 flex flex-col items-center justify-center bg-white p-4 rounded-lg shadow-sm text-center">
                        <div class="text-4xl font-bold text-primary">28</div>
                        <div class="font-semibold text-gray-800">March</div>
                        <div class="text-sm text-gray-600">2025</div>
                    </div>
                    <div class="md:w-3/4">
                        <h4 class="text-xl font-semibold text-primary mb-2">Parent-Teacher Conference</h4>
                        <p class="text-gray-600 mb-3">
                            An opportunity for parents to meet with teachers to discuss their child's academic progress, social development, and set goals for the coming term.
                        </p>
                        <div class="flex flex-wrap gap-4 mb-3">
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-time text-secondary mr-2'></i>
                                <span>1:00 PM - 5:00 PM</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-map text-secondary mr-2'></i>
                                <span>School Classrooms</span>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            View details
                            <i class='bx bx-right-arrow-alt ml-1'></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-primary/5 p-6 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="md:w-1/4 flex flex-col items-center justify-center bg-white p-4 rounded-lg shadow-sm text-center">
                        <div class="text-4xl font-bold text-primary">12</div>
                        <div class="font-semibold text-gray-800">April</div>
                        <div class="text-sm text-gray-600">2025</div>
                    </div>
                    <div class="md:w-3/4">
                        <h4 class="text-xl font-semibold text-primary mb-2">School Arts Festival</h4>
                        <p class="text-gray-600 mb-3">
                            A celebration of creativity featuring visual art exhibitions, music performances, drama presentations, and dance shows by students from all grade levels.
                        </p>
                        <div class="flex flex-wrap gap-4 mb-3">
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-time text-secondary mr-2'></i>
                                <span>9:00 AM - 3:00 PM</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-map text-secondary mr-2'></i>
                                <span>School Hall and Art Center</span>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            View details
                            <i class='bx bx-right-arrow-alt ml-1'></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="#" class="inline-block px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors">
                    View Full Calendar
                </a>
            </div>
        </div>

        <!-- Annual School Events -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-8 text-center">Annual School Events</h3>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Graduation Ceremony -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/graduation.jpg') }}" alt="Graduation Ceremony" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Graduation'">
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-primary mb-2">Graduation Ceremony</h4>
                        <p class="text-gray-600 mb-3">
                            A formal ceremony celebrating our Grade 12 graduates' achievements and transition to the next phase of their education.
                        </p>
                        <div class="text-sm text-gray-500 mb-4">
                            <div class="flex items-center mb-1">
                                <i class='bx bx-calendar text-secondary mr-2'></i>
                                <span>December</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- School Anniversary -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/anniversary.jpg') }}" alt="School Anniversary" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Anniversary'">
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-primary mb-2">School Anniversary</h4>
                        <p class="text-gray-600 mb-3">
                            Annual celebration of our school's founding with special events, alumni gatherings, and community activities.
                        </p>
                        <div class="text-sm text-gray-500 mb-4">
                            <div class="flex items-center mb-1">
                                <i class='bx bx-calendar text-secondary mr-2'></i>
                                <span>October</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prize-Giving Day -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/prize-giving.jpg') }}" alt="Prize-Giving Day" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Prize-Giving'">
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-primary mb-2">Prize-Giving Day</h4>
                        <p class="text-gray-600 mb-3">
                            Ceremony recognizing outstanding academic achievement, improvement, character, and special contributions to school life.
                        </p>
                        <div class="text-sm text-gray-500 mb-4">
                            <div class="flex items-center mb-1">
                                <i class='bx bx-calendar text-secondary mr-2'></i>
                                <span>End of Academic Year</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cultural Day -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/cultural-day.jpg') }}" alt="Cultural Day" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Cultural+Day'">
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-primary mb-2">Cultural Day</h4>
                        <p class="text-gray-600 mb-3">
                            Celebration of cultural diversity featuring traditional performances, food, clothing, and customs from various cultures.
                        </p>
                        <div class="text-sm text-gray-500 mb-4">
                            <div class="flex items-center mb-1">
                                <i class='bx bx-calendar text-secondary mr-2'></i>
                                <span>May</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Science Fair -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/science-fair.jpg') }}" alt="Science Fair" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Science+Fair'">
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-primary mb-2">Science Fair</h4>
                        <p class="text-gray-600 mb-3">
                            Annual exhibition of student science projects, experiments, and innovations showcasing scientific inquiry and creativity.
                        </p>
                        <div class="text-sm text-gray-500 mb-4">
                            <div class="flex items-center mb-1">
                                <i class='bx bx-calendar text-secondary mr-2'></i>
                                <span>July</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Career Day -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/career-day.jpg') }}" alt="Career Day" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Career+Day'">
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-primary mb-2">Career Day</h4>
                        <p class="text-gray-600 mb-3">
                            Event featuring professionals from various fields sharing insights and advice with students about career paths and opportunities.
                        </p>
                        <div class="text-sm text-gray-500 mb-4">
                            <div class="flex items-center mb-1">
                                <i class='bx bx-calendar text-secondary mr-2'></i>
                                <span>August</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Highlights Gallery -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-8 text-center">Event Highlights Gallery</h3>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="relative group overflow-hidden rounded-lg aspect-video">
                    <img src="{{ asset('images/event-highlight1.jpg') }}" alt="Event Highlight" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400x225?text=Event+1'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg aspect-video">
                    <img src="{{ asset('images/event-highlight2.jpg') }}" alt="Event Highlight" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400x225?text=Event+2'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg aspect-video">
                    <img src="{{ asset('images/event-highlight3.jpg') }}" alt="Event Highlight" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400x225?text=Event+3'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg aspect-video">
                    <img src="{{ asset('images/event-highlight4.jpg') }}" alt="Event Highlight" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400x225?text=Event+4'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg aspect-video">
                    <img src="{{ asset('images/event-highlight5.jpg') }}" alt="Event Highlight" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400x225?text=Event+5'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg aspect-video">
                    <img src="{{ asset('images/event-highlight6.jpg') }}" alt="Event Highlight" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400x225?text=Event+6'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('gallery') }}" class="inline-block px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors">
                    View Full Gallery
                </a>
            </div>
        </div>

        <!-- Event Participation Information -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-gray-50 p-8 rounded-lg shadow-sm">
                <h3 class="text-2xl font-bold text-primary mb-6">Event Participation Information</h3>

                <p class="text-gray-600 mb-6">
                    Parents, family members, and the wider community are welcome to attend many of our school events. Here's some important information for event attendees:
                </p>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-lg font-semibold text-primary mb-3">For Parents</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <i class='bx bx-check-circle text-secondary mt-1 mr-2'></i>
                                <span>Event notifications are sent via email and the school's parent portal</span>
                            </li>
                            <li class="flex items-start">
                                <i class='bx bx-check-circle text-secondary mt-1 mr-2'></i>
                                <span>Some events require pre-registration or tickets</span>
                            </li>
                            <li class="flex items-start">
                                <i class='bx bx-check-circle text-secondary mt-1 mr-2'></i>
                                <span>Parents are often invited to volunteer for school events</span>
                            </li>
                            <li class="flex items-start">
                                <i class='bx bx-check-circle text-secondary mt-1 mr-2'></i>
                                <span>Photography guidelines are provided for each event</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Event Protocols</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <i class='bx bx-check-circle text-secondary mt-1 mr-2'></i>
                                <span>Please arrive 15-30 minutes before the scheduled start time</span>
                            </li>
                            <li class="flex items-start">
                                <i class='bx bx-check-circle text-secondary mt-1 mr-2'></i>
                                <span>Parking is available in designated areas only</span>
                            </li>
                            <li class="flex items-start">
                                <i class='bx bx-check-circle text-secondary mt-1 mr-2'></i>
                                <span>Follow health and safety guidelines as communicated</span>
                            </li>
                            <li class="flex items-start">
                                <i class='bx bx-check-circle text-secondary mt-1 mr-2'></i>
                                <span>Event-specific information will be shared in advance</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors">
                        Contact Us for Event Information
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

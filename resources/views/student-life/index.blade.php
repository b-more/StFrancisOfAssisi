@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/student-life-banner.jpg') }}" alt="Student Life" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Student+Life'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Student Life</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Nurturing well-rounded individuals through diverse experiences beyond the classroom
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">Life at St. Francis</h2>
            <p class="text-gray-600 mb-4">
                At St. Francis of Assisi Private School, we believe that education extends far beyond the classroom. Our vibrant student life program provides a wealth of opportunities for students to explore their interests, develop their talents, build character, and form lifelong friendships.
            </p>
            <p class="text-gray-600">
                Through a diverse range of extracurricular activities, sports, clubs, cultural events, and community service initiatives, we aim to nurture well-rounded individuals who are not only academically accomplished but also socially responsible, creative, and resilient.
            </p>
        </div>

        <!-- Featured Video -->
        <div class="max-w-5xl mx-auto mb-20">
            <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-lg relative">
                <!-- Placeholder for video - replace with actual video embed -->
                <img src="{{ asset('images/student-life-video.jpg') }}" alt="Student Life at St. Francis" class="w-full h-full object-cover"
                     onerror="this.src='https://via.placeholder.com/1280x720?text=Student+Life+Video'">
                <div class="absolute inset-0 flex items-center justify-center">
                    <button class="w-20 h-20 bg-primary/80 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <p class="text-center text-gray-600 mt-4 italic">Experience a day in the life of our students at St. Francis of Assisi Private School</p>
        </div>

        <!-- Student Life Areas -->
        <div class="max-w-7xl mx-auto mb-20">
            <h3 class="text-2xl font-bold text-primary mb-10 text-center">Areas of Student Life</h3>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Sports -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/sports.jpg') }}" alt="Sports Programs" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.src='https://via.placeholder.com/400x300?text=Sports'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h4 class="text-xl font-bold text-white">Sports Programs</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Our comprehensive sports program develops physical fitness, teamwork, and sportsmanship through various athletic activities and competitive teams.
                        </p>
                        <a href="{{ route('student-life.sports') }}" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            Learn more
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Clubs & Activities -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/clubs.jpg') }}" alt="Clubs & Activities" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.src='https://via.placeholder.com/400x300?text=Clubs'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h4 class="text-xl font-bold text-white">Clubs & Activities</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Students can explore interests, develop talents, and build friendships through our diverse range of clubs and extracurricular activities.
                        </p>
                        <a href="{{ route('student-life.clubs') }}" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            Learn more
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Arts & Culture -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/arts.jpg') }}" alt="Arts & Culture" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.src='https://via.placeholder.com/400x300?text=Arts'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h4 class="text-xl font-bold text-white">Arts & Culture</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Our arts program nurtures creativity and self-expression through music, drama, dance, visual arts, and cultural celebrations.
                        </p>
                        <a href="#" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            Learn more
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Leadership & Service -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/leadership.jpg') }}" alt="Leadership & Service" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.src='https://via.placeholder.com/400x300?text=Leadership'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h4 class="text-xl font-bold text-white">Leadership & Service</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Students develop leadership skills and a sense of social responsibility through various roles, initiatives, and community service projects.
                        </p>
                        <a href="#" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            Learn more
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Field Trips & Excursions -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/field-trips.jpg') }}" alt="Field Trips & Excursions" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.src='https://via.placeholder.com/400x300?text=Field+Trips'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h4 class="text-xl font-bold text-white">Field Trips & Excursions</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Educational trips and excursions extend learning beyond the classroom, providing real-world contexts and memorable experiences.
                        </p>
                        <a href="#" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            Learn more
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- School Events -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/events.jpg') }}" alt="School Events" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.src='https://via.placeholder.com/400x300?text=School+Events'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h4 class="text-xl font-bold text-white">School Events</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Special events, ceremonies, and celebrations throughout the school year create a vibrant community and memorable experiences.
                        </p>
                        <a href="{{ route('events') }}" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            Learn more
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Support -->
        <div class="max-w-5xl mx-auto mb-20">
            <h3 class="text-2xl font-bold text-primary mb-10 text-center">Student Support & Well-being</h3>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                            <i class='bx bx-heart-circle text-2xl text-primary'></i>
                        </div>
                        <h4 class="text-xl font-semibold text-primary">Pastoral Care</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Our pastoral care system ensures that every student receives personal attention, guidance, and support. Each student is assigned to a homeroom teacher who serves as their first point of contact for any concerns or challenges.
                    </p>
                    <p class="text-gray-600">
                        We maintain open communication with parents and create a nurturing environment where students feel safe, valued, and supported in their personal and academic development.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                            <i class='bx bx-bulb text-2xl text-primary'></i>
                        </div>
                        <h4 class="text-xl font-semibold text-primary">Counseling Services</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Our school counselors provide academic, social-emotional, and career guidance to help students navigate challenges, make informed decisions, and develop effective coping strategies.
                    </p>
                    <p class="text-gray-600">
                        Individual and group counseling sessions, workshops, and resources are available to support students' mental health and overall well-being.
                    </p>
                </div>
            </div>
        </div>

        <!-- House System -->
        <div class="max-w-5xl mx-auto mb-20">
            <div class="bg-primary/10 p-8 rounded-lg">
                <h3 class="text-2xl font-bold text-primary mb-6 text-center">Our House System</h3>

                <p class="text-gray-600 mb-6 text-center">
                    All students are assigned to one of four houses, creating smaller communities within our school where students develop friendships across grade levels, build team spirit, and engage in friendly competition.
                </p>

                <div class="grid md:grid-cols-4 gap-6">
                    <!-- Eagle House -->
                    <div class="bg-white p-5 rounded-lg text-center">
                        <div class="w-16 h-16 rounded-full bg-red-100 flex items-center justify-center mx-auto mb-3">
                            <span class="text-red-600 text-2xl font-bold">E</span>
                        </div>
                        <h4 class="font-bold text-lg text-red-600 mb-2">Eagle House</h4>
                        <p class="text-gray-600 text-sm">Symbolizing vision, leadership, and courage</p>
                    </div>

                    <!-- Lion House -->
                    <div class="bg-white p-5 rounded-lg text-center">
                        <div class="w-16 h-16 rounded-full bg-yellow-100 flex items-center justify-center mx-auto mb-3">
                            <span class="text-yellow-600 text-2xl font-bold">L</span>
                        </div>
                        <h4 class="font-bold text-lg text-yellow-600 mb-2">Lion House</h4>
                        <p class="text-gray-600 text-sm">Symbolizing strength, bravery, and determination</p>
                    </div>

                    <!-- Dolphin House -->
                    <div class="bg-white p-5 rounded-lg text-center">
                        <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-3">
                            <span class="text-blue-600 text-2xl font-bold">D</span>
                        </div>
                        <h4 class="font-bold text-lg text-blue-600 mb-2">Dolphin House</h4>
                        <p class="text-gray-600 text-sm">Symbolizing intelligence, teamwork, and harmony</p>
                    </div>

                    <!-- Rhino House -->
                    <div class="bg-white p-5 rounded-lg text-center">
                        <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-3">
                            <span class="text-green-600 text-2xl font-bold">R</span>
                        </div>
                        <h4 class="font-bold text-lg text-green-600 mb-2">Rhino House</h4>
                        <p class="text-gray-600 text-sm">Symbolizing resilience, steadfastness, and protection</p>
                    </div>
                </div>

                <p class="text-gray-600 mt-6 text-center">
                    Throughout the year, houses compete in various academic, sporting, cultural, and service activities, fostering healthy competition, teamwork, and school spirit.
                </p>
            </div>
        </div>

        <!-- Student Gallery -->
        <div class="max-w-7xl mx-auto mb-20">
            <h3 class="text-2xl font-bold text-primary mb-10 text-center">Student Life Gallery</h3>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="relative group overflow-hidden rounded-lg aspect-square">
                    <img src="{{ asset('images/gallery1.jpg') }}" alt="Student Life" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/300?text=Gallery+1'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg aspect-square">
                    <img src="{{ asset('images/gallery2.jpg') }}" alt="Student Life" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/300?text=Gallery+2'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg aspect-square">
                    <img src="{{ asset('images/gallery3.jpg') }}" alt="Student Life" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/300?text=Gallery+3'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg aspect-square">
                    <img src="{{ asset('images/gallery4.jpg') }}" alt="Student Life" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/300?text=Gallery+4'">
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

        <!-- Student Testimonials -->
        <div class="max-w-4xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-10 text-center">Student Testimonials</h3>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm relative">
                    <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                    <div class="relative z-10">
                        <p class="text-gray-600 italic mb-6">
                            Being part of the debate club and soccer team has helped me develop confidence, teamwork, and time management skills. I've made amazing friends and discovered talents I didn't know I had. Student life at St. Francis is vibrant and engaging!
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                <img src="{{ asset('images/student1.jpg') }}" alt="Student" class="w-full h-full object-cover rounded-full"
                                     onerror="this.src='https://via.placeholder.com/48?text=S'">
                            </div>
                            <div>
                                <h4 class="font-semibold">David Mumba</h4>
                                <p class="text-sm text-gray-500">Grade 10 Student</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg shadow-sm relative">
                    <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                    <div class="relative z-10">
                        <p class="text-gray-600 italic mb-6">
                            I love how we have so many opportunities to pursue our interests outside the classroom. The annual cultural day, sports competitions, and community service projects have been highlights of my time at St. Francis. The teachers encourage us to try new things and develop our talents.
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                <img src="{{ asset('images/student2.jpg') }}" alt="Student" class="w-full h-full object-cover rounded-full"
                                     onerror="this.src='https://via.placeholder.com/48?text=S'">
                            </div>
                            <div>
                                <h4 class="font-semibold">Rachel Banda</h4>
                                <p class="text-sm text-gray-500">Grade 8 Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="max-w-3xl mx-auto">
            <div class="bg-primary text-white rounded-lg p-8 text-center shadow-md">
                <h3 class="text-2xl font-bold mb-4">Join Our Vibrant School Community</h3>
                <p class="mb-6">
                    Experience a holistic education that nurtures academic excellence, character development, and a variety of enriching extracurricular activities.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('admissions.apply') }}" class="px-6 py-3 bg-secondary text-white rounded-lg hover:bg-secondary/90 transition-colors font-medium">
                        Apply Now
                    </a>
                    <a href="{{ route('contact') }}?tour=1" class="px-6 py-3 bg-white text-primary rounded-lg hover:bg-gray-100 transition-colors font-medium">
                        Schedule a Tour
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

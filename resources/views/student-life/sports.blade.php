@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/sports-banner.jpg') }}" alt="Sports Programs" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Sports+Programs'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Sports Programs</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Developing physical fitness, teamwork, and character through competitive and recreational sports
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">Athletics at St. Francis</h2>
            <p class="text-gray-600 mb-4">
                At St. Francis of Assisi Private School, we believe that sports and physical activity are essential components of a well-rounded education. Our comprehensive sports program aims to develop not only physical fitness and athletic skills but also important life skills such as teamwork, discipline, leadership, and sportsmanship.
            </p>
            <p class="text-gray-600">
                We offer a wide range of competitive and recreational sports opportunities for students of all ages and ability levels. Through participation in our sports programs, students learn to set goals, work hard, overcome challenges, and celebrate achievements while building healthy habits that last a lifetime.
            </p>
        </div>

        <!-- Featured Video -->
        <div class="max-w-5xl mx-auto mb-20">
            <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-lg relative">
                <!-- Placeholder for video - replace with actual video embed -->
                <img src="{{ asset('images/sports-video.jpg') }}" alt="Sports at St. Francis" class="w-full h-full object-cover"
                     onerror="this.src='https://via.placeholder.com/1280x720?text=Sports+Video'">
                <div class="absolute inset-0 flex items-center justify-center">
                    <button class="w-20 h-20 bg-primary/80 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <p class="text-center text-gray-600 mt-4 italic">Experience the excitement and energy of our sports program at St. Francis</p>
        </div>

        <!-- Sports Philosophy -->
        <div class="max-w-5xl mx-auto mb-20">
            <div class="bg-primary/5 p-8 rounded-lg">
                <h3 class="text-2xl font-bold text-primary mb-6 text-center">Our Sports Philosophy</h3>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class='bx bx-medal text-2xl text-primary'></i>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Participation</h4>
                        <p class="text-gray-600 text-sm">
                            We encourage all students to participate in sports, regardless of natural ability. Every student deserves the opportunity to experience the joy of physical activity and team participation.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class='bx bx-line-chart text-2xl text-primary'></i>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Development</h4>
                        <p class="text-gray-600 text-sm">
                            We focus on skill development, physical fitness, and continuous improvement. Our coaches work with students to build fundamental skills and progressive mastery of their sport.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class='bx bx-group text-2xl text-primary'></i>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Character</h4>
                        <p class="text-gray-600 text-sm">
                            We believe sports build character. We emphasize sportsmanship, respect, responsibility, and integrity in all our athletic endeavors, teaching students to win with humility and lose with grace.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Competitive Sports Programs -->
        <div class="max-w-5xl mx-auto mb-20">
            <div class="mb-8 text-center">
                <h3 class="text-2xl font-bold text-primary mb-2">Competitive Sports Programs</h3>
                <p class="text-gray-600">Representing St. Francis with pride and excellence</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Football/Soccer -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/sports/football.jpg') }}" alt="Football" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Football'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Football</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Our football teams compete in local and regional tournaments, developing technical skills, tactical understanding, and team coordination.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Tue, Thu, 3:30 - 5:30 PM</span>
                        </div>
                    </div>
                </div>

                <!-- Basketball -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/sports/basketball.jpg') }}" alt="Basketball" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Basketball'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Basketball</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Our basketball program focuses on fundamental skills, team play, and strategic thinking, with teams competing in interscholastic leagues.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Mon, Wed, Fri, 3:30 - 5:30 PM</span>
                        </div>
                    </div>
                </div>

                <!-- Athletics/Track & Field -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/sports/athletics.jpg') }}" alt="Athletics" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Athletics'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Athletics</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Our track and field athletes train in various disciplines including sprints, distance running, jumps, and throws, competing in meets throughout the season.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Mon-Fri, 3:30 - 5:00 PM</span>
                        </div>
                    </div>
                </div>

                <!-- Volleyball -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/sports/volleyball.jpg') }}" alt="Volleyball" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Volleyball'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Volleyball</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Our volleyball teams develop serving, passing, setting, and hitting skills while learning court positioning, game strategy, and teamwork.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Tue, Thu, 3:30 - 5:00 PM</span>
                        </div>
                    </div>
                </div>

                <!-- Swimming -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/sports/swimming.jpg') }}" alt="Swimming" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Swimming'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Swimming</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Our swim team trains in various strokes and distances, with opportunities to compete in interscholastic meets and regional competitions.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Mon, Wed, Fri, 6:30 - 8:00 AM</span>
                        </div>
                    </div>
                </div>

                <!-- Tennis -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/sports/tennis.jpg') }}" alt="Tennis" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Tennis'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Tennis</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Our tennis program develops technical skills, court awareness, and match strategies for both singles and doubles competitions.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Tue, Thu, 3:30 - 5:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recreational Sports & Physical Education -->
        <div class="max-w-5xl mx-auto mb-20 bg-gray-50 py-16 px-8 rounded-lg">
            <div class="mb-8 text-center">
                <h3 class="text-2xl font-bold text-primary mb-2">Recreational Sports & Physical Education</h3>
                <p class="text-gray-600">Building active lifestyles and fundamental movement skills for all students</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Physical Education Programs -->
                <div>
                    <h4 class="text-xl font-semibold text-primary mb-6">Physical Education Program</h4>
                    <p class="text-gray-600 mb-4">
                        Our comprehensive physical education program is designed to develop physical literacy, fundamental movement skills, and a love for physical activity in all students from ECE through Grade 12.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Age-appropriate activities focus on motor development, coordination, fitness, and exposure to a variety of sports and recreational activities that students can enjoy throughout their lives.
                    </p>

                    <h5 class="font-semibold text-primary mb-3">Program Highlights:</h5>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Regular PE classes for all students (2-3 times per week)</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Age-appropriate curriculum that builds skills progressively</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Focus on personal fitness and health education</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Exposure to a wide variety of sports and physical activities</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Inclusive activities that accommodate different ability levels</span>
                        </li>
                    </ul>
                </div>

                <!-- Recreational Sports -->
                <div>
                    <h4 class="text-xl font-semibold text-primary mb-6">Recreational Sports</h4>
                    <p class="text-gray-600 mb-4">
                        In addition to our competitive teams, we offer recreational sports opportunities for students who want to enjoy physical activity without the pressure of competition or the time commitment of team training.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Our recreational sports programs focus on fun, participation, and skill development in a relaxed and supportive environment.
                    </p>

                    <h5 class="font-semibold text-primary mb-3">Recreational Activities Include:</h5>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Lunchtime intramural competitions</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>House system sports competitions</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>After-school sports clubs (badminton, table tennis, etc.)</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Fitness and wellness activities (yoga, aerobics)</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Special events and sports days throughout the year</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sports Facilities -->
        <div class="max-w-5xl mx-auto mb-20">
            <div class="mb-8 text-center">
                <h3 class="text-2xl font-bold text-primary mb-2">Our Sports Facilities</h3>
                <p class="text-gray-600">State-of-the-art facilities to support athletic excellence</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Sports Field -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/facilities/field.jpg') }}" alt="Sports Field" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Sports+Field'">
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-primary mb-2">Sports Field</h4>
                        <p class="text-gray-600 text-sm">
                            Our regulation-size sports field accommodates football, rugby, and athletics events, with well-maintained grass and proper drainage systems.
                        </p>
                    </div>
                </div>

                <!-- Indoor Gymnasium -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/facilities/gymnasium.jpg') }}" alt="Gymnasium" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Gymnasium'">
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-primary mb-2">Indoor Gymnasium</h4>
                        <p class="text-gray-600 text-sm">
                            Our spacious gymnasium features a full-size basketball court, volleyball courts, spectator seating, and modern equipment for various indoor sports and activities.
                        </p>
                    </div>
                </div>

                <!-- Swimming Pool -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/facilities/pool.jpg') }}" alt="Swimming Pool" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Swimming+Pool'">
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-primary mb-2">Swimming Pool</h4>
                        <p class="text-gray-600 text-sm">
                            Our semi-Olympic swimming pool provides the perfect environment for swimming lessons, team training, and competitions with proper lane markings and starting blocks.
                        </p>
                    </div>
                </div>

                <!-- Tennis Courts -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/facilities/tennis.jpg') }}" alt="Tennis Courts" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Tennis+Courts'">

                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold text-primary mb-2">Tennis Courts</h4>
                                <p class="text-gray-600 text-sm">
                                    Our four professional-standard tennis courts with all-weather surfaces enable year-round training and competition for our tennis teams and recreational players.
                                </p>
                            </div>


                        <!-- Fitness Center -->
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="h-48">
                                <img src="{{ asset('images/facilities/fitness.jpg') }}" alt="Fitness Center" class="w-full h-full object-cover"
                                     onerror="this.src='https://via.placeholder.com/400x200?text=Fitness+Center'">
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold text-primary mb-2">Fitness Center</h4>
                                <p class="text-gray-600 text-sm">
                                    Our well-equipped fitness center includes cardiovascular machines, weights, and training areas for strength and conditioning programs for our athletes and PE classes.
                                </p>
                            </div>
                        </div>

                        <!-- Multi-Purpose Hall -->
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="h-48">
                                <img src="{{ asset('images/facilities/multipurpose.jpg') }}" alt="Multi-Purpose Hall" class="w-full h-full object-cover"
                                     onerror="this.src='https://via.placeholder.com/400x200?text=Multi-Purpose+Hall'">
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold text-primary mb-2">Multi-Purpose Hall</h4>
                                <p class="text-gray-600 text-sm">
                                    This versatile space accommodates indoor activities such as badminton, table tennis, dance, and aerobics, with appropriate flooring and equipment for various activities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sports Events & Competitions -->
                <div class="max-w-5xl mx-auto mb-20">
                    <div class="mb-8 text-center">
                        <h3 class="text-2xl font-bold text-primary mb-2">Annual Sports Events</h3>
                        <p class="text-gray-600">Celebrating athletic achievement and school spirit</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="bg-primary/10">
                                        <th class="py-3 px-6 text-left font-semibold text-primary">Event</th>
                                        <th class="py-3 px-6 text-left font-semibold text-primary">Description</th>
                                        <th class="py-3 px-6 text-left font-semibold text-primary">When</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-6 font-medium">Annual Sports Day</td>
                                        <td class="py-4 px-6 text-gray-600">A full day of track and field events, team competitions, and relays with participation from all students.</td>
                                        <td class="py-4 px-6 text-gray-600">March</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-6 font-medium">Inter-House Sports Competition</td>
                                        <td class="py-4 px-6 text-gray-600">Year-long competition between our four houses across various sports, fostering school spirit and friendly rivalry.</td>
                                        <td class="py-4 px-6 text-gray-600">Throughout the year</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-6 font-medium">Swimming Gala</td>
                                        <td class="py-4 px-6 text-gray-600">Annual swimming competition featuring various strokes, distances, and relay events for different age groups.</td>
                                        <td class="py-4 px-6 text-gray-600">May</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-6 font-medium">Inter-School Tournaments</td>
                                        <td class="py-4 px-6 text-gray-600">Competitive fixtures against other schools in football, basketball, volleyball, and athletics.</td>
                                        <td class="py-4 px-6 text-gray-600">Seasonal</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-6 font-medium">Parents vs. Students Matches</td>
                                        <td class="py-4 px-6 text-gray-600">Fun exhibition matches in various sports involving parents, students, and sometimes teachers.</td>
                                        <td class="py-4 px-6 text-gray-600">End of terms</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Meet Our Coaches -->
                <div class="max-w-5xl mx-auto mb-20 bg-gray-50 py-16 px-8 rounded-lg">
                    <div class="mb-8 text-center">
                        <h3 class="text-2xl font-bold text-primary mb-2">Meet Our Coaches</h3>
                        <p class="text-gray-600">Experienced professionals dedicated to athletic excellence and character development</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Coach 1 -->
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="h-48">
                                <img src="{{ asset('images/coaches/coach1.jpg') }}" alt="Coach James Mwanza" class="w-full h-full object-cover"
                                     onerror="this.src='https://via.placeholder.com/400x200?text=Coach'">
                            </div>
                            <div class="p-6">
                                <h4 class="text-lg font-semibold text-primary mb-1">Mr. James Mwanza</h4>
                                <p class="text-sm text-gray-500 mb-3">Athletic Director & Football Coach</p>
                                <p class="text-gray-600 text-sm">
                                    Former national team player with 15+ years of coaching experience, Coach Mwanza oversees our entire sports program and coaches our football teams.
                                </p>
                            </div>
                        </div>

                        <!-- Coach 2 -->
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="h-48">
                                <img src="{{ asset('images/coaches/coach2.jpg') }}" alt="Coach Sarah Banda" class="w-full h-full object-cover"
                                     onerror="this.src='https://via.placeholder.com/400x200?text=Coach'">
                            </div>
                            <div class="p-6">
                                <h4 class="text-lg font-semibold text-primary mb-1">Ms. Sarah Banda</h4>
                                <p class="text-sm text-gray-500 mb-3">Basketball & Athletics Coach</p>
                                <p class="text-gray-600 text-sm">
                                    A former collegiate basketball player and certified track coach, Ms. Banda brings passion and technical expertise to our basketball and athletics programs.
                                </p>
                            </div>
                        </div>

                        <!-- Coach 3 -->
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="h-48">
                                <img src="{{ asset('images/coaches/coach3.jpg') }}" alt="Coach David Tembo" class="w-full h-full object-cover"
                                     onerror="this.src='https://via.placeholder.com/400x200?text=Coach'">
                            </div>
                            <div class="p-6">
                                <h4 class="text-lg font-semibold text-primary mb-1">Mr. David Tembo</h4>
                                <p class="text-sm text-gray-500 mb-3">Swimming Coach</p>
                                <p class="text-gray-600 text-sm">
                                    With international competition experience and certified coaching credentials, Coach Tembo develops our swimmers from beginners to competitive athletes.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-8">
                        <p class="text-gray-600">
                            All our coaches are certified professionals with backgrounds in their respective sports and a commitment to developing both athletic skills and character in our students.
                        </p>
                    </div>
                </div>

                <!-- Sports Gallery -->
                <div class="max-w-5xl mx-auto mb-20">
                    <div class="mb-8 text-center">
                        <h3 class="text-2xl font-bold text-primary mb-2">Sports Gallery</h3>
                        <p class="text-gray-600">Capturing memorable moments in St. Francis athletics</p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="relative group overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/sports-gallery/gallery1.jpg') }}" alt="Sports Gallery" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                 onerror="this.src='https://via.placeholder.com/300?text=Sports+1'">
                            <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <i class='bx bx-search text-white text-3xl'></i>
                            </div>
                        </div>

                        <div class="relative group overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/sports-gallery/gallery2.jpg') }}" alt="Sports Gallery" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                 onerror="this.src='https://via.placeholder.com/300?text=Sports+2'">
                            <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <i class='bx bx-search text-white text-3xl'></i>
                            </div>
                        </div>

                        <div class="relative group overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/sports-gallery/gallery3.jpg') }}" alt="Sports Gallery" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                 onerror="this.src='https://via.placeholder.com/300?text=Sports+3'">
                            <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <i class='bx bx-search text-white text-3xl'></i>
                            </div>
                        </div>

                        <div class="relative group overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/sports-gallery/gallery4.jpg') }}" alt="Sports Gallery" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                 onerror="this.src='https://via.placeholder.com/300?text=Sports+4'">
                            <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <i class='bx bx-search text-white text-3xl'></i>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-8">
                        <a href="{{ route('gallery') }}?category=sports" class="inline-block px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors">
                            View More Photos
                        </a>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="max-w-4xl mx-auto mb-16">
                    <div class="mb-8 text-center">
                        <h3 class="text-2xl font-bold text-primary mb-2">Frequently Asked Questions</h3>
                        <p class="text-gray-600">Answers to common questions about our sports programs</p>
                    </div>

                    <div class="space-y-4">
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <button class="flex justify-between items-center w-full p-4 text-left font-medium text-primary hover:bg-gray-50 focus:outline-none">
                                <span>How can my child join a sports team?</span>
                                <svg class="h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="px-4 pb-4">
                                <p class="text-gray-600">
                                    Most of our sports teams hold tryouts at the beginning of each season. Information about tryout dates is communicated through morning announcements, bulletin boards, and emails to parents. Some teams also offer open training sessions that any interested student can attend. Contact the Athletic Director or specific coach for more information.
                                </p>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <button class="flex justify-between items-center w-full p-4 text-left font-medium text-primary hover:bg-gray-50 focus:outline-none">
                                <span>What equipment or gear does my child need?</span>
                                <svg class="h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="px-4 pb-4">
                                <p class="text-gray-600">
                                    For PE classes, students need the standard PE uniform, appropriate athletic shoes, and sometimes swimming gear. For competitive teams, specific equipment requirements will be provided by the coach after team selection. The school provides most major equipment, but personal items like appropriate footwear are typically the responsibility of families.
                                </p>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <button class="flex justify-between items-center w-full p-4 text-left font-medium text-primary hover:bg-gray-50 focus:outline-none">
                                <span>What is the time commitment for sports teams?</span>
                                <svg class="h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="px-4 pb-4">
                                <p class="text-gray-600">
                                    Most competitive teams practice 2-3 times per week for 1.5-2 hours after school. Matches or competitions are typically held on weekends or occasionally on weekday afternoons. The specific schedule varies by sport and season. We emphasize that academics always come first, and our coaches work with students to help them balance their commitments.
                                </p>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <button class="flex justify-between items-center w-full p-4 text-left font-medium text-primary hover:bg-gray-50 focus:outline-none">
                                <span>Are there additional fees for sports participation?</span>
                                <svg class="h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="px-4 pb-4">
                                <p class="text-gray-600">
                                    Basic participation in PE and recreational sports is included in tuition. For competitive teams, there may be additional fees to cover tournament entries, transportation, specialized equipment, or uniforms. These fees are kept as minimal as possible and are communicated clearly at the beginning of each season. Financial assistance is available for families who need support.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="max-w-4xl mx-auto mt-16 bg-primary/5 rounded-lg p-8">
                    <h3 class="text-2xl font-bold text-primary mb-6 text-center">Sports Department Contact</h3>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-lg font-semibold text-primary mb-4">Athletic Director's Office</h4>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Mr. James Mwanza, Athletic Director</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z" clip-rule="evenodd" />
                                    </svg>
                                    <span>athletics@stfrancisschool.edu.zm</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    <span>(555) 123-4567 ext. 123</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Sports Complex, Office #103</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold text-primary mb-4">Office Hours</h4>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Monday - Friday: 8:00 AM - 4:30 PM</span>
                                </li>
                                <li class="mt-4 text-sm">
                                    Parents and students are welcome to visit the Athletic Director's office during office hours to discuss sports programs, schedules, and opportunities for participation.
                                </li>
                                <li class="mt-4 text-sm">
                                    For specific team information, please contact the team coach directly. Contact information is provided to team members at the beginning of each season.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="max-w-4xl mx-auto text-center mt-16">
                    <h3 class="text-2xl font-bold text-primary mb-4">Join Our Sports Programs</h3>
                    <p class="text-gray-600 mb-8 max-w-3xl mx-auto">
                        Whether you're interested in competitive sports or recreational activities, there's a place for you in our athletics programs. Develop skills, build confidence, and create lasting memories!
                    </p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="{{ route('contact') }}?subject=Sports%20Programs%20Information" class="inline-block bg-primary hover:bg-primary-dark text-white font-semibold px-8 py-3 rounded-lg transition-colors">
                            Contact Athletic Department
                        </a>
                        <a href="{{ route('calendar') }}?category=sports" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-8 py-3 rounded-lg transition-colors">
                            View Sports Calendar
                        </a>
                    </div>
                </div>
            </div>
        </section>
        @endsection

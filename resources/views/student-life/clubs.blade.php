@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/clubs-banner.jpg') }}" alt="Clubs & Activities" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Clubs+and+Activities'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Clubs & Activities</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Exploring interests, developing talents, and building friendships through extracurricular activities
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">Extracurricular Activities at St. Francis</h2>
            <p class="text-gray-600 mb-4">
                At St. Francis of Assisi Private School, we believe that learning extends beyond the classroom. Our diverse range of clubs and extracurricular activities provides students with opportunities to explore their interests, develop new skills, nurture their talents, and build meaningful friendships.
            </p>
            <p class="text-gray-600">
                These activities are an important part of our holistic approach to education, helping students develop leadership, teamwork, time management, and other essential life skills. We encourage all students to participate in at least one extracurricular activity that aligns with their interests and passions.
            </p>
        </div>

        <!-- How to Join -->
        <div class="max-w-5xl mx-auto mb-16">
            <div class="bg-primary/10 p-8 rounded-lg">
                <h3 class="text-2xl font-bold text-primary mb-6 text-center">How to Join</h3>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-primary text-2xl font-bold">1</span>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Explore Options</h4>
                        <p class="text-gray-600 text-sm">
                            Browse our catalog of clubs and activities to find those that match your interests and schedule.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-primary text-2xl font-bold">2</span>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Sign Up</h4>
                        <p class="text-gray-600 text-sm">
                            Complete the club registration form available from homeroom teachers or the Student Affairs office.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-primary text-2xl font-bold">3</span>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Participate</h4>
                        <p class="text-gray-600 text-sm">
                            Attend club meetings and activities regularly and actively participate to get the most from your experience.
                        </p>
                    </div>
                </div>

                <p class="text-gray-600 mt-6 text-center">
                    Club sign-ups take place during the first two weeks of each term. Some competitive clubs may require auditions or tryouts.
                </p>
            </div>
        </div>

        <!-- Academic Clubs -->
        <div class="max-w-5xl mx-auto mb-20">
            <div class="mb-8 text-center">
                <h3 class="text-2xl font-bold text-primary mb-2">Academic Clubs</h3>
                <p class="text-gray-600">Extend your learning beyond the classroom</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/debate-club.jpg') }}" alt="Debate Club" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Debate+Club'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Debate Club</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Develop critical thinking and public speaking skills through structured debates on current events and philosophical topics.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Tuesdays, 3:30 - 5:00 PM</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/science-club.jpg') }}" alt="Science Club" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Science+Club'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Science Club</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Explore scientific concepts through hands-on experiments, projects, and competitions in various scientific disciplines.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Wednesdays, 3:30 - 5:00 PM</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/robotics-club.jpg') }}" alt="Robotics Club" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Robotics+Club'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Robotics Club</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Design, build, and program robots for various challenges and competitions, learning STEM principles in a fun, collaborative environment.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Thursdays, 3:30 - 5:30 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Arts & Culture Clubs -->
        <div class="max-w-5xl mx-auto mb-20 bg-gray-50 py-16 px-8 rounded-lg">
            <div class="mb-8 text-center">
                <h3 class="text-2xl font-bold text-primary mb-2">Arts & Culture Clubs</h3>
                <p class="text-gray-600">Express yourself through creative pursuits</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/drama-club.jpg') }}" alt="Drama Club" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Drama+Club'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Drama Club</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Develop acting, directing, and stagecraft skills while preparing for school productions and performances throughout the year.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Mondays & Fridays, 3:30 - 5:00 PM</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/art-club.jpg') }}" alt="Art Club" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Art+Club'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Art Club</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Explore various artistic mediums and techniques while developing your creative voice through individual and collaborative projects.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Tuesdays, 3:30 - 5:00 PM</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/music-club.jpg') }}" alt="Music Club" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Music+Club'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Music Club</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Develop musical skills through vocal and instrumental practice, composition, and performance opportunities throughout the year.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Wednesdays, 3:30 - 5:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sports & Athletics -->
        <div class="max-w-5xl mx-auto mb-20">
            <div class="mb-8 text-center">
                <h3 class="text-2xl font-bold text-primary mb-2">Sports & Athletics</h3>
                <p class="text-gray-600">Build teamwork, discipline, and physical fitness</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/basketball-team.jpg') }}" alt="Basketball Team" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Basketball+Team'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Basketball Team</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Compete in interscholastic basketball tournaments while developing skills, strategy, and sportsmanship.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Mon, Wed, Fri, 3:30 - 5:30 PM</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/soccer-team.jpg') }}" alt="Soccer Team" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Soccer+Team'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Soccer Team</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Train and compete in soccer matches against other schools, developing teamwork, conditioning, and technical skills.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Tue, Thu, 3:30 - 5:30 PM</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/swimming-team.jpg') }}" alt="Swimming Team" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Swimming+Team'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Swimming Team</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Develop swimming techniques and compete in various strokes and distances at interscholastic swimming meets.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Mon, Wed, Fri, 6:30 - 8:00 AM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service & Community -->
        <div class="max-w-5xl mx-auto mb-20 bg-gray-50 py-16 px-8 rounded-lg">
            <div class="mb-8 text-center">
                <h3 class="text-2xl font-bold text-primary mb-2">Service & Community</h3>
                <p class="text-gray-600">Make a positive impact in our community</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/student-council.jpg') }}" alt="Student Council" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Student+Council'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Student Council</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Develop leadership skills while representing student interests, organizing events, and implementing school improvement initiatives.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Fridays, 3:30 - 5:00 PM</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/environmental-club.jpg') }}" alt="Environmental Club" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Environmental+Club'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Environmental Club</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Work on sustainability projects, campus clean-ups, and environmental awareness campaigns to protect our planet.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Thursdays, 3:30 - 5:00 PM</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 relative">
                        <img src="{{ asset('images/clubs/volunteer-club.jpg') }}" alt="Volunteer Club" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Volunteer+Club'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <h4 class="absolute bottom-3 left-4 text-xl font-bold text-white">Volunteer Club</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">Participate in local community service projects, fundraisers, and outreach programs to help those in need.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Wednesdays, 3:30 - 5:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="max-w-4xl mx-auto mt-16 bg-primary/5 rounded-lg p-8">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Contact Information</h3>

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h4 class="text-lg font-semibold text-primary mb-4">Club & Activities Office</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                            <span>Mrs. Catherine Miller, Activities Coordinator</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z" clip-rule="evenodd" />
                            </svg>
                            <span>cmiller@stfrancisschool.edu</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span>(555) 123-4567 ext. 321</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span>Room 202, Student Center</span>
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
                            Students and parents are welcome to visit the Activities Office during office hours to discuss club options, scheduling, or any other extracurricular-related questions.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="max-w-4xl mx-auto text-center mt-16">
            <h3 class="text-2xl font-bold text-primary mb-4">Ready to Get Involved?</h3>
            <p class="text-gray-600 mb-8 max-w-3xl mx-auto">
                Don't miss the opportunity to enhance your school experience, develop new skills, and make lasting friendships through our extracurricular activities!
            </p>
            <a href="{{ route('club.register') }}" class="inline-block bg-primary hover:bg-primary-dark text-white font-semibold px-8 py-3 rounded-lg transition-colors">
                Register for a Club Today
            </a>
        </div>
    </div>
</section>
@endsection

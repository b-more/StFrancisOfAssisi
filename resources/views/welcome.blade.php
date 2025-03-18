<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="St. Francis of Assisi Private School - Nurturing Excellence, Inspiring the Future! A premier educational institution in Lusaka, Zambia offering quality education from baby class to grade 12.">
    <title>St. Francis of Assisi Private School - Nurturing Excellence, Inspiring the Future</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Add Boxicons for improved icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Add Swiper for Hero Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .transition-all {
            transition: all 0.3s ease-in-out;
        }
        .swiper {
            width: 100%;
            height: 100%;
        }
        .hero-gradient {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
        }
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#002366',     // Royal blue as primary color
                        secondary: '#FFD700',   // Gold/yellow as secondary color
                        accent: '#B22234'       // Red


                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Top Bar with Quick Info -->
    <div class="bg-primary text-white py-2 px-4">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center">
            <div class="flex flex-wrap items-center space-x-4">
                <div class="flex items-center text-sm">
                    <i class='bx bxs-phone text-secondary mr-1'></i>
                    <span>+260 972 266 217</span>
                </div>
                <div class="flex items-center text-sm">
                    <i class='bx bxs-envelope text-secondary mr-1'></i>
                    <span>info@stfrancisofssissi.co.zm</span>
                </div>
                <div class="flex items-center text-sm">
                    <i class='bx bxs-map text-secondary mr-1'></i>
                    <span>Kamenza East, Lusaka</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <a href="#" class="text-white hover:text-secondary transition-colors">
                    <i class='bx bxl-facebook text-lg'></i>
                </a>
                <a href="#" class="text-white hover:text-secondary transition-colors">
                    <i class='bx bxl-instagram text-lg'></i>
                </a>
                <a href="#" class="text-white hover:text-secondary transition-colors">
                    <i class='bx bxl-twitter text-lg'></i>
                </a>
                <a href="#" class="text-white hover:text-secondary transition-colors">
                    <i class='bx bxl-youtube text-lg'></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Hero Section with Slideshow -->
    <section id="home" class="relative h-screen">
        <div class="swiper hero-swiper h-full">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 hero-gradient"></div>
                    <img src="{{ asset('images/gallery1.jpg') }}" alt="School Building"
                        class="w-full h-full object-cover"
                        onerror="this.src='https://via.placeholder.com/1920x1080?text=School+Building'">
                    <div class="absolute inset-0 flex items-center justify-center text-center px-4">
                        <div class="max-w-3xl">
                            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                                Welcome to St. Francis of Assisi
                            </h1>
                            <p class="text-xl md:text-2xl text-white/90 mb-8">
                                Nurturing Excellence, Inspiring the Future!
                            </p>
                            <div class="flex flex-wrap justify-center gap-4">
                                <a href="{{ route('admissions.apply') }}"
                                   class="inline-block bg-secondary text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-secondary/90 transition-colors">
                                    Apply Now
                                </a>
                                <a href="{{ route('about') }}#virtual-tour"
                                   class="inline-block bg-white text-primary px-8 py-3 rounded-full text-lg font-semibold hover:bg-gray-100 transition-colors">
                                    Virtual Tour
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 hero-gradient"></div>
                    <img src="{{ asset('images/slide2.jpg') }}" alt="Students Learning"
                        class="w-full h-full object-cover"
                        onerror="this.src='https://via.placeholder.com/1920x1080?text=Students+Learning'">
                    <div class="absolute inset-0 flex items-center justify-center text-center px-4">
                        <div class="max-w-3xl">
                            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                                Excellence in Education
                            </h1>
                            <p class="text-xl md:text-2xl text-white/90 mb-8">
                                Providing quality education from Baby Class to Grade 12
                            </p>
                            <a href="{{ route('academics') }}"
                               class="inline-block bg-secondary text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-secondary/90 transition-colors">
                                Explore Academics
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 hero-gradient"></div>
                    <img src="{{ asset('images/slide3.jpg') }}" alt="School Activities"
                        class="w-full h-full object-cover"
                        onerror="this.src='https://via.placeholder.com/1920x1080?text=School+Activities'">
                    <div class="absolute inset-0 flex items-center justify-center text-center px-4">
                        <div class="max-w-3xl">
                            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                                Holistic Development
                            </h1>
                            <p class="text-xl md:text-2xl text-white/90 mb-8">
                                Developing mind, body, and character through diverse activities
                            </p>
                            <a href="{{ route('student-life') }}"
                               class="inline-block bg-secondary text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-secondary/90 transition-colors">
                                Student Life
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>
        </div>
    </section>

    <!-- Quick Access Links -->
    <section class="py-8 bg-white shadow-md relative z-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="{{ route('admissions') }}" class="flex flex-col items-center p-4 hover:bg-gray-50 rounded-lg transition-colors">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-3">
                        <i class='bx bxs-graduation text-2xl text-primary'></i>
                    </div>
                    <span class="text-gray-700 font-medium text-center">Admissions</span>
                </a>

                <a href="{{ route('academics') }}" class="flex flex-col items-center p-4 hover:bg-gray-50 rounded-lg transition-colors">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-3">
                        <i class='bx bxs-book-open text-2xl text-primary'></i>
                    </div>
                    <span class="text-gray-700 font-medium text-center">Academics</span>
                </a>

                <a href="{{ route('calendar') }}" class="flex flex-col items-center p-4 hover:bg-gray-50 rounded-lg transition-colors">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-3">
                        <i class='bx bxs-calendar text-2xl text-primary'></i>
                    </div>
                    <span class="text-gray-700 font-medium text-center">School Calendar</span>
                </a>

                <a href="{{ route('portal') }}" class="flex flex-col items-center p-4 hover:bg-gray-50 rounded-lg transition-colors">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-3">
                        <i class='bx bxs-user-account text-2xl text-primary'></i>
                    </div>
                    <span class="text-gray-700 font-medium text-center">Parent Portal</span>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section with Enhanced Icons -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Why Choose St. Francis?</h2>
                <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    At St. Francis of Assisi Private School, we provide a nurturing environment where students achieve academic excellence while developing strong character and life skills.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Academic Excellence -->
                <div class="bg-gray-50 p-8 rounded-lg text-center hover:shadow-lg transition-all border-t-4 border-primary">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-medal text-3xl text-primary'></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Academic Excellence</h3>
                    <p class="text-gray-600">Our robust curriculum and dedicated faculty ensure that students achieve their highest academic potential with consistently high exam results.</p>
                </div>

                <!-- Small Class Sizes -->
                <div class="bg-gray-50 p-8 rounded-lg text-center hover:shadow-lg transition-all border-t-4 border-primary">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-group text-3xl text-primary'></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Small Class Sizes</h3>
                    <p class="text-gray-600">With a maximum of 25 students per class, we ensure personalized attention and support for each student's unique learning needs.</p>
                </div>

                <!-- Modern Facilities -->
                <div class="bg-gray-50 p-8 rounded-lg text-center hover:shadow-lg transition-all border-t-4 border-primary">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-building-house text-3xl text-primary'></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Modern Facilities</h3>
                    <p class="text-gray-600">Our school boasts state-of-the-art classrooms, laboratories, library, and sports facilities to enhance the learning experience.</p>
                </div>

                <!-- Qualified Teachers -->
                <div class="bg-gray-50 p-8 rounded-lg text-center hover:shadow-lg transition-all border-t-4 border-primary">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-user-voice text-3xl text-primary'></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Qualified Teachers</h3>
                    <p class="text-gray-600">Our educators are highly qualified professionals who are passionate about teaching and committed to student success.</p>
                </div>

                <!-- Extracurricular Activities -->
                <div class="bg-gray-50 p-8 rounded-lg text-center hover:shadow-lg transition-all border-t-4 border-primary">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-football text-3xl text-primary'></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Vibrant Activities</h3>
                    <p class="text-gray-600">We offer a wide range of sports, clubs, and creative activities to nurture well-rounded individuals with diverse talents.</p>
                </div>

                <!-- Values-Based Education -->
                <div class="bg-gray-50 p-8 rounded-lg text-center hover:shadow-lg transition-all border-t-4 border-primary">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-heart text-3xl text-primary'></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Values-Based Education</h3>
                    <p class="text-gray-600">We instill strong moral values and ethics in our students, preparing them to be responsible and compassionate citizens.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs & Levels Section -->
    <section id="programs" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Our Educational Programs</h2>
                <div class="w-24 h-1 bg-secondary mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- ECE -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm group hover:shadow-md transition-all">
                    <div class="relative h-48">
                        <img src="{{ asset('images/1.jpg') }}" alt="Early Childhood Education"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                             onerror="this.src='https://via.placeholder.com/400x300?text=Early+Childhood'">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/70 to-transparent opacity-90"></div>
                        <div class="absolute bottom-0 left-0 p-4 text-white">
                            <h3 class="text-xl font-bold">Early Childhood</h3>
                            <p class="text-sm">Baby Class - KG3</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">A nurturing environment where young learners develop foundational skills through play-based learning and exploration.</p>
                        <a href="{{ route('academics.early-childhood') }}" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            Learn More
                            <i class='bx bx-right-arrow-alt ml-1'></i>
                        </a>
                    </div>
                </div>

                <!-- Primary -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm group hover:shadow-md transition-all">
                    <div class="relative h-48">
                        <img src="{{ asset('images/pastors.jpg') }}" alt="Primary Education"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                             onerror="this.src='https://via.placeholder.com/400x300?text=Primary+Education'">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/70 to-transparent opacity-90"></div>
                        <div class="absolute bottom-0 left-0 p-4 text-white">
                            <h3 class="text-xl font-bold">Primary School</h3>
                            <p class="text-sm">Grades 1-7</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">A comprehensive curriculum focusing on literacy, numeracy, and creative thinking with personalized attention.</p>
                        <a href="{{ route('academics.primary') }}" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            Learn More
                            <i class='bx bx-right-arrow-alt ml-1'></i>
                        </a>
                    </div>
                </div>

                <!-- Secondary -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm group hover:shadow-md transition-all">
                    <div class="relative h-48">
                        <img src="{{ asset('images/pastors2.jpg') }}" alt="Secondary Education"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                             onerror="this.src='https://via.placeholder.com/400x300?text=Secondary+Education'">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/70 to-transparent opacity-90"></div>
                        <div class="absolute bottom-0 left-0 p-4 text-white">
                            <h3 class="text-xl font-bold">Secondary School</h3>
                            <p class="text-sm">Grades 8-12</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Rigorous academic program preparing students for university and future careers with specialized subjects.</p>
                        <a href="{{ route('academics.secondary') }}" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                            Learn More
                            <i class='bx bx-right-arrow-alt ml-1'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">What Parents & Students Say</h2>
                <div class="w-24 h-1 bg-secondary mx-auto"></div>
            </div>

            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper py-8">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 p-8 rounded-lg relative">
                            <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                            <div class="relative z-10">
                                <p class="text-gray-600 italic mb-6">
                                    St. Francis has been an amazing school for my children. The teachers are dedicated and the academic standards are excellent. My kids have thrived here!
                                </p>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                        <img src="{{ asset('images/1.jpg') }}" alt="Parent"
                                             class="w-full h-full object-cover rounded-full"
                                             onerror="this.src='https://via.placeholder.com/96?text=P'">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold">Maria Mulenga</h4>
                                        <p class="text-sm text-gray-500">Parent of Grade 5 & 9 students</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 p-8 rounded-lg relative">
                            <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                            <div class="relative z-10">
                                <p class="text-gray-600 italic mb-6">
                                    The quality of education at St. Francis is exceptional. I've seen tremendous growth in my son's academic performance and confidence since enrolling him here.
                                </p>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                        <img src="{{ asset('images/parent2.jpg') }}" alt="Parent"
                                             class="w-full h-full object-cover rounded-full"
                                             onerror="this.src='https://via.placeholder.com/96?text=P'">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold">David Banda</h4>
                                        <p class="text-sm text-gray-500">Parent of Grade 3 student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 p-8 rounded-lg relative">
                            <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                            <div class="relative z-10">
                                <p class="text-gray-600 italic mb-6">
                                    As a recent graduate, I can confidently say that St. Francis prepared me extremely well for university. The teachers went above and beyond to ensure we understood the material.
                                </p>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                        <img src="{{ asset('images/student1.jpg') }}" alt="Student"
                                             class="w-full h-full object-cover rounded-full"
                                             onerror="this.src='https://via.placeholder.com/96?text=S'">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold">Chipo Mutale</h4>
                                        <p class="text-sm text-gray-500">Former Student, Class of 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- News & Events Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Latest News & Upcoming Events</h2>
                <div class="w-24 h-1 bg-secondary mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- News Section -->
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-gray-800">School News</h3>
                        <a href="{{ route('news') }}" class="text-primary hover:text-primary/80 font-medium flex items-center">
                            View All
                            <i class='bx bx-right-arrow-alt ml-1'></i>
                        </a>
                    </div>

                    <div class="space-y-6">
                        <!-- News Item 1 -->
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-all flex gap-4">
                            <div class="flex-shrink-0 w-24 h-24 bg-gray-200 rounded-md overflow-hidden">
                                <img src="{{ asset('images/pastors.jpg') }}" alt="News"
                                     class="w-full h-full object-cover"
                                     onerror="this.src='https://via.placeholder.com/96?text=News'">
                            </div>
                            <div>
                                <span class="text-xs text-gray-500">June 10, 2023</span>
                                <h4 class="font-semibold mb-1 hover:text-primary transition-colors">
                                    <a href="#">Students Win National Science Competition</a>
                                </h4>
                                <p class="text-gray-600 text-sm line-clamp-2">Our Grade 10 students secured the first place in the National Science Fair with their innovative renewable energy project...</p>
                            </div>
                        </div>

                        <!-- News Item 2 -->
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-all flex gap-4">
                            <div class="flex-shrink-0 w-24 h-24 bg-gray-200 rounded-md overflow-hidden">
                                <img src="{{ asset('images/pastors2.jpg') }}" alt="News"
                                     class="w-full h-full object-cover"
                                     onerror="this.src='https://via.placeholder.com/96?text=News'">
                            </div>
                            <div>
                                <span class="text-xs text-gray-500">May 25, 2023</span>
                                <h4 class="font-semibold mb-1 hover:text-primary transition-colors">
                                    <a href="#">New Computer Lab Inaugurated</a>
                                </h4>
                                <p class="text-gray-600 text-sm line-clamp-2">We're excited to announce the opening of our new state-of-the-art computer lab equipped with the latest technology...</p>
                            </div>
                        </div>

                        <!-- News Item 3 -->
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-all flex gap-4">
                            <div class="flex-shrink-0 w-24 h-24 bg-gray-200 rounded-md overflow-hidden">
                                <img src="{{ asset('images/rev.png') }}" alt="News"
                                     class="w-full h-full object-cover"
                                     onerror="this.src='https://via.placeholder.com/96?text=News'">
                            </div>
                            <div>
                                <span class="text-xs text-gray-500">May 12, 2023</span>
                                <h4 class="font-semibold mb-1 hover:text-primary transition-colors">
                                    <a href="#">100% Pass Rate in Grade 12 ECZ Exams</a>
                                </h4>
                                <p class="text-gray-600 text-sm line-clamp-2">We're proud to announce that our 2023 graduating class achieved a 100% pass rate in the ECZ examinations with exceptional results...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Events Section -->
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-gray-800">Upcoming Events</h3>
                        <a href="{{ route('events') }}" class="text-primary hover:text-primary/80 font-medium flex items-center">
                            View Calendar
                            <i class='bx bx-right-arrow-alt ml-1'></i>
                        </a>
                    </div>

                    <div class="space-y-6">
                        <!-- Event 1 -->
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-all flex">
                            <div class="flex-shrink-0 w-16 h-16 bg-primary/10 rounded-lg flex flex-col items-center justify-center mr-4">
                                <span class="text-primary font-bold text-xl">15</span>
                                <span class="text-primary text-xs">JUN</span>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1 hover:text-primary transition-colors">
                                    <a href="#">Annual Sports Day</a>
                                </h4>
                                <div class="flex items-center text-gray-500 text-sm mb-1">
                                    <i class='bx bx-time-five mr-1'></i>
                                    <span>8:00 AM - 4:00 PM</span>
                                </div>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <i class='bx bx-map mr-1'></i>
                                    <span>School Sports Ground</span>
                                </div>
                            </div>
                        </div>

                        <!-- Event 2 -->
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-all flex">
                            <div class="flex-shrink-0 w-16 h-16 bg-primary/10 rounded-lg flex flex-col items-center justify-center mr-4">
                                <span class="text-primary font-bold text-xl">22</span>
                                <span class="text-primary text-xs">JUN</span>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1 hover:text-primary transition-colors">
                                    <a href="#">Parent-Teacher Conference</a>
                                </h4>
                                <div class="flex items-center text-gray-500 text-sm mb-1">
                                    <i class='bx bx-time-five mr-1'></i>
                                    <span>2:00 PM - 5:00 PM</span>
                                </div>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <i class='bx bx-map mr-1'></i>
                                    <span>School Main Hall</span>
                                </div>
                            </div>
                        </div>

                        <!-- Event 3 -->
                        <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-all flex">
                            <div class="flex-shrink-0 w-16 h-16 bg-primary/10 rounded-lg flex flex-col items-center justify-center mr-4">
                                <span class="text-primary font-bold text-xl">30</span>
                                <span class="text-primary text-xs">JUN</span>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1 hover:text-primary transition-colors">
                                    <a href="#">Science & Technology Fair</a>
                                </h4>
                                <div class="flex items-center text-gray-500 text-sm mb-1">
                                    <i class='bx bx-time-five mr-1'></i>
                                    <span>9:00 AM - 3:00 PM</span>
                                </div>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <i class='bx bx-map mr-1'></i>
                                    <span>School Labs & Auditorium</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">School Gallery</h2>
                <div class="w-24 h-1 bg-secondary mx-auto"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Gallery Images -->
                <div class="relative overflow-hidden rounded-lg aspect-square group cursor-pointer">
                    <img src="{{ asset('images/gallery/gallery1.jpg') }}" alt="School Activities"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400?text=Gallery'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-lg aspect-square group cursor-pointer">
                    <img src="{{ asset('images/gallery/gallery2.jpg') }}" alt="Classroom Learning"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400?text=Gallery'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-lg aspect-square group cursor-pointer">
                    <img src="{{ asset('images/gallery/gallery3.jpg') }}" alt="Sports Activities"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400?text=Gallery'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-lg aspect-square group cursor-pointer">
                    <img src="{{ asset('images/gallery/gallery4.jpg') }}" alt="Music and Arts"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400?text=Gallery'">
                    <div class="absolute inset-0 bg-primary/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class='bx bx-search text-white text-3xl'></i>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('gallery') }}" class="inline-block bg-primary text-white px-6 py-3 rounded-lg hover:bg-primary/90 transition-all">
                    View Full Gallery
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Contact Us</h2>
                <div class="w-24 h-1 bg-secondary mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Get in Touch</h3>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                <i class='bx bx-map text-2xl text-primary'></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900">Our Location</h4>
                                <p class="text-gray-600">Plot No. 1310/4 Kamenza East, Chililabombwe</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                <i class='bx bx-phone text-2xl text-primary'></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900">Phone Number</h4>
                                <p class="text-gray-600">+260 972 266 217</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                <i class='bx bx-envelope text-2xl text-primary'></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900">Email Address</h4>
                                <p class="text-gray-600">info@stfrancisschool.co.zm</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                <i class='bx bx-time text-2xl text-primary'></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900">Office Hours</h4>
                                <p class="text-gray-600">Monday-Friday: 7:30 AM - 4:30 PM</p>
                            </div>
                        </div>
                    </div>

                    <!-- Google Map -->
                    <div class="mt-8 h-64 rounded-lg overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3915.1090141818045!2d27.84811981615786!3d-12.358781014120146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sst.%20francis%20of%20assisi%20%20chililabombwe!5e0!3m2!1sen!2szm!4v1741931129202!5m2!1sen!2szm"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Enrollment Inquiry Form -->
                <form action="{{ route('contact.submit') }}" method="POST" class="bg-white p-8 rounded-lg shadow-sm">
                    @csrf

                    @if(session('success'))
                        <div id="successNotification" class="mb-6 flex items-center bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded">
                            <i class='bx bx-check-circle text-2xl mr-2'></i>
                            <div>
                                <p class="font-medium">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <h3 class="text-2xl font-semibold mb-6">Send us a Message</h3>

                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text"
                                id="name"
                                name="name"
                                placeholder="Enter your full name"
                                value="{{ old('name') }}"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('name') border-red-500 @enderror">
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email address"
                                value="{{ old('email') }}"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel"
                                id="phone"
                                name="phone"
                                placeholder="260 9XXXXXXXX"
                                value="{{ old('phone') }}"
                                oninput="
                                    let value = this.value.replace(/\D/g, '');
                                    if (!value.startsWith('260')) {
                                        value = '260' + value;
                                    }
                                    this.value = value.slice(0, 12);
                                "
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('phone') border-red-500 @enderror">
                            @error('phone')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="inquiry_type" class="block text-sm font-medium text-gray-700 mb-1">Inquiry Type</label>
                            <select id="inquiry_type"
                                    name="inquiry_type"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('inquiry_type') border-red-500 @enderror">
                                <option value="">Select Inquiry Type</option>
                                <option value="enrollment" {{ old('inquiry_type') == 'enrollment' ? 'selected' : '' }}>Enrollment Information</option>
                                <option value="fees" {{ old('inquiry_type') == 'fees' ? 'selected' : '' }}>Fee Structure</option>
                                <option value="visit" {{ old('inquiry_type') == 'visit' ? 'selected' : '' }}>Schedule a Visit</option>
                                <option value="general" {{ old('inquiry_type') == 'general' ? 'selected' : '' }}>General Inquiry</option>
                            </select>
                            @error('inquiry_type')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                            <textarea id="message"
                                    name="message"
                                    placeholder="Enter your message here..."
                                    rows="4"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                                class="w-full bg-primary text-white py-3 rounded-lg hover:bg-primary/90 transition-all font-medium flex items-center justify-center">
                            <i class='bx bx-send mr-2'></i>
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/260978124541" class="whatsapp-button bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition-colors">
        <i class='bx bxl-whatsapp text-2xl'></i>
    </a>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Scroll to Top Button -->
    <button id="scrollToTop"
            class="fixed bottom-20 right-6 bg-primary text-white p-3 rounded-full shadow-lg hover:bg-primary/90 transition-all hidden">
        <i class='bx bx-up-arrow-alt text-2xl'></i>
    </button>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        // Initialize hero slider
        const heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Initialize testimonial slider
        const testimonialSwiper = new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        // Mobile Menu Toggle
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        if (menuButton && mobileMenu) {
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Scroll to Top Button
        const scrollToTop = document.getElementById('scrollToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTop.classList.remove('hidden');
            } else {
                scrollToTop.classList.add('hidden');
            }
        });

        scrollToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                    if (mobileMenu) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Auto-hide success notification
        document.addEventListener('DOMContentLoaded', function() {
            const notification = document.getElementById('successNotification');
            if (notification) {
                setTimeout(function() {
                    notification.style.opacity = '0';
                    notification.style.transform = 'translateY(-100%)';
                    setTimeout(function() {
                        notification.style.display = 'none';
                    }, 300);
                }, 5000); // Will hide after 5 seconds
            }
        });
    </script>
</body>
</html>

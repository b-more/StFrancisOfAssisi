@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/academics-banner.jpg') }}" alt="Academics" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Academics'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Academic Excellence</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Providing comprehensive education from early childhood to secondary school
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">Our Academic Approach</h2>
            <p class="text-gray-600 mb-6">
                At St. Francis of Assisi Private School, we are committed to providing a comprehensive, rigorous, and well-rounded education that prepares students for success in higher education and beyond. Our curriculum balances academic excellence with character development, creative expression, and physical well-being.
            </p>
            <p class="text-gray-600">
                We believe that every student has unique talents and abilities, and our dedicated teachers work to identify and nurture these strengths while providing support in areas that need development. Small class sizes ensure that each student receives personalized attention and guidance.
            </p>
        </div>

        <!-- Education Levels -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">Education Levels</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Early Childhood -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden group">
                    <div class="relative h-56">
                        <img src="{{ asset('images/early-childhood.jpg') }}" alt="Early Childhood Education"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                             onerror="this.src='https://via.placeholder.com/600x400?text=Early+Childhood'">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/70 to-transparent opacity-90"></div>
                        <div class="absolute bottom-0 left-0 p-4 text-white">
                            <h3 class="text-xl font-bold">Early Childhood</h3>
                            <p class="text-sm">Ages 3-6 | Baby Class - Reception</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Our early childhood program provides a nurturing environment where young learners develop foundational skills through play-based learning, creative activities, and guided exploration. We focus on social, emotional, cognitive, and physical development.
                        </p>
                        <div class="space-y-2">
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-check-circle text-secondary mr-2'></i>
                                <span>Play-based learning approach</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-check-circle text-secondary mr-2'></i>
                                <span>Introduction to literacy and numeracy</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-check-circle text-secondary mr-2'></i>
                                <span>Social skills development</span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="{{ route('academics.early-childhood') }}" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                                Learn More
                                <i class='bx bx-right-arrow-alt ml-1'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Primary School -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden group">
                    <div class="relative h-56">
                        <img src="{{ asset('images/primary.jpg') }}" alt="Primary Education"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                             onerror="this.src='https://via.placeholder.com/600x400?text=Primary+School'">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/70 to-transparent opacity-90"></div>
                        <div class="absolute bottom-0 left-0 p-4 text-white">
                            <h3 class="text-xl font-bold">Primary School</h3>
                            <p class="text-sm">Ages 6-13 | Grades 1-7</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Our primary school program builds a strong foundation in core subjects while encouraging critical thinking, creativity, and character development. We follow the Zambian national curriculum enhanced with additional resources and activities.
                        </p>
                        <div class="space-y-2">
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-check-circle text-secondary mr-2'></i>
                                <span>Strong foundation in literacy and numeracy</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-check-circle text-secondary mr-2'></i>
                                <span>Integrated STEM education</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-check-circle text-secondary mr-2'></i>
                                <span>Character development program</span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="{{ route('academics.primary') }}" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                                Learn More
                                <i class='bx bx-right-arrow-alt ml-1'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Secondary School -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden group">
                    <div class="relative h-56">
                        <img src="{{ asset('images/secondary.jpg') }}" alt="Secondary Education"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                             onerror="this.src='https://via.placeholder.com/600x400?text=Secondary+School'">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/70 to-transparent opacity-90"></div>
                        <div class="absolute bottom-0 left-0 p-4 text-white">
                            <h3 class="text-xl font-bold">Secondary School</h3>
                            <p class="text-sm">Ages 13-18 | Grades 8-12</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Our secondary school program prepares students for university and beyond through a rigorous academic curriculum, leadership opportunities, and career guidance. Students follow the Zambian ECZ curriculum with additional enrichment.
                        </p>
                        <div class="space-y-2">
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-check-circle text-secondary mr-2'></i>
                                <span>Comprehensive subject offerings</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-check-circle text-secondary mr-2'></i>
                                <span>College preparatory focus</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class='bx bx-check-circle text-secondary mr-2'></i>
                                <span>Leadership and career development</span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="{{ route('academics.secondary') }}" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                                Learn More
                                <i class='bx bx-right-arrow-alt ml-1'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Curriculum Approach -->
        <div class="mb-20">
            <div class="flex flex-col md:flex-row items-center max-w-5xl mx-auto">
                <div class="md:w-1/2 md:pr-10 mb-10 md:mb-0">
                    <h2 class="text-3xl font-bold text-primary mb-6">Our Curriculum Approach</h2>
                    <p class="text-gray-600 mb-4">
                        Our curriculum is designed to provide a balanced and comprehensive education that develops the whole child. We follow the Zambian national curriculum framework, enhanced with additional resources and teaching approaches to ensure our students receive a world-class education.
                    </p>
                    <p class="text-gray-600 mb-4">
                        In addition to core academic subjects, we emphasize:
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class='bx bx-check-circle text-secondary mt-1 mr-2'></i>
                            <span class="text-gray-600"><span class="font-semibold">Critical thinking and problem-solving:</span> Students are encouraged to analyze, evaluate, and create rather than simply memorize facts.</span>
                        </li>
                        <li class="flex items-start">
                            <i class='bx bx-check-circle text-secondary mt-1 mr-2'></i>
                            <span class="text-gray-600"><span class="font-semibold">Technology integration:</span> Digital literacy is woven throughout the curriculum, preparing students for a technology-driven world.</span>
                        </li>
                        <li class="flex items-start">
                            <i class='bx bx-check-circle text-secondary mt-1 mr-2'></i>
                            <span class="text-gray-600"><span class="font-semibold">Character education:</span> Values such as integrity, responsibility, respect, and compassion are taught explicitly and reinforced daily.</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('academics.curriculum') }}" class="inline-block px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors font-medium">
                            Explore Our Curriculum
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/curriculum.jpg') }}" alt="Curriculum Approach" class="rounded-lg shadow-md w-full h-auto"
                         onerror="this.src='https://via.placeholder.com/600x400?text=Curriculum'">
                </div>
            </div>
        </div>

        <!-- Special Programs -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">Special Programs</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- STEM Program -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition-all border-t-4 border-primary">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class='bx bx-atom text-2xl text-primary'></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">STEM Education</h3>
                    <p class="text-gray-600 text-sm">
                        Our integrated STEM program develops critical thinking, problem-solving, and technological literacy through hands-on projects and experiments.
                    </p>
                </div>

                <!-- Language Program -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition-all border-t-4 border-primary">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class='bx bx-message-dots text-2xl text-primary'></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Language Program</h3>
                    <p class="text-gray-600 text-sm">
                        Students learn French as a second language starting from Grade 3, with additional language options in secondary school.
                    </p>
                </div>

                <!-- Arts Program -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition-all border-t-4 border-primary">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class='bx bx-palette text-2xl text-primary'></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Creative Arts</h3>
                    <p class="text-gray-600 text-sm">
                        Our arts program includes visual arts, music, dance, and drama, allowing students to express themselves creatively and build confidence.
                    </p>
                </div>

                <!-- Leadership Program -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition-all border-t-4 border-primary">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class='bx bx-crown text-2xl text-primary'></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Leadership Development</h3>
                    <p class="text-gray-600 text-sm">
                        Students develop leadership skills through student government, community service projects, and specialized leadership workshops.
                    </p>
                </div>
            </div>
        </div>

        <!-- Academic Support -->
        <div class="mb-20">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-primary mb-8 text-center">Academic Support</h2>

                <div class="bg-gray-50 rounded-lg shadow-sm p-8">
                    <div class="space-y-6">
                        <p class="text-gray-600">
                            We believe that every student can succeed with the right support. Our academic support services include:
                        </p>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mt-1 mr-4">
                                    <i class='bx bx-user text-xl text-primary'></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Individualized Learning Plans</h4>
                                    <p class="text-gray-600 text-sm">
                                        Tailored support for students who need additional help or acceleration in specific subjects.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mt-1 mr-4">
                                    <i class='bx bx-book-reader text-xl text-primary'></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Learning Resource Center</h4>
                                    <p class="text-gray-600 text-sm">
                                        A dedicated space where students can access additional learning materials and support.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mt-1 mr-4">
                                    <i class='bx bx-chalkboard text-xl text-primary'></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">After-School Tutoring</h4>
                                    <p class="text-gray-600 text-sm">
                                        Additional instruction and support in core subjects after regular school hours.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mt-1 mr-4">
                                    <i class='bx bx-test-tube text-xl text-primary'></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Exam Preparation</h4>
                                    <p class="text-gray-600 text-sm">
                                        Structured review sessions and practice tests to prepare students for national examinations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Calendar -->
        <div class="mb-20">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-primary mb-6">Academic Calendar</h2>
                <p class="text-gray-600 mb-8">
                    Our academic year is divided into three terms, with holidays in between. View our full calendar to see important dates, exams, and school events.
                </p>
                <a href="{{ route('calendar') }}" class="inline-block px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors font-medium">
                    View School Calendar
                </a>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">What Our Parents Say</h2>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-6 rounded-lg relative">
                    <div class="text-5xl text-primary/10 absolute top-4 left-4">"</div>
                    <div class="relative z-10">
                        <p class="text-gray-600 italic mb-6">
                            The academic program at St. Francis is exceptional. My son has grown tremendously in his critical thinking skills and his love for learning. The teachers are dedicated and provide individualized attention.
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                <img src="{{ asset('images/parent1.jpg') }}" alt="Parent"
                                     class="w-full h-full object-cover rounded-full"
                                     onerror="this.src='https://via.placeholder.com/48?text=P'">
                            </div>
                            <div>
                                <h4 class="font-semibold">Mrs. Chanda</h4>
                                <p class="text-sm text-gray-500">Parent of Grade 5 student</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-6 rounded-lg relative">
                    <div class="text-5xl text-primary/10 absolute top-4 left-4">"</div>
                    <div class="relative z-10">
                        <p class="text-gray-600 italic mb-6">
                            I've been impressed with how the school balances academics with character development. The STEM program has sparked my daughter's interest in science, and the teachers have been supportive in nurturing her talents.
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                <img src="{{ asset('images/parent2.jpg') }}" alt="Parent"
                                     class="w-full h-full object-cover rounded-full"
                                     onerror="this.src='https://via.placeholder.com/48?text=P'">
                            </div>
                            <div>
                                <h4 class="font-semibold">Mr. Mwanza</h4>
                                <p class="text-sm text-gray-500">Parent of Grade 8 student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Join Our Academic Community?</h2>
        <p class="max-w-2xl mx-auto mb-8">
            Experience the difference of a St. Francis of Assisi education. Apply today for the upcoming academic year.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('admissions.apply') }}" class="px-8 py-3 bg-secondary text-white rounded-lg hover:bg-secondary/90 transition-colors font-medium">
                Apply Now
            </a>
            <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-primary rounded-lg hover:bg-gray-100 transition-colors font-medium">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection

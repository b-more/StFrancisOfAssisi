@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/secondary-banner.jpg') }}" alt="Secondary Education" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Secondary+Education'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Secondary Education</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Preparing students for academic excellence and future success in Grades 8-12
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">Secondary School Program</h2>
            <p class="text-gray-600 mb-4">
                The secondary school years are a critical period of academic advancement, personal growth, and preparation for higher education and future careers. At St. Francis of Assisi Private School, our secondary program (Grades 8-12) offers a rigorous, well-rounded education that challenges students intellectually while supporting their social and emotional development.
            </p>
            <p class="text-gray-600">
                Our dedicated teachers are subject specialists who bring passion and expertise to their classrooms, inspiring students to pursue excellence and develop a deep understanding of each discipline. With small class sizes and individualized attention, we help each student discover their strengths, overcome challenges, and achieve their full potential.
            </p>
        </div>

        <!-- Program Overview Image/Text Section -->
        <div class="max-w-5xl mx-auto mb-16">
            <div class="flex flex-col md:flex-row items-center bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                <div class="md:w-1/2">
                    <img src="{{ asset('images/secondary-classroom.jpg') }}" alt="Secondary Classroom" class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/600x400?text=Secondary+Classroom'">
                </div>
                <div class="md:w-1/2 p-8">
                    <h3 class="text-2xl font-bold text-primary mb-4">Program Overview</h3>
                    <p class="text-gray-600 mb-4">
                        Our secondary school program follows the Zambian national curriculum leading to the Grade 9 and Grade 12 national examinations. We enhance this with international best practices and additional content to provide a comprehensive education that prepares students for success in Zambia and globally.
                    </p>
                    <p class="text-gray-600 mb-4">
                        Students study a broad range of subjects in the junior secondary years (Grades 8-9), then specialize in their areas of strength and interest in the senior secondary years (Grades 10-12), choosing from science, commerce, or arts streams.
                    </p>
                    <p class="text-gray-600">
                        Beyond academics, we emphasize critical thinking, research skills, leadership, and character development to prepare well-rounded individuals ready for university and the challenges of the 21st century.
                    </p>
                </div>
            </div>
        </div>

        <!-- Key Stages -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Key Stages of Secondary Education</h3>

            <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                <div class="grid md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-gray-200">
                    <!-- Junior Secondary (Grades 8-9) -->
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <span class="text-blue-700 font-bold text-xl">8-9</span>
                            </div>
                            <h4 class="text-xl font-semibold text-primary">Junior Secondary (Grades 8-9)</h4>
                        </div>
                        <p class="text-gray-600 mb-4">
                            In junior secondary, students build on primary school foundations while exploring a broader range of subjects to discover their strengths and interests.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Broad curriculum covering all core subjects</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Development of study and research skills</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Preparation for Grade 9 national examinations</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Guidance for academic stream selection</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Senior Secondary (Grades 10-12) -->
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <span class="text-green-700 font-bold text-xl">10-12</span>
                            </div>
                            <h4 class="text-xl font-semibold text-primary">Senior Secondary (Grades 10-12)</h4>
                        </div>
                        <p class="text-gray-600 mb-4">
                            In senior secondary, students specialize in their chosen academic stream while developing advanced skills in preparation for university and future careers.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Specialized streams: Science, Commerce, or Arts</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Advanced academic content and concepts</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Preparation for Grade 12 national examinations</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>University and career counseling</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Streams -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Academic Streams (Grades 10-12)</h3>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Science Stream -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                    <div class="bg-blue-600 p-4 text-white">
                        <h4 class="text-xl font-bold text-center">Science Stream</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4 text-sm">
                            For students interested in medicine, engineering, computer science, and other STEM fields.
                        </p>
                        <h5 class="font-semibold text-primary mb-2">Core Subjects:</h5>
                        <ul class="space-y-1 text-gray-600 mb-4">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Mathematics</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>English Language</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Biology</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Chemistry</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Physics</span>
                            </li>
                        </ul>
                        <h5 class="font-semibold text-primary mb-2">Electives (choose 1-2):</h5>
                        <ul class="space-y-1 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Computer Studies</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Additional Mathematics</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Geography</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Commerce Stream -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                    <div class="bg-green-600 p-4 text-white">
                        <h4 class="text-xl font-bold text-center">Commerce Stream</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4 text-sm">
                            For students interested in business, finance, economics, management, and entrepreneurship.
                        </p>
                        <h5 class="font-semibold text-primary mb-2">Core Subjects:</h5>
                        <ul class="space-y-1 text-gray-600 mb-4">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Mathematics</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>English Language</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Principles of Accounts</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Commerce</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Economics</span>
                            </li>
                        </ul>
                        <h5 class="font-semibold text-primary mb-2">Electives (choose 1-2):</h5>
                        <ul class="space-y-1 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Computer Studies</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Geography</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Business Studies</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Arts Stream -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                    <div class="bg-accent p-4 text-white">
                        <h4 class="text-xl font-bold text-center">Arts Stream</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4 text-sm">
                            For students interested in humanities, languages, social sciences, law, and creative fields.
                        </p>
                        <h5 class="font-semibold text-primary mb-2">Core Subjects:</h5>
                        <ul class="space-y-1 text-gray-600 mb-4">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Mathematics</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>English Language</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>English Literature</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>History</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Religious Education</span>
                            </li>
                        </ul>
                        <h5 class="font-semibold text-primary mb-2">Electives (choose 1-2):</h5>
                        <ul class="space-y-1 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Geography</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Civic Education</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Art & Design</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Teaching Approach -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Our Teaching Approach</h3>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Interactive Learning -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-conversation text-2xl text-primary'></i>
                    </div>
                    <h4 class="text-lg font-semibold text-primary mb-3">Interactive Learning</h4>
                    <p class="text-gray-600 text-sm">
                        Our teachers use interactive teaching methods that promote student engagement, critical thinking, and active participation in the learning process.
                    </p>
                </div>

                <!-- Technology Integration -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-devices text-2xl text-primary'></i>
                    </div>
                    <h4 class="text-lg font-semibold text-primary mb-3">Technology Integration</h4>
                    <p class="text-gray-600 text-sm">
                        Technology is integrated into our curriculum to enhance learning, prepare students for the digital world, and provide access to global resources and information.
                    </p>
                </div>

                <!-- Personalized Support -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-user-voice text-2xl text-primary'></i>
                    </div>
                    <h4 class="text-lg font-semibold text-primary mb-3">Personalized Support</h4>
                    <p class="text-gray-600 text-sm">
                        Our small class sizes allow teachers to identify each student's strengths and challenges, providing individualized support and guidance to ensure academic success.
                    </p>
                </div>
            </div>
        </div>

        <!-- Academic Facilities -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Our Facilities</h3>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/science-lab.jpg') }}" alt="Science Laboratories" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Science+Labs'">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-lg mb-2">Science Laboratories</h4>
                        <p class="text-gray-600 text-sm">
                            Fully equipped biology, chemistry, and physics laboratories where students conduct experiments and develop practical skills.
                        </p>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/computer-lab.jpg') }}" alt="Computer Laboratory" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Computer+Lab'">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-lg mb-2">Computer Laboratory</h4>
                        <p class="text-gray-600 text-sm">
                            Modern computer lab with high-speed internet access, supporting computer studies and technology integration across subjects.
                        </p>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/library.jpg') }}" alt="Library & Resource Center" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Library'">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-lg mb-2">Library & Resource Center</h4>
                        <p class="text-gray-600 text-sm">
                            Comprehensive library with books, digital resources, and study spaces to support research and independent learning.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- University & Career Guidance -->
        <div class="max-w-5xl mx-auto mb-16">
            <div class="flex flex-col md:flex-row items-center bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                <div class="md:w-1/3 p-6 bg-primary text-white">
                    <h3 class="text-2xl font-bold mb-4">University & Career Guidance</h3>
                    <p class="opacity-90 mb-4">
                        We provide comprehensive guidance to help students navigate university applications and career planning.
                    </p>
                    <p class="opacity-90">
                        Our goal is to ensure each student finds the right path for their future education and career success.
                    </p>
                </div>
                <div class="md:w-2/3 p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-primary mb-2">University Applications</h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Guidance on university selection, application procedures, and scholarship opportunities both locally and internationally.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary mb-2">Career Counseling</h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Individual counseling to help students explore career options aligned with their interests, strengths, and academic choices.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary mb-2">University Entrance Exam Prep</h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Additional support for university entrance examinations, including special preparation classes and practice tests.
                            </p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-primary mb-2">College Visits & Fairs</h4>
                        <p class="text-gray-600 text-sm mb-4">
                            Opportunities to meet university representatives, attend college fairs, and learn about different educational institutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Student Success Stories -->
    <div class="max-w-5xl mx-auto mb-16">
        <h3 class="text-2xl font-bold text-primary mb-6 text-center">Student Success Stories</h3>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm relative">
                <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                <div class="relative z-10">
                    <p class="text-gray-600 italic mb-6">
                        The science program at St. Francis prepared me exceptionally well for my medical studies. The laboratory facilities and dedicated teachers helped me develop a deep understanding of biology and chemistry that gave me a strong foundation for university.
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                            <img src="{{ asset('images/alumni1.jpg') }}" alt="Alumni" class="w-full h-full object-cover rounded-full"
                                 onerror="this.src='https://via.placeholder.com/48?text=A'">
                        </div>
                        <div>
                            <h4 class="font-semibold">Chipo Mulenga</h4>
                            <p class="text-sm text-gray-500">Class of 2020, now studying Medicine at University of Zambia</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm relative">
                <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                <div class="relative z-10">
                    <p class="text-gray-600 italic mb-6">
                        The commerce stream gave me a solid foundation in business principles and economics. The teachers challenged us to think critically about real-world business scenarios, which has been invaluable in my current studies in finance.
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                            <img src="{{ asset('images/alumni2.jpg') }}" alt="Alumni" class="w-full h-full object-cover rounded-full"
                                 onerror="this.src='https://via.placeholder.com/48?text=A'">
                        </div>
                        <div>
                            <h4 class="font-semibold">David Banda</h4>
                            <p class="text-sm text-gray-500">Class of 2019, now studying Business Administration at Copperbelt University</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="max-w-3xl mx-auto">
        <div class="bg-primary text-white rounded-lg p-8 text-center shadow-md">
            <h3 class="text-2xl font-bold mb-4">Prepare Your Child for Future Success</h3>
            <p class="mb-6">
                Our secondary school program provides the academic excellence, personalized support, and character development needed for success in university and beyond.
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

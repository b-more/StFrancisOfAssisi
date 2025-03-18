@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/curriculum-banner.jpg') }}" alt="Our Curriculum" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Our+Curriculum'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Curriculum</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            A comprehensive approach to education that prepares students for lifelong success
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">Curriculum Overview</h2>
            <p class="text-gray-600 mb-4">
                At St. Francis of Assisi Private School, we offer a comprehensive curriculum that blends the Zambian national curriculum with international best practices to provide our students with a holistic education. Our curriculum is designed to develop critical thinking, creativity, and problem-solving skills while building a strong foundation of knowledge across various disciplines.
            </p>
            <p class="text-gray-600">
                We believe in educating the whole child, focusing not only on academic achievement but also on character development, physical well-being, and social-emotional growth. Our balanced approach ensures that students are well-prepared for further education, career success, and responsible citizenship in an increasingly complex global society.
            </p>
        </div>

        <!-- Curriculum by Level -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Curriculum by Educational Level</h3>

            <div class="space-y-8">
                <!-- Early Childhood -->
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="bg-yellow-600 p-4 text-white">
                        <h4 class="text-xl font-bold">Early Childhood Education (Baby Class - KG3)</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Our early childhood curriculum focuses on holistic development through play-based learning, fostering curiosity, creativity, and foundational skills in literacy and numeracy.
                        </p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Key Learning Areas:</h5>
                                <ul class="space-y-1 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Language development and early literacy</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Number concepts and early mathematics</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Environmental awareness</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Creative expression and arts</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Teaching Approaches:</h5>
                                <ul class="space-y-1 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Play-based learning</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Hands-on activities and exploration</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Songs, stories, and rhymes</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Thematic learning units</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Primary -->
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="bg-blue-600 p-4 text-white">
                        <h4 class="text-xl font-bold">Primary Education (Grades 1-7)</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Our primary curriculum builds strong foundations in core subjects while developing critical thinking, research skills, and creative expression through a balanced program.
                        </p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Core Subjects:</h5>
                                <ul class="space-y-1 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>English Language and Literacy</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Mathematics</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Science</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Social Studies</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Religious Education</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Additional Subjects:</h5>
                                <ul class="space-y-1 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Creative Arts (Visual Art, Music, Drama)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Physical Education</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Computer Studies</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Local Language (Cinyanja/Bemba)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Secondary -->
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="bg-green-600 p-4 text-white">
                        <h4 class="text-xl font-bold">Secondary Education (Grades 8-12)</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Our secondary curriculum follows the Zambian national curriculum leading to the Grade 9 and Grade 12 national examinations, enhanced with additional content and teaching approaches.
                        </p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Junior Secondary (Grades 8-9):</h5>
                                <ul class="space-y-1 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>English Language</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Mathematics</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Integrated Science</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Social Studies</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Senior Secondary (Grades 10-12):</h5>
                                <ul class="space-y-1 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Science Stream (Biology, Chemistry, Physics)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Commerce Stream (Accounts, Commerce, Economics)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Arts Stream (Literature, History, RE)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Teaching and Assessment -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Teaching and Assessment</h3>

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm h-full">
                        <h4 class="text-xl font-semibold text-primary mb-4">Teaching Approaches</h4>
                        <p class="text-gray-600 mb-4">
                            We emphasize inquiry-based learning approaches that encourage students to ask questions, explore concepts, and seek solutions. Our teachers serve as facilitators who guide students through the process of discovery and learning.
                        </p>
                        <p class="text-gray-600">
                            Technology is integrated across the curriculum to enhance learning experiences, provide access to information and resources, and develop digital literacy skills.
                        </p>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm h-full">
                        <h4 class="text-xl font-semibold text-primary mb-4">Assessment and Reporting</h4>
                        <p class="text-gray-600 mb-4">
                            We use a comprehensive assessment system that provides meaningful feedback about student progress and informs teaching practices. Our approach includes both formative assessments (daily classwork, projects) and summative assessments (exams, standardized tests).
                        </p>
                        <p class="text-gray-600">
                            Reports provide a holistic view of each student's progress, including academic achievement, skill development, and personal growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="max-w-3xl mx-auto">
            <div class="bg-primary text-white rounded-lg p-8 text-center shadow-md">
                <h3 class="text-2xl font-bold mb-4">Experience Our Comprehensive Curriculum</h3>
                <p class="mb-6">
                    Discover how our balanced, holistic curriculum can help your child develop into a knowledgeable, skilled, and compassionate individual prepared for future success.
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

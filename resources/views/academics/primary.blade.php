@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/primary-banner.jpg') }}" alt="Primary Education" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Primary+Education'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Primary Education</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Building strong academic foundations and character in Grades 1-7
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">Primary School Program</h2>
            <p class="text-gray-600 mb-4">
                The primary school years are crucial for developing strong academic foundations, study habits, and character traits that will serve students throughout their educational journey and beyond. At St. Francis of Assisi Private School, our primary program (Grades 1-7) provides a balanced, comprehensive curriculum designed to challenge, inspire, and nurture each child.
            </p>
            <p class="text-gray-600">
                Our experienced teachers create engaging learning environments where students can explore concepts, develop critical thinking skills, and build confidence in their abilities. With small class sizes and personalized attention, we ensure that each child receives the support they need to thrive academically and personally.
            </p>
        </div>

        <!-- Program Overview Image/Text Section -->
        <div class="max-w-5xl mx-auto mb-16">
            <div class="flex flex-col md:flex-row items-center bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                <div class="md:w-1/2">
                    <img src="{{ asset('images/primary-classroom.jpg') }}" alt="Primary Classroom" class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/600x400?text=Primary+Classroom'">
                </div>
                <div class="md:w-1/2 p-8">
                    <h3 class="text-2xl font-bold text-primary mb-4">Program Overview</h3>
                    <p class="text-gray-600 mb-4">
                        Our primary school program follows the Zambian national curriculum enhanced with international best practices to provide a well-rounded education that prepares students for future academic success.
                    </p>
                    <p class="text-gray-600 mb-4">
                        We place strong emphasis on core subjects including English, Mathematics, Science, and Social Studies, while also valuing the arts, physical education, technology, and character development.
                    </p>
                    <p class="text-gray-600">
                        Throughout the primary years, students gradually transition from concrete to more abstract thinking, developing independence, responsibility, and organizational skills that will serve them well in secondary school and beyond.
                    </p>
                </div>
            </div>
        </div>

        <!-- Key Stages -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Key Stages of Primary Education</h3>

            <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                <div class="grid md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-gray-200">
                    <!-- Lower Primary (Grades 1-3) -->
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                                <span class="text-yellow-700 font-bold text-xl">1-3</span>
                            </div>
                            <h4 class="text-xl font-semibold text-primary">Lower Primary (Grades 1-3)</h4>
                        </div>
                        <p class="text-gray-600 mb-4">
                            In the lower primary years, we focus on building fundamental skills in literacy and numeracy, while fostering a love of learning through engaging, hands-on activities.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Strong focus on reading, writing, and mathematical foundations</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Thematic, integrated approach to learning</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Development of social skills and classroom routines</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Introduction to specialist subjects</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Upper Primary (Grades 4-7) -->
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <span class="text-blue-700 font-bold text-xl">4-7</span>
                            </div>
                            <h4 class="text-xl font-semibold text-primary">Upper Primary (Grades 4-7)</h4>
                        </div>
                        <p class="text-gray-600 mb-4">
                            In the upper primary years, we build on foundational skills and expand into more complex content, developing critical thinking and preparing students for secondary education.
                        </p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Deeper exploration of subject content</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Development of research and study skills</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>More independent project work</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Preparation for Grade 7 national examinations</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Assessment and Reporting -->
        <div class="max-w-5xl mx-auto mb-16">
            <div class="flex flex-col md:flex-row items-center bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                <div class="md:w-1/3 p-6 bg-primary text-white">
                    <h3 class="text-2xl font-bold mb-4">Assessment & Reporting</h3>
                    <p class="opacity-90 mb-4">
                        We use a variety of assessment methods to track student progress and provide meaningful feedback to both students and parents.
                    </p>
                    <p class="opacity-90">
                        Regular communication helps create a partnership between home and school that supports each child's educational journey.
                    </p>
                </div>
                <div class="md:w-2/3 p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-primary mb-2">Continuous Assessment</h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Regular formative assessments through classwork, projects, and quizzes provide ongoing feedback about student progress.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary mb-2">Termly Examinations</h4>
                            <p class="text-gray-600 text-sm mb-4">
                                More formal assessments at the end of each term evaluate student mastery of key concepts and skills.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary mb-2">Progress Reports</h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Detailed reports are sent home each term, providing information about academic progress, effort, and social development.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-primary mb-2">Parent-Teacher Conferences</h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Regular meetings allow for meaningful discussions about student strengths, areas for growth, and strategies for support.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Beyond Academics -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Beyond Academics</h3>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Character Education -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                    <div class="h-48 bg-blue-100 relative">
                        <img src="{{ asset('images/character-education.jpg') }}" alt="Character Education" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Character+Education'">
                        <div class="absolute inset-0 bg-primary/20"></div>
                    </div>
                    <div class="p-5">
                        <h4 class="text-lg font-semibold text-primary mb-2">Character Education</h4>
                        <p class="text-gray-600 text-sm">
                            We intentionally foster values such as integrity, respect, responsibility, and compassion through our daily interactions, class discussions, and community service opportunities.
                        </p>
                    </div>
                </div>

                <!-- Extracurricular Activities -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                    <div class="h-48 bg-green-100 relative">
                        <img src="{{ asset('images/extracurricular.jpg') }}" alt="Extracurricular Activities" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Extracurricular+Activities'">
                        <div class="absolute inset-0 bg-primary/20"></div>
                    </div>
                    <div class="p-5">
                        <h4 class="text-lg font-semibold text-primary mb-2">Extracurricular Activities</h4>
                        <p class="text-gray-600 text-sm">
                            A wide range of clubs, sports teams, and cultural activities allow students to discover new interests, develop talents, and build friendships across grade levels.
                        </p>
                    </div>
                </div>

                <!-- Leadership Development -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                    <div class="h-48 bg-yellow-100 relative">
                        <img src="{{ asset('images/leadership.jpg') }}" alt="Leadership Development" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Leadership+Development'">
                        <div class="absolute inset-0 bg-primary/20"></div>
                    </div>
                    <div class="p-5">
                        <h4 class="text-lg font-semibold text-primary mb-2">Leadership Development</h4>
                        <p class="text-gray-600 text-sm">
                            Through class responsibilities, student council, peer mentoring, and group projects, we provide opportunities for students to develop and practice leadership skills.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Parent Testimonials -->
        <div class="max-w-4xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6">What Parents Say</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm relative">
                    <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                    <div class="relative z-10">
                        <p class="text-gray-600 italic mb-6">
                            The teachers at St. Francis truly care about each child as an individual. My son struggled with reading when he first started, but with the personalized support he received, he's now reading above grade level and loves books!
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                <img src="{{ asset('images/parent3.jpg') }}" alt="Parent" class="w-full h-full object-cover rounded-full"
                                     onerror="this.src='https://via.placeholder.com/48?text=P'">
                            </div>
                            <div>
                                <h4 class="font-semibold">Mrs. Ruth Nyirenda</h4>
                                <p class="text-sm text-gray-500">Parent of Grade 3 student</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm relative">
                    <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                    <div class="relative z-10">
                        <p class="text-gray-600 italic mb-6">
                            What sets St. Francis apart is how they develop the whole child. My daughter has not only excelled academically but has also grown in confidence, creativity, and compassion. The balanced approach to education is exactly what we were looking for.
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                <img src="{{ asset('images/parent4.jpg') }}" alt="Parent" class="w-full h-full object-cover rounded-full"
                                     onerror="this.src='https://via.placeholder.com/48?text=P'">
                            </div>
                            <div>
                                <h4 class="font-semibold">Mr. Daniel Tembo</h4>
                                <p class="text-sm text-gray-500">Parent of Grade 6 student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enrollment CTA -->
        <div class="max-w-3xl mx-auto">
            <div class="bg-primary text-white rounded-lg p-8 text-center shadow-md">
                <h3 class="text-2xl font-bold mb-4">Give Your Child a Strong Educational Foundation</h3>
                <p class="mb-6">
                    Join our vibrant primary school community where every child is valued, challenged, and inspired to reach their full potential.
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

        <!-- Teaching Approach -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Our Teaching Approach</h3>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Student-Centered Learning -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-user text-2xl text-primary'></i>
                    </div>
                    <h4 class="text-lg font-semibold text-primary mb-3">Student-Centered Learning</h4>
                    <p class="text-gray-600 text-sm">
                        Our approach recognizes each child's unique learning style, interests, and abilities, providing differentiated instruction to meet individual needs.
                    </p>
                </div>

                <!-- Inquiry-Based Learning -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-search text-2xl text-primary'></i>
                    </div>
                    <h4 class="text-lg font-semibold text-primary mb-3">Inquiry-Based Learning</h4>
                    <p class="text-gray-600 text-sm">
                        We encourage curiosity and critical thinking through guided inquiry, problem-solving activities, and hands-on exploration of concepts.
                    </p>
                </div>

                <!-- Integrated Approach -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-git-branch text-2xl text-primary'></i>
                    </div>
                    <h4 class="text-lg font-semibold text-primary mb-3">Integrated Approach</h4>
                    <p class="text-gray-600 text-sm">
                        Our curriculum connects subjects through thematic units, helping students understand relationships between concepts and apply knowledge across different areas.
                    </p>
                </div>
            </div>
        </div>

        <!-- Curriculum -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Our Primary Curriculum</h3>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Core Subjects -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <h4 class="text-xl font-semibold text-primary mb-4">Core Subjects</h4>

                    <div class="space-y-4">
                        <!-- English Language -->
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                    <i class='bx bx-book text-xl text-primary'></i>
                                </div>
                                <h5 class="font-medium text-gray-900">English Language</h5>
                            </div>
                            <p class="text-gray-600 text-sm ml-13">
                                Comprehensive language arts program developing reading, writing, speaking, and listening skills through literature-based instruction and daily practice.
                            </p>
                        </div>

                        <!-- Mathematics -->
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                    <i class='bx bx-math text-xl text-primary'></i>
                                </div>
                                <h5 class="font-medium text-gray-900">Mathematics</h5>
                            </div>
                            <p class="text-gray-600 text-sm ml-13">
                                Strong focus on mathematical concepts, computational skills, problem-solving, and real-world applications with hands-on activities and practice.
                            </p>
                        </div>

                        <!-- Science -->
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                    <i class='bx bx-atom text-xl text-primary'></i>
                                </div>
                                <h5 class="font-medium text-gray-900">Science</h5>
                            </div>
                            <p class="text-gray-600 text-sm ml-13">
                                Inquiry-based science education covering life, physical, and earth sciences with regular experiments and hands-on investigations.
                            </p>
                        </div>

                        <!-- Social Studies -->
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                    <i class='bx bx-globe text-xl text-primary'></i>
                                </div>
                                <h5 class="font-medium text-gray-900">Social Studies</h5>
                            </div>
                            <p class="text-gray-600 text-sm ml-13">
                                Exploration of history, geography, civics, and cultures, with special emphasis on Zambian heritage and global citizenship.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Additional Subjects -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <h4 class="text-xl font-semibold text-primary mb-4">Additional Subjects</h4>

                    <div class="space-y-4">
                        <!-- Religious Education -->
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                    <i class='bx bx-church text-xl text-primary'></i>
                                </div>
                                <h5 class="font-medium text-gray-900">Religious Education</h5>
                            </div>
                            <p class="text-gray-600 text-sm ml-13">
                                Faith-based instruction grounded in Catholic values and traditions, while respecting and welcoming students of all religious backgrounds.
                            </p>
                        </div>

                        <!-- Creative Arts -->
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                    <i class='bx bx-palette text-xl text-primary'></i>
                                </div>
                                <h5 class="font-medium text-gray-900">Creative Arts</h5>
                            </div>
                            <p class="text-gray-600 text-sm ml-13">
                                Visual arts, music, and drama instruction encouraging creative expression, appreciation of the arts, and development of artistic skills.
                            </p>
                        </div>

                        <!-- Physical Education -->
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                    <i class='bx bx-run text-xl text-primary'></i>
                                </div>
                                <h5 class="font-medium text-gray-900">Physical Education</h5>
                            </div>
                            <p class="text-gray-600 text-sm ml-13">
                                Regular physical activity, sports skills, teamwork, and health education promoting physical fitness and healthy lifestyle habits.
                            </p>
                        </div>

                        <!-- Computer Studies -->
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center mr-3">
                                    <i class='bx bx-laptop text-xl text-primary'></i>
                                </div>
                                <h5 class="font-medium text-gray-900">Computer Studies</h5>
                            </div>
                            <p class="text-gray-600 text-sm ml-13">
                                Development of digital literacy, basic programming concepts, and responsible technology use integrated across the curriculum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="max-w-3xl mx-auto">
            <div class="bg-primary text-white rounded-lg p-8 text-center shadow-md">
                <h3 class="text-2xl font-bold mb-4">Give Your Child the Best Start</h3>
                <p class="mb-6">
                    Our primary program provides the academic excellence, character development, and personalized attention your child needs to thrive.
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

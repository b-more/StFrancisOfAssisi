@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/about-banner.jpg') }}" alt="About Us" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=About+Us'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">About Our School</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Excellence in education since 1995
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- History and Introduction -->
        <div class="max-w-4xl mx-auto mb-20">
            <div class="flex flex-col md:flex-row items-center mb-12">
                <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                    <h2 class="text-3xl font-bold text-primary mb-6">Our History</h2>
                    <p class="text-gray-600 mb-4">
                        St. Francis of Assisi Private School was founded in 1995 with a vision to provide high-quality education that nurtures both academic excellence and character development. What began as a small primary school with just 50 students has grown into a comprehensive educational institution serving over 800 students from early childhood to secondary education.
                    </p>
                    <p class="text-gray-600">
                        Over the past 28 years, we have established a strong reputation for academic excellence, innovative teaching methods, and a supportive learning environment that prepares students for success in higher education and beyond.
                    </p>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/gallery/gallery9.jpg') }}" alt="School History" class="rounded-lg shadow-md w-full h-auto"
                         onerror="this.src='https://via.placeholder.com/600x400?text=School+History'">
                </div>
            </div>

            <div class="border-l-4 border-secondary pl-6 py-2 my-8 bg-gray-50">
                <p class="italic text-gray-700 text-lg">
                    "At St. Francis of Assisi Private School, we believe that education is not just about academic achievement, but about developing the whole child - intellectually, physically, emotionally, and socially."
                </p>
            </div>
        </div>

        <!-- Mission, Vision, Values -->
        <div class="grid md:grid-cols-3 gap-10 mb-20">
            <div class="bg-gray-50 p-8 rounded-lg shadow-sm border-t-4 border-primary">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class='bx bx-target-lock text-3xl text-primary'></i>
                </div>
                <h3 class="text-2xl font-semibold text-primary mb-4 text-center">Our Mission</h3>
                <p class="text-gray-600 text-center">
                    To provide a holistic education that nurtures academic excellence, character development, and lifelong learning skills in a safe and supportive environment that respects diversity and promotes global citizenship.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-lg shadow-sm border-t-4 border-primary">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class='bx bx-bulb text-3xl text-primary'></i>
                </div>
                <h3 class="text-2xl font-semibold text-primary mb-4 text-center">Our Vision</h3>
                <p class="text-gray-600 text-center">
                    To be a leading educational institution that prepares students to be innovative thinkers, compassionate leaders, and responsible global citizens who make positive contributions to society.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-lg shadow-sm border-t-4 border-primary">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class='bx bx-heart text-3xl text-primary'></i>
                </div>
                <h3 class="text-2xl font-semibold text-primary mb-4 text-center">Our Values</h3>
                <ul class="text-gray-600 space-y-2">
                    <li class="flex items-center">
                        <i class='bx bx-check-circle text-secondary mr-2'></i>
                        <span>Excellence in all endeavors</span>
                    </li>
                    <li class="flex items-center">
                        <i class='bx bx-check-circle text-secondary mr-2'></i>
                        <span>Integrity and honesty</span>
                    </li>
                    <li class="flex items-center">
                        <i class='bx bx-check-circle text-secondary mr-2'></i>
                        <span>Respect for diversity</span>
                    </li>
                    <li class="flex items-center">
                        <i class='bx bx-check-circle text-secondary mr-2'></i>
                        <span>Responsibility and leadership</span>
                    </li>
                    <li class="flex items-center">
                        <i class='bx bx-check-circle text-secondary mr-2'></i>
                        <span>Compassion and service</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Message from Principal -->
        <div class="max-w-4xl mx-auto mb-20">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-8 md:mb-0">
                    <div class="relative">
                        <img src="{{ asset('images/director.jpg') }}" alt="School Principal" class="rounded-lg shadow-md w-full h-auto"
                             onerror="this.src='https://via.placeholder.com/300x400?text=Principal'">
                        <div class="absolute bottom-0 left-0 right-0 bg-primary/90 p-4 text-white text-center">
                            <h4 class="font-bold">Mr Francis Mulenga</h4>
                            <p class="text-sm">School Director</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-2/3 md:pl-10">
                    <h2 class="text-3xl font-bold text-primary mb-6">Message from the Directore</h2>
                    <div class="text-gray-600 space-y-4">
                        <p>
                            Dear Parents, Students, and Visitors,
                        </p>
                        <p>
                            Welcome to St. Francis of Assisi Private School! As the Director, I am delighted to welcome you to our school community where excellence in education and character development are our primary focus.
                        </p>
                        <p>
                            At St. Francis, we believe that every child has unique talents and abilities that should be nurtured in a supportive and challenging environment. Our dedicated teachers and staff work tirelessly to provide a well-rounded education that prepares students not only for academic success but also for life beyond the classroom.
                        </p>
                        <p>
                            We invite you to explore our website to learn more about our programs and to visit our campus to experience firsthand the vibrant educational community that we have created.
                        </p>
                        <p>
                            Sincerely,<br>
                            Mr. Francis Mulenga<br>
                            School Director
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Team Section -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-4">Our Leadership Team</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Our school is led by experienced educators and professionals committed to providing the highest quality education for all students.
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="relative h-60">
                        <img src="{{ asset('images/team1.jpg') }}" alt="Team Member" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/300x240?text=Team+Member'">
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-1">Mr. Sylvester Lupando</h3>
                        <p class="text-primary text-sm mb-3">School Headmaster</p>
                        <p class="text-gray-600 text-sm">
                            With over 15 years of experience in education, Mr. Lupando oversees all academic and administrative aspects of our school.
                        </p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="relative h-60">
                        <img src="{{ asset('images/team2.jpg') }}" alt="Team Member" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/300x240?text=Team+Member'">
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-1">Mr. Chuto Morris</h3>
                        <p class="text-primary text-sm mb-3">Deputy Headmaster School</p>
                        <p class="text-gray-600 text-sm">
                            Mr. Chuto brings his passion for early education and extensive expertise to lead our school division.
                        </p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="relative h-60">
                        <img src="{{ asset('images/team3.jpg') }}" alt="Team Member" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/300x240?text=Team+Member'">
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-1">Mr. Quintino Chibwe</h3>
                        <p class="text-primary text-sm mb-3">Academic Coordinator</p>
                        <p class="text-gray-600 text-sm">
                            Mr. Chibwe coordinates curriculum development and ensures that our academic programs meet the standards set by Examination Council of Zambia.
                        </p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="relative h-60">
                        <img src="{{ asset('images/team4.jpg') }}" alt="Team Member" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/300x240?text=Team+Member'">
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-1">Mr. Mpongwe </h3>
                        <p class="text-primary text-sm mb-3">Accountantr</p>
                        <p class="text-gray-600 text-sm">
                            Mr. Mpongwe oversees all aspects of student fees and ensures that our students are up to date with the payments of school fees.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Virtual Tour Section -->
        <div id="virtual-tour" class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-4">Take a Virtual Tour</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                    Explore our campus facilities from the comfort of your home. Get a glimpse of our classrooms, laboratories, sports facilities, and more.
                </p>

                <div class="relative rounded-lg overflow-hidden aspect-video shadow-lg">
                    <img src="{{ asset('images/campus-panorama.jpg') }}" alt="School Campus Panorama" class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/1200x675?text=Campus+Tour'">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <a href="#" class="w-20 h-20 rounded-full bg-primary/80 flex items-center justify-center hover:bg-primary transition-colors">
                            <i class='bx bx-play text-4xl text-white'></i>
                        </a>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="{{ route('contact') }}?tour=1" class="inline-block px-8 py-3 bg-secondary text-white rounded-lg hover:bg-secondary/90 transition-colors font-medium">
                        Schedule a Physical Campus Tour
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Accreditation Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-primary mb-4">Our Accreditations</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                St. Francis of Assisi Private School is accredited by leading educational organizations, ensuring that we maintain the highest standards of education.
            </p>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-12">
            <div class="w-40 h-20 grayscale hover:grayscale-0 transition-all">
                <img src="{{ asset('images/accreditation1.png') }}" alt="Accreditation" class="w-full h-full object-contain"
                     onerror="this.src='https://via.placeholder.com/160x80?text=Accreditation'">
            </div>
            <div class="w-40 h-20 grayscale hover:grayscale-0 transition-all">
                <img src="{{ asset('images/accreditation2.png') }}" alt="Accreditation" class="w-full h-full object-contain"
                     onerror="this.src='https://via.placeholder.com/160x80?text=Accreditation'">
            </div>
            <div class="w-40 h-20 grayscale hover:grayscale-0 transition-all">
                <img src="{{ asset('images/accreditation3.png') }}" alt="Accreditation" class="w-full h-full object-contain"
                     onerror="this.src='https://via.placeholder.com/160x80?text=Accreditation'">
            </div>
            <div class="w-40 h-20 grayscale hover:grayscale-0 transition-all">
                <img src="{{ asset('images/accreditation4.png') }}" alt="Accreditation" class="w-full h-full object-contain"
                     onerror="this.src='https://via.placeholder.com/160x80?text=Accreditation'">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Join Our School Community</h2>
        <p class="max-w-2xl mx-auto mb-8">
            Give your child the gift of quality education at St. Francis of Assisi Private School. Applications for the new academic year are now open.
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

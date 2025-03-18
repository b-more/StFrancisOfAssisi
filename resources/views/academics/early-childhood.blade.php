@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/early-childhood-banner.jpg') }}" alt="Early Childhood Education" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Early+Childhood+Education'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Early Childhood Education</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Nurturing young minds through play-based learning and discovery
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">Our Early Childhood Program</h2>
            <p class="text-gray-600 mb-4">
                At St. Francis of Assisi Private School, we believe that the early years of a child's education are crucial to building a strong foundation for lifelong learning. Our Early Childhood Education program is designed to foster curiosity, creativity, and confidence in children aged 2-6 years.
            </p>
            <p class="text-gray-600">
                Through a blend of play-based learning, guided exploration, and age-appropriate academic activities, we help young learners develop essential cognitive, social, emotional, and physical skills in a nurturing and supportive environment.
            </p>
        </div>

        <!-- Program Levels -->
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <!-- Baby Class -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                <div class="h-48 bg-yellow-100 relative">
                    <img src="{{ asset('images/baby-class.jpg') }}" alt="Baby Class" class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/400x200?text=Baby+Class'">
                    <div class="absolute inset-0 bg-primary/20"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-primary/70 to-transparent">
                        <h3 class="text-xl font-bold text-white">Baby Class</h3>
                        <p class="text-white/90 text-sm">Ages 2-3</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">
                        Our Baby Class provides a gentle introduction to school life in a warm, secure environment. Activities focus on sensory exploration, language development, and basic social skills.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Sensory play and exploration</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Language and communication skills</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Basic social interactions</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Fine and gross motor development</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Middle Class (KG1-KG2) -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                <div class="h-48 bg-green-100 relative">
                    <img src="{{ asset('images/middle-class.jpg') }}" alt="Middle Class" class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/400x200?text=Middle+Class'">
                    <div class="absolute inset-0 bg-primary/20"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-primary/70 to-transparent">
                        <h3 class="text-xl font-bold text-white">Middle Class (KG1-KG2)</h3>
                        <p class="text-white/90 text-sm">Ages 3-5</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">
                        In our Middle Class, children engage in more structured learning activities while still enjoying plenty of play. The program develops early literacy, numeracy, and creative expression.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Pre-reading and writing skills</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Number recognition and basic counting</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Creative arts and expression</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Social skills and group activities</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Top Class (KG3) -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                <div class="h-48 bg-blue-100 relative">
                    <img src="{{ asset('images/top-class.jpg') }}" alt="Top Class" class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/400x200?text=Top+Class'">
                    <div class="absolute inset-0 bg-primary/20"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-primary/70 to-transparent">
                        <h3 class="text-xl font-bold text-white">Top Class (KG3)</h3>
                        <p class="text-white/90 text-sm">Ages 5-6</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">
                        Our Top Class prepares children for a smooth transition to primary school. The program focuses on developing independence, critical thinking, and foundational academic skills.
                    </p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Early reading and writing</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Basic mathematics concepts</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Problem-solving skills</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>School readiness activities</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Learning Approach -->
        <div class="max-w-5xl mx-auto mb-16">
            <div class="flex flex-col md:flex-row items-center bg-gray-50 rounded-lg overflow-hidden shadow-sm">
                <div class="md:w-1/2">
                    <img src="{{ asset('images/early-childhood-learning.jpg') }}" alt="Our Learning Approach" class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/600x400?text=Learning+Approach'">
                </div>
                <div class="md:w-1/2 p-8">
                    <h3 class="text-2xl font-bold text-primary mb-4">Our Learning Approach</h3>
                    <p class="text-gray-600 mb-4">
                        At St. Francis, we follow a balanced approach to early childhood education that combines the best elements of various educational philosophies, including Montessori, play-based learning, and structured academics.
                    </p>
                    <p class="text-gray-600 mb-4">
                        We believe that children learn best through hands-on experiences and meaningful interactions with their environment, teachers, and peers. Our classrooms are designed as stimulating learning spaces with designated areas for different types of play and exploration.
                    </p>
                    <p class="text-gray-600">
                        Our low student-to-teacher ratio ensures that each child receives individual attention and support tailored to their unique learning style, interests, and developmental needs.
                    </p>
                </div>
            </div>
        </div>

        <!-- Daily Schedule -->
        <div class="max-w-4xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6">Sample Daily Schedule</h3>
            <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                <table class="w-full">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th class="px-4 py-3 text-left">Time</th>
                            <th class="px-4 py-3 text-left">Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3 font-medium">8:00 - 8:30 AM</td>
                            <td class="px-4 py-3">Arrival and Free Play</td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-100">
                            <td class="px-4 py-3 font-medium">8:30 - 9:00 AM</td>
                            <td class="px-4 py-3">Morning Circle Time (Greetings, Calendar, Weather)</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3 font-medium">9:00 - 9:45 AM</td>
                            <td class="px-4 py-3">Language and Literacy Activities</td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-100">
                            <td class="px-4 py-3 font-medium">9:45 - 10:15 AM</td>
                            <td class="px-4 py-3">Snack Time</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3 font-medium">10:15 - 11:00 AM</td>
                            <td class="px-4 py-3">Math and Cognitive Activities</td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-100">
                            <td class="px-4 py-3 font-medium">11:00 - 11:45 AM</td>
                            <td class="px-4 py-3">Outdoor Play / Physical Activity</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3 font-medium">11:45 AM - 12:30 PM</td>
                            <td class="px-4 py-3">Lunch Time</td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-100">
                            <td class="px-4 py-3 font-medium">12:30 - 1:30 PM</td>
                            <td class="px-4 py-3">Rest / Quiet Time</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3 font-medium">1:30 - 2:15 PM</td>
                            <td class="px-4 py-3">Arts and Crafts / Creative Expression</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="px-4 py-3 font-medium">2:15 - 3:00 PM</td>
                            <td class="px-4 py-3">Themed Activities / Center Time / Story Time</td>
                        </tr>
                    </tbody>
                </table>
                <div class="p-4 bg-yellow-50 border-l-4 border-yellow-400">
                    <p class="text-sm text-yellow-800">
                        <span class="font-medium">Note:</span> This is a sample schedule that may vary by age group and day of the week. Specialized activities such as music, physical education, and library visits are incorporated throughout the week.
                    </p>
                </div>
            </div>
        </div>

        <!-- Facilities -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6">Our Facilities</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/classroom.jpg') }}" alt="Modern Classrooms" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Classrooms'">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-lg mb-2">Modern Classrooms</h4>
                        <p class="text-gray-600 text-sm">
                            Bright, spacious classrooms designed specifically for young learners with age-appropriate furniture and learning materials.
                        </p>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/playground.jpg') }}" alt="Safe Playground" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Playground'">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-lg mb-2">Safe Playground</h4>
                        <p class="text-gray-600 text-sm">
                            A secure outdoor play area with child-friendly equipment that promotes physical development and social interaction.
                        </p>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48">
                        <img src="{{ asset('images/activity-room.jpg') }}" alt="Activity Rooms" class="w-full h-full object-cover"
                             onerror="this.src='https://via.placeholder.com/400x200?text=Activity+Rooms'">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-lg mb-2">Activity Rooms</h4>
                        <p class="text-gray-600 text-sm">
                            Dedicated spaces for music, art, sensory play, and other specialized activities that enhance the learning experience.
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
                            My daughter has flourished at St. Francis' Early Childhood program. The teachers are so nurturing and attentive to her individual needs. I'm amazed at how much she has learned through play and hands-on activities!
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                <img src="{{ asset('images/parent1.jpg') }}" alt="Parent" class="w-full h-full object-cover rounded-full"
                                     onerror="this.src='https://via.placeholder.com/48?text=P'">
                            </div>
                            <div>
                                <h4 class="font-semibold">Mrs. Catherine Mbewe</h4>
                                <p class="text-sm text-gray-500">Parent of KG2 student</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm relative">
                    <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                    <div class="relative z-10">
                        <p class="text-gray-600 italic mb-6">
                            The transition from home to school was so smooth for my son thanks to the caring teachers at St. Francis. He looks forward to school every day, and his social skills and confidence have grown tremendously.
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                <img src="{{ asset('images/parent2.jpg') }}" alt="Parent" class="w-full h-full object-cover rounded-full"
                                     onerror="this.src='https://via.placeholder.com/48?text=P'">
                            </div>
                            <div>
                                <h4 class="font-semibold">Mr. James Phiri</h4>
                                <p class="text-sm text-gray-500">Parent of Baby Class student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enrollment CTA -->
        <div class="max-w-3xl mx-auto">
            <div class="bg-primary text-white rounded-lg p-8 text-center shadow-md">
                <h3 class="text-2xl font-bold mb-4">Begin Your Child's Educational Journey With Us</h3>
                <p class="mb-6">
                    Give your child the gift of a strong educational foundation in a nurturing and stimulating environment.
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

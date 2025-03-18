@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/admissions-banner.jpg') }}" alt="Admissions" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Admissions'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Admissions</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Begin your journey at St. Francis of Assisi Private School
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Welcome Section -->
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">Welcome to Our Admissions Department</h2>
            <p class="text-gray-600 mb-6">
                Thank you for your interest in St. Francis of Assisi Private School. We are delighted that you are considering our school for your child's education. Our admissions process is designed to be straightforward and supportive, ensuring that we find the right fit for each student.
            </p>
            <p class="text-gray-600">
                We welcome applications from families who share our commitment to academic excellence, character development, and community service. Our diverse student body creates a rich learning environment where students learn from and respect different perspectives and cultures.
            </p>
        </div>

        <!-- Quick Links -->
        <div class="max-w-5xl mx-auto mb-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('admissions.requirements') }}" class="group">
                    <div class="bg-gray-50 p-8 rounded-lg text-center h-full shadow-sm hover:shadow-md transition-all border-t-4 border-primary">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                            <i class='bx bx-list-check text-3xl text-primary'></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-primary">Admission Requirements</h3>
                        <p class="text-gray-600">
                            Learn about our admission criteria and required documentation for different grade levels.
                        </p>
                    </div>
                </a>

                <a href="{{ route('admissions.fees') }}" class="group">
                    <div class="bg-gray-50 p-8 rounded-lg text-center h-full shadow-sm hover:shadow-md transition-all border-t-4 border-primary">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                            <i class='bx bx-dollar-circle text-3xl text-primary'></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-primary">Tuition & Fees</h3>
                        <p class="text-gray-600">
                            View our fee structure, payment options, and financial assistance information.
                        </p>
                    </div>
                </a>

                <a href="{{ route('admissions.apply') }}" class="group">
                    <div class="bg-gray-50 p-8 rounded-lg text-center h-full shadow-sm hover:shadow-md transition-all border-t-4 border-secondary">
                        <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-secondary/20 transition-colors">
                            <i class='bx bx-edit text-3xl text-secondary'></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-secondary">Apply Now</h3>
                        <p class="text-gray-600">
                            Start your application process online. It's simple and convenient.
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Admissions Process -->
        <div class="max-w-5xl mx-auto mb-20">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">Our Admissions Process</h2>

            <div class="relative">
                <!-- Timeline Line -->
                <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-1 bg-primary/20 transform -translate-x-1/2"></div>

                <!-- Step 1 -->
                <div class="relative mb-12">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 mb-8 md:mb-0 md:pr-16 text-right order-2 md:order-1">
                            <h3 class="text-2xl font-semibold text-primary mb-3">1. Inquiry & School Tour</h3>
                            <p class="text-gray-600">
                                Contact our admissions office to learn more about our programs and schedule a campus tour. This is an opportunity to see our facilities, meet our staff, and get a feel for our school culture.
                            </p>
                            <div class="mt-4">
                                <a href="{{ route('contact') }}?tour=1" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                                    Schedule a Tour
                                    <i class='bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </div>
                        </div>
                        <div class="md:w-1/2 order-1 md:order-2 flex justify-start md:justify-center">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white font-bold text-xl relative z-10">
                                1
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative mb-12">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 order-2 flex justify-end md:justify-center">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white font-bold text-xl relative z-10">
                                2
                            </div>
                        </div>
                        <div class="md:w-1/2 mb-8 md:mb-0 md:pl-16 order-1">
                            <h3 class="text-2xl font-semibold text-primary mb-3">2. Submit Application</h3>
                            <p class="text-gray-600">
                                Complete our online application form and submit the required documents. The application fee must be paid at this stage to process your application.
                            </p>
                            <div class="mt-4">
                                <a href="{{ route('admissions.apply') }}" class="inline-flex items-center text-primary font-medium hover:text-primary/80 transition-colors">
                                    Apply Online
                                    <i class='bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative mb-12">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 mb-8 md:mb-0 md:pr-16 text-right order-2 md:order-1">
                            <h3 class="text-2xl font-semibold text-primary mb-3">3. Assessment & Interview</h3>
                            <p class="text-gray-600">
                                Students applying for Grades 1-12 will take an assessment test to determine their academic readiness. Parents and students will also have an interview with our admissions team.
                            </p>
                        </div>
                        <div class="md:w-1/2 order-1 md:order-2 flex justify-start md:justify-center">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white font-bold text-xl relative z-10">
                                3
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="relative mb-12">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 order-2 flex justify-end md:justify-center">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white font-bold text-xl relative z-10">
                                4
                            </div>
                        </div>
                        <div class="md:w-1/2 mb-8 md:mb-0 md:pl-16 order-1">
                            <h3 class="text-2xl font-semibold text-primary mb-3">4. Admission Decision</h3>
                            <p class="text-gray-600">
                                Our admissions committee will review your application, assessment results, and interview notes. You will be notified of the decision within two weeks.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="relative">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 mb-8 md:mb-0 md:pr-16 text-right order-2 md:order-1">
                            <h3 class="text-2xl font-semibold text-primary mb-3">5. Enrollment & Welcome</h3>
                            <p class="text-gray-600">
                                If accepted, you will receive an enrollment package. Complete the enrollment forms and pay the required fees to secure your place. Welcome to the St. Francis family!
                            </p>
                        </div>
                        <div class="md:w-1/2 order-1 md:order-2 flex justify-start md:justify-center">
                            <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center text-white font-bold text-xl relative z-10">
                                5
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Application Deadlines -->
        <div class="max-w-4xl mx-auto mb-20">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">Application Deadlines</h2>

            <div class="bg-gray-50 rounded-lg shadow-sm p-8">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-3 text-left bg-primary text-white rounded-tl-lg">Academic Term</th>
                                <th class="px-4 py-3 text-left bg-primary text-white">Application Deadline</th>
                                <th class="px-4 py-3 text-left bg-primary text-white rounded-tr-lg">Decision Notification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="px-4 py-3">Term 1 (January Start)</td>
                                <td class="px-4 py-3">October 31</td>
                                <td class="px-4 py-3">November 15</td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="px-4 py-3">Term 2 (May Start)</td>
                                <td class="px-4 py-3">March 31</td>
                                <td class="px-4 py-3">April 15</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">Term 3 (September Start)</td>
                                <td class="px-4 py-3">July 31</td>
                                <td class="px-4 py-3">August 15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 bg-yellow-50 border-l-4 border-yellow-400 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class='bx bx-info-circle text-yellow-400 text-xl'></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                                <span class="font-medium">Note:</span> Late applications are accepted on a rolling basis, subject to space availability. We encourage you to apply early as classes fill quickly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Frequently Asked Questions -->
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">Frequently Asked Questions</h2>

            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
                    <button class="flex justify-between items-center w-full px-6 py-4 text-left"
                            onclick="toggleFAQ(this)">
                        <span class="font-semibold text-gray-900">What is the average class size?</span>
                        <i class='bx bx-chevron-down text-xl transition-transform duration-300'></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Our class sizes are deliberately kept small to ensure personalized attention for each student. The average class size is 20-25 students in primary school and 25-30 students in secondary school.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
                    <button class="flex justify-between items-center w-full px-6 py-4 text-left"
                            onclick="toggleFAQ(this)">
                        <span class="font-semibold text-gray-900">Do you offer scholarships or financial aid?</span>
                        <i class='bx bx-chevron-down text-xl transition-transform duration-300'></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Yes, we offer a limited number of merit-based scholarships and need-based financial aid to qualifying students. The application process for financial assistance is separate from the admission process and begins after a student has been accepted. Contact our admissions office for more information.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
                    <button class="flex justify-between items-center w-full px-6 py-4 text-left"
                            onclick="toggleFAQ(this)">
                        <span class="font-semibold text-gray-900">What documents are required for admission?</span>
                        <i class='bx bx-chevron-down text-xl transition-transform duration-300'></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600 mb-3">
                            The required documents vary by grade level, but generally include:
                        </p>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Completed application form</li>
                            <li>Birth certificate</li>
                            <li>Academic records from the previous two years</li>
                            <li>Recommendation letter from current school (for Grades 2-12)</li>
                            <li>Passport-sized photographs</li>
                            <li>Immunization records</li>
                            <li>Copy of parent/guardian ID</li>
                        </ul>
                        <p class="text-gray-600 mt-3">
                            Please visit our <a href="{{ route('admissions.requirements') }}" class="text-primary hover:underline">Requirements page</a> for detailed information.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
                    <button class="flex justify-between items-center w-full px-6 py-4 text-left"
                            onclick="toggleFAQ(this)">
                        <span class="font-semibold text-gray-900">Can my child join mid-year?</span>
                        <i class='bx bx-chevron-down text-xl transition-transform duration-300'></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Yes, we accept mid-year applications subject to space availability. The admission process remains the same, and we work with families to ensure a smooth transition for students joining during the academic year.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
                    <button class="flex justify-between items-center w-full px-6 py-4 text-left"
                            onclick="toggleFAQ(this)">
                        <span class="font-semibold text-gray-900">What is the language of instruction?</span>
                        <i class='bx bx-chevron-down text-xl transition-transform duration-300'></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            English is the primary language of instruction at our school. However, we also offer language classes in French, and local languages as part of our curriculum to promote multilingualism and cultural awareness.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10">
                <p class="text-gray-600 mb-4">Still have questions about admissions?</p>
                <a href="{{ route('contact') }}?dept=admissions" class="inline-block px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors">
                    Contact Admissions Office
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">Parent Testimonials</h2>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm relative">
                    <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                    <div class="relative z-10">
                        <p class="text-gray-600 italic mb-6">
                            The admissions process was smooth and straightforward. The staff was helpful and responsive to all our questions. My daughter has now been at St. Francis for three years and we couldn't be happier with our decision.
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                <img src="{{ asset('images/parent3.jpg') }}" alt="Parent"
                                     class="w-full h-full object-cover rounded-full"
                                     onerror="this.src='https://via.placeholder.com/48?text=P'">
                            </div>
                            <div>
                                <h4 class="font-semibold">Mrs. Kapembwa</h4>
                                <p class="text-sm text-gray-500">Parent of Grade 4 student</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm relative">
                    <div class="text-6xl text-primary/10 absolute top-4 left-4">"</div>
                    <div class="relative z-10">
                        <p class="text-gray-600 italic mb-6">
                            We moved to Lusaka midway through the school year and were worried about finding a good school for our son. St. Francis not only accepted him mid-year but also provided excellent support to help him adjust to the new environment.
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-300 mr-4">
                                <img src="{{ asset('images/parent4.jpg') }}" alt="Parent"
                                     class="w-full h-full object-cover rounded-full"
                                     onerror="this.src='https://via.placeholder.com/48?text=P'">
                            </div>
                            <div>
                                <h4 class="font-semibold">Mr. & Mrs. Phiri</h4>
                                <p class="text-sm text-gray-500">Parents of Grade 10 student</p>
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
        <h2 class="text-3xl font-bold mb-4">Begin Your Journey with Us Today</h2>
        <p class="max-w-2xl mx-auto mb-8">
            St. Francis of Assisi Private School is committed to providing a nurturing environment where every student can thrive. Apply now and become part of our community.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('admissions.apply') }}" class="px-8 py-3 bg-secondary text-white rounded-lg hover:bg-secondary/90 transition-colors font-medium">
                Apply Now
            </a>
            <a href="{{ route('contact') }}?tour=1" class="px-8 py-3 bg-white text-primary rounded-lg hover:bg-gray-100 transition-colors font-medium">
                Schedule a Tour
            </a>
        </div>
    </div>
</section>

@push('scripts')
<script>
    function toggleFAQ(element) {
        // Toggle the answer visibility
        const answer = element.nextElementSibling;
        answer.classList.toggle('hidden');

        // Rotate the chevron icon
        const icon = element.querySelector('.bx-chevron-down');
        icon.classList.toggle('rotate-180');
    }
</script>
@endpush
@endsection

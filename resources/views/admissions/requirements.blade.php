@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/requirements-banner.jpg') }}" alt="Admission Requirements" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Admission+Requirements'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Admission Requirements</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Everything you need to know about joining our school community
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">General Requirements</h2>
            <p class="text-gray-600 mb-4">
                At St. Francis of Assisi Private School, we welcome students from diverse backgrounds who demonstrate academic potential and good character. Our admission process is designed to ensure that each student is a good fit for our educational environment and that we can meet their individual learning needs.
            </p>
            <p class="text-gray-600">
                The following information outlines the general requirements and specific criteria for each educational level. Please review these requirements carefully before submitting your application.
            </p>
        </div>

        <!-- Document Requirements -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Required Documents</h3>

            <div class="bg-gray-50 p-8 rounded-lg shadow-sm">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- For All Applicants -->
                    <div>
                        <h4 class="text-xl font-semibold text-primary mb-4">For All Applicants</h4>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Completed application form</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Birth certificate (original and photocopy)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Four passport-sized photographs</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Immunization records</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Copy of parent/guardian ID or passport</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Application fee payment receipt</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Additional Documents For Transfer Students -->
                    <div>
                        <h4 class="text-xl font-semibold text-primary mb-4">Additional for Transfer Students</h4>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Academic records from the previous two years</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Transfer certificate from previous school</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Recommendation letter from previous school</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Most recent report card</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>National examination results (if applicable)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Disciplinary record (if required by the school)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Age Requirements -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Age Requirements</h3>

            <div class="overflow-x-auto bg-white rounded-lg shadow-sm">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-3 text-left bg-primary text-white">Grade Level</th>
                            <th class="px-4 py-3 text-center bg-primary text-white">Age Requirement</th>
                            <th class="px-4 py-3 text-left bg-primary text-white">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3">Baby Class</td>
                            <td class="px-4 py-3 text-center">2-3 years</td>
                            <td class="px-4 py-3">Child must be 2 years old by January of the enrollment year</td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50">
                            <td class="px-4 py-3">Pre-KG (Middle Class)</td>
                            <td class="px-4 py-3 text-center">3-4 years</td>
                            <td class="px-4 py-3">Child must be 3 years old by January of the enrollment year</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3">Kindergarten (KG3)</td>
                            <td class="px-4 py-3 text-center">4-5 years</td>
                            <td class="px-4 py-3">Child must be 4 years old by January of the enrollment year</td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50">
                            <td class="px-4 py-3">Grade 1</td>
                            <td class="px-4 py-3 text-center">5-6 years</td>
                            <td class="px-4 py-3">Child must be 5 years old by January of the enrollment year</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">Grades 2-12</td>
                            <td class="px-4 py-3 text-center">Varies</td>
                            <td class="px-4 py-3">Age appropriate for grade level, typically advancing by one year per grade</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-6 bg-blue-50 border-l-4 border-blue-400 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class='bx bx-info-circle text-blue-400 text-xl'></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-blue-700">
                            <span class="font-medium">Note:</span> Age exceptions may be considered on a case-by-case basis depending on the child's developmental readiness and previous educational experience. Such exceptions require additional assessment and approval from the admissions committee.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Requirements by Educational Level -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-10 text-center">Requirements by Educational Level</h3>

            <div class="space-y-8">
                <!-- Early Childhood -->
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="bg-yellow-600 p-4 text-white">
                        <h4 class="text-xl font-bold">Early Childhood (Baby Class - KG3)</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Admission to our Early Childhood program focuses on developmental readiness rather than academic achievement. We look for children who can benefit from our play-based learning environment.
                        </p>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Admission Criteria:</h5>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Age-appropriate developmental progress</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Basic communication skills</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Readiness for a school environment</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Toilet trained (except for Baby Class)</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Admission Process:</h5>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Parent and child interview</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Informal observation during a play session</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Review of any previous school experience (if applicable)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Basic health screening</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Primary School -->
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="bg-blue-600 p-4 text-white">
                        <h4 class="text-xl font-bold">Primary School (Grades 1-7)</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Admission to our Primary School requires evidence of academic readiness and good behavior. Students must demonstrate grade-appropriate knowledge and skills.
                        </p>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Admission Criteria:</h5>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Age-appropriate academic skills</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Good conduct record from previous school (if applicable)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Basic English proficiency</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Satisfactory performance on admission assessment</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Admission Process:</h5>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Review of academic records</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Grade-appropriate entrance assessment</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Student and parent interview</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Recommendation from previous teacher (for transfer students)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Secondary School -->
                <div class="bg-gray-50 rounded-lg shadow-sm overflow-hidden">
                    <div class="bg-green-600 p-4 text-white">
                        <h4 class="text-xl font-bold">Secondary School (Grades 8-12)</h4>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Admission to our Secondary School is competitive and requires strong academic performance, good character, and a demonstrated commitment to learning.
                        </p>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Admission Criteria:</h5>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Strong academic record (minimum average of 60%)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Excellent conduct record</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Proficiency in English and Mathematics</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Successful performance on entrance examination</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Grade 9 certificate (for Grade 10 applicants)</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="font-semibold text-primary mb-2">Admission Process:</h5>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Comprehensive review of academic records</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Subject-specific entrance examinations</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Student and parent interview</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Teacher recommendations from previous school</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Review of national examination results (if applicable)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Special Considerations -->
        <div class="max-w-4xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Special Considerations</h3>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <div class="mb-6">
                    <h4 class="text-xl font-semibold text-primary mb-4">Students with Special Educational Needs</h4>
                    <p class="text-gray-600 mb-4">
                        St. Francis of Assisi Private School is committed to inclusive education and welcomes students with mild to moderate learning differences who can thrive in our supportive environment with reasonable accommodations.
                    </p>
                    <p class="text-gray-600">
                        Parents of children with special educational needs should disclose this information during the application process. Additional documentation such as educational psychologist reports, individualized education plans (IEPs), or medical diagnoses may be required to determine if our school can provide appropriate support.
                    </p>
                </div>

                <div class="mb-6">
                    <h4 class="text-xl font-semibold text-primary mb-4">International Students</h4>
                    <p class="text-gray-600 mb-4">
                        We welcome students from different countries and cultural backgrounds. International applicants must submit the following additional documents:
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Copy of passport and visa/immigration status</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Translated academic records (if not in English)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>English language proficiency assessment (for non-native English speakers)</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xl font-semibold text-primary mb-4">Mid-Year Admissions</h4>
                    <p class="text-gray-600">
                        We accept mid-year applications subject to space availability. The admission process remains the same, but additional academic support may be recommended to help students transition smoothly into our curriculum.
                    </p>
                </div>
            </div>
        </div>

        <!-- Admission Decision Factors -->
        <div class="max-w-4xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Admission Decision Factors</h3>

            <p class="text-gray-600 mb-6 text-center">
                Our admissions committee considers multiple factors when reviewing applications:
            </p>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-book text-2xl text-primary'></i>
                    </div>
                    <h4 class="text-lg font-semibold text-primary mb-3">Academic Readiness</h4>
                    <p class="text-gray-600 text-sm">
                        Student's academic performance, test scores, and readiness for our curriculum.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-user-check text-2xl text-primary'></i>
                    </div>
                    <h4 class="text-lg font-semibold text-primary mb-3">Character & Behavior</h4>
                    <p class="text-gray-600 text-sm">
                        Student's conduct, attitude toward learning, and personal values.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-group text-2xl text-primary'></i>
                    </div>
                    <h4 class="text-lg font-semibold text-primary mb-3">Family Alignment</h4>
                    <p class="text-gray-600 text-sm">
                        Family's commitment to our educational philosophy and willingness to partner with the school.
                    </p>
                </div>
            </div>
        </div>

        <!-- Next Steps -->
        <div class="max-w-3xl mx-auto">
            <div class="bg-primary text-white rounded-lg p-8 text-center shadow-md">
                <h3 class="text-2xl font-bold mb-4">Ready to Apply?</h3>
                <p class="mb-6">
                    Now that you're familiar with our admission requirements, we invite you to begin the application process.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('admissions.apply') }}" class="px-6 py-3 bg-secondary text-white rounded-lg hover:bg-secondary/90 transition-colors font-medium">
                        Apply Now
                    </a>
                    <a href="{{ route('contact') }}?dept=admissions" class="px-6 py-3 bg-white text-primary rounded-lg hover:bg-gray-100 transition-colors font-medium">
                        Contact Admissions Office
                    </a>
                </div>
                <p class="mt-6 text-white/80 text-sm">
                    If you have specific questions about the admission process, please contact our Admissions Office at <br>
                    +260 977 123 456 or admissions@stfrancisschool.edu.zm
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

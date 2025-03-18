@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/fees-banner.jpg') }}" alt="Tuition & Fees" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Tuition+and+Fees'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Tuition & Fees</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Investment in your child's future through quality education
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-primary mb-6">Fee Structure Overview</h2>
            <p class="text-gray-600 mb-4">
                At St. Francis of Assisi Private School, we are committed to providing high-quality education at competitive rates. Our fee structure is designed to support our educational programs, maintain our facilities, and provide the resources necessary for a well-rounded learning experience.
            </p>
            <p class="text-gray-600">
                We strive to maintain transparency in our fee structure and provide families with clear information about all costs associated with attending our school. Below you will find a comprehensive breakdown of our fees for the current academic year.
            </p>
        </div>

        <!-- Academic Year Information -->
        <div class="max-w-5xl mx-auto mb-16">
            <div class="bg-primary/10 p-6 rounded-lg shadow-sm">
                <h3 class="text-2xl font-bold text-primary mb-4 text-center">2023-2024 Academic Year</h3>

                <div class="grid md:grid-cols-3 gap-6 text-center">
                    <div>
                        <h4 class="font-semibold text-primary mb-2">Term 1</h4>
                        <p class="text-gray-600">January 15 - April 14, 2023</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-primary mb-2">Term 2</h4>
                        <p class="text-gray-600">May 8 - August 4, 2023</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-primary mb-2">Term 3</h4>
                        <p class="text-gray-600">September 4 - December 8, 2023</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tuition Fees -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Tuition Fees (2023-2024)</h3>

            <div class="overflow-x-auto bg-white rounded-lg shadow-sm">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-3 text-left bg-primary text-white">Grade Level</th>
                            <th class="px-4 py-3 text-center bg-primary text-white">Per Term (K)</th>
                            <th class="px-4 py-3 text-center bg-primary text-white">Annual Fee (K)</th>
                            <th class="px-4 py-3 text-center bg-primary text-white">Payment Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Early Childhood -->
                        <tr class="bg-yellow-50">
                            <td class="px-4 py-3 font-medium" colspan="4">Early Childhood Education</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3">Baby Class</td>
                            <td class="px-4 py-3 text-center">4,500</td>
                            <td class="px-4 py-3 text-center">13,500</td>
                            <td class="px-4 py-3 text-center">Before term begins</td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50">
                            <td class="px-4 py-3">Pre-KG (Middle Class)</td>
                            <td class="px-4 py-3 text-center">4,800</td>
                            <td class="px-4 py-3 text-center">14,400</td>
                            <td class="px-4 py-3 text-center">Before term begins</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3">Kindergarten (KG3)</td>
                            <td class="px-4 py-3 text-center">5,000</td>
                            <td class="px-4 py-3 text-center">15,000</td>
                            <td class="px-4 py-3 text-center">Before term begins</td>
                        </tr>

                        <!-- Primary School -->
                        <tr class="bg-blue-50">
                            <td class="px-4 py-3 font-medium" colspan="4">Primary School</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3">Grades 1-3</td>
                            <td class="px-4 py-3 text-center">5,500</td>
                            <td class="px-4 py-3 text-center">16,500</td>
                            <td class="px-4 py-3 text-center">Before term begins</td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50">
                            <td class="px-4 py-3">Grades 4-6</td>
                            <td class="px-4 py-3 text-center">6,000</td>
                            <td class="px-4 py-3 text-center">18,000</td>
                            <td class="px-4 py-3 text-center">Before term begins</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3">Grade 7</td>
                            <td class="px-4 py-3 text-center">6,500</td>
                            <td class="px-4 py-3 text-center">19,500</td>
                            <td class="px-4 py-3 text-center">Before term begins</td>
                        </tr>

                        <!-- Secondary School -->
                        <tr class="bg-green-50">
                            <td class="px-4 py-3 font-medium" colspan="4">Secondary School</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3">Grades 8-9</td>
                            <td class="px-4 py-3 text-center">7,500</td>
                            <td class="px-4 py-3 text-center">22,500</td>
                            <td class="px-4 py-3 text-center">Before term begins</td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50">
                            <td class="px-4 py-3">Grades 10-11</td>
                            <td class="px-4 py-3 text-center">8,500</td>
                            <td class="px-4 py-3 text-center">25,500</td>
                            <td class="px-4 py-3 text-center">Before term begins</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">Grade 12</td>
                            <td class="px-4 py-3 text-center">9,000</td>
                            <td class="px-4 py-3 text-center">27,000</td>
                            <td class="px-4 py-3 text-center">Before term begins</td>
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
                            <span class="font-medium">Note:</span> Tuition fees cover the cost of instruction, use of school facilities, and basic learning materials. Additional fees may apply for specific activities, programs, or resources as detailed below.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- One-Time and Annual Fees -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">One-Time and Annual Fees</h3>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- One-Time Fees -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <h4 class="text-xl font-semibold text-primary mb-4">One-Time Fees</h4>

                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <h5 class="font-semibold text-gray-800 mb-2">Application Fee</h5>
                            <p class="text-gray-600 text-sm mb-1">K250 per student</p>
                            <p class="text-gray-500 text-xs italic">Non-refundable fee due at the time of application</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <h5 class="font-semibold text-gray-800 mb-2">Registration Fee</h5>
                            <p class="text-gray-600 text-sm mb-1">K1,500 per student</p>
                            <p class="text-gray-500 text-xs italic">One-time fee for new students, payable upon acceptance</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <h5 class="font-semibold text-gray-800 mb-2">Development Levy</h5>
                            <p class="text-gray-600 text-sm mb-1">K2,000 per family</p>
                            <p class="text-gray-500 text-xs italic">One-time fee for school infrastructure development</p>
                        </div>
                    </div>
                </div>

                <!-- Annual Fees -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <h4 class="text-xl font-semibold text-primary mb-4">Annual Fees</h4>

                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <h5 class="font-semibold text-gray-800 mb-2">Book & Resource Fee</h5>
                            <p class="text-gray-600 text-sm mb-1">Early Childhood: K1,000 | Primary: K1,500 | Secondary: K2,000</p>
                            <p class="text-gray-500 text-xs italic">Covers textbooks, workbooks, and educational materials</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <h5 class="font-semibold text-gray-800 mb-2">Technology Fee</h5>
                            <p class="text-gray-600 text-sm mb-1">Primary: K800 | Secondary: K1,200</p>
                            <p class="text-gray-500 text-xs italic">For computer lab usage, internet access, and digital resources</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <h5 class="font-semibold text-gray-800 mb-2">Activity Fee</h5>
                            <p class="text-gray-600 text-sm mb-1">K750 per student</p>
                            <p class="text-gray-500 text-xs italic">Covers field trips, special events, and school clubs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional Services & Fees -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Optional Services & Fees</h3>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Transport Service -->
                    <div>
                        <h4 class="text-xl font-semibold text-primary mb-4">School Transport</h4>

                        <div class="bg-white p-4 rounded-lg border border-gray-200 mb-4">
                            <h5 class="font-semibold text-gray-800 mb-2">Transport Fee (Per Term)</h5>
                            <ul class="space-y-1 text-gray-600 text-sm">
                                <li class="flex justify-between">
                                    <span>Zone A (0-5 km):</span>
                                    <span class="font-medium">K1,500</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Zone B (5-10 km):</span>
                                    <span class="font-medium">K2,000</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Zone C (10-15 km):</span>
                                    <span class="font-medium">K2,500</span>
                                </li>
                            </ul>
                        </div>

                        <p class="text-gray-600 text-sm">
                            Our transport service provides safe and reliable transportation to and from school. Routes are determined based on demand, and seats are allocated on a first-come, first-served basis.
                        </p>
                    </div>

                    <!-- Additional Services -->
                    <div>
                        <h4 class="text-xl font-semibold text-primary mb-4">Other Optional Services</h4>

                        <div class="space-y-4">
                            <div class="bg-white p-4 rounded-lg border border-gray-200">
                                <h5 class="font-semibold text-gray-800 mb-2">After-School Program</h5>
                                <p class="text-gray-600 text-sm mb-1">K800 per term</p>
                                <p class="text-gray-500 text-xs italic">Supervised homework and activities from 2:30-5:00 PM</p>
                            </div>

                            <div class="bg-white p-4 rounded-lg border border-gray-200">
                                <h5 class="font-semibold text-gray-800 mb-2">Lunch Program</h5>
                                <p class="text-gray-600 text-sm mb-1">K1,200 per term</p>
                                <p class="text-gray-500 text-xs italic">Nutritious daily lunch provided by the school cafeteria</p>
                            </div>

                            <div class="bg-white p-4 rounded-lg border border-gray-200">
                                <h5 class="font-semibold text-gray-800 mb-2">Specialized Clubs</h5>
                                <p class="text-gray-600 text-sm mb-1">K300-600 per term (varies by club)</p>
                                <p class="text-gray-500 text-xs italic">Includes robotics, swimming, music lessons, etc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Examination Fees -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Examination Fees</h3>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <p class="text-gray-600 mb-6 text-center">
                    The following examination fees apply to students taking national examinations. These fees are separate from tuition and are collected during the examination registration period.
                </p>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-3 text-left bg-primary text-white">Examination</th>
                                <th class="px-4 py-3 text-center bg-primary text-white">Fee (K)</th>
                                <th class="px-4 py-3 text-left bg-primary text-white">Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="px-4 py-3">Grade 7 National Examination</td>
                                <td class="px-4 py-3 text-center">500</td>
                                <td class="px-4 py-3">Collected in Term 2</td>
                            </tr>
                            <tr class="border-b border-gray-200 bg-gray-100">
                                <td class="px-4 py-3">Grade 9 National Examination</td>
                                <td class="px-4 py-3 text-center">750</td>
                                <td class="px-4 py-3">Collected in Term 2</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">Grade 12 National Examination</td>
                                <td class="px-4 py-3 text-center">1,200</td>
                                <td class="px-4 py-3">Collected in Term 2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 bg-yellow-50 border-l-4 border-yellow-400 p-4">
                    <p class="text-sm text-yellow-800">
                        <span class="font-medium">Important:</span> Examination fees are set by the Examinations Council of Zambia and are subject to change. Any changes in the official examination fees will be communicated to parents in advance.
                    </p>
                </div>
            </div>
        </div>

        <!-- Payment Information -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Payment Information</h3>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Payment Methods -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <h4 class="text-xl font-semibold text-primary mb-4">Payment Methods</h4>

                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <h5 class="font-semibold text-gray-800 mb-2">Bank Transfer</h5>
                            <p class="text-gray-600 text-sm mb-2">Account Name: St. Francis of Assisi Private School</p>
                            <p class="text-gray-600 text-sm mb-2">Bank: Standard Chartered Bank</p>
                            <p class="text-gray-600 text-sm mb-2">Account Number: 0102345678900</p>
                            <p class="text-gray-600 text-sm">Branch: Cairo Road, Lusaka</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <h5 class="font-semibold text-gray-800 mb-2">Mobile Money</h5>
                            <p class="text-gray-600 text-sm mb-2">School Mobile Money Number: 097 1234567</p>
                            <p class="text-gray-600 text-sm">Please include student name and ID in the reference</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <h5 class="font-semibold text-gray-800 mb-2">Cash/Check Payment</h5>
                            <p class="text-gray-600 text-sm">Payments can be made at the school bursar's office</p>
                        </div>
                    </div>
                </div>

                <!-- Payment Policies -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <h4 class="text-xl font-semibold text-primary mb-4">Payment Policies</h4>

                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span><strong>Due Dates:</strong> All fees must be paid before the beginning of each term. Students with outstanding fees may not be allowed to attend classes until payment is made.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span><strong>Payment Plans:</strong> Parents who wish to pay in installments must make arrangements with the accounts office before the term begins and sign a payment agreement.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span><strong>Late Payment:</strong> A 5% late payment fee will be applied to fees paid after the due date without prior arrangement.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span><strong>Receipts:</strong> Official receipts will be issued for all payments. Parents should keep these receipts for their records.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span><strong>Refunds:</strong> Tuition fees are non-refundable after the first two weeks of the term. A 25% administrative fee will be charged for withdrawals during the first two weeks.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Discounts and Financial Assistance -->
        <div class="max-w-5xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Discounts & Financial Assistance</h3>

            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Discounts -->
                    <div>
                        <h4 class="text-xl font-semibold text-primary mb-4">Available Discounts</h4>

                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>Sibling Discount:</strong> 5% tuition discount for the second child, 10% for third and subsequent children enrolled simultaneously.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>Annual Payment Discount:</strong> 5% discount on tuition when the full year's fees are paid in advance.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>Staff Discount:</strong> School employees receive a special discount on tuition for their children. Please contact HR for details.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Financial Assistance -->
                    <div>
                        <h4 class="text-xl font-semibold text-primary mb-4">Financial Assistance</h4>

                        <p class="text-gray-600 mb-4">
                            St. Francis of Assisi Private School is committed to making quality education accessible. We offer a limited number of scholarships and bursaries based on both merit and financial need.
                        </p>

                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>Merit Scholarships:</strong> Available to students who demonstrate exceptional academic achievement, leadership, and character.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-secondary mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span><strong>Need-Based Bursaries:</strong> Available to families experiencing financial hardship. Applications require documentation of financial circumstances.</span>
                            </li>
                        </ul>

                        <p class="text-gray-600 mt-4">
                            To apply for financial assistance, please contact the Admissions Office for the necessary forms and requirements. Applications must be submitted at least three months before the start of the academic year.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Frequently Asked Questions -->
        <div class="max-w-4xl mx-auto mb-16">
            <h3 class="text-2xl font-bold text-primary mb-6 text-center">Frequently Asked Questions</h3>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
                    <button class="flex justify-between items-center w-full px-6 py-4 text-left"
                            onclick="toggleFAQ(this)">
                        <span class="font-semibold text-gray-900">Are there any hidden fees I should be aware of?</span>
                        <i class='bx bx-chevron-down text-xl transition-transform duration-300'></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            We strive to be transparent about all costs associated with attending our school. The fees outlined on this page cover all standard educational expenses. However, there may be additional costs for optional activities such as certain field trips, specialized extracurricular activities, external examinations, or special events. These will always be communicated to parents well in advance.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
                    <button class="flex justify-between items-center w-full px-6 py-4 text-left"
                            onclick="toggleFAQ(this)">
                        <span class="font-semibold text-gray-900">What happens if I cannot pay the fees on time?</span>
                        <i class='bx bx-chevron-down text-xl transition-transform duration-300'></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            We understand that financial circumstances can sometimes be challenging. If you anticipate difficulty meeting the payment deadline, please contact our Finance Office as soon as possible to discuss payment plan options. It's important to communicate with us proactively rather than waiting until fees are overdue. We will work with you to find a reasonable solution while ensuring the continued education of your child.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
                    <button class="flex justify-between items-center w-full px-6 py-4 text-left"
                            onclick="toggleFAQ(this)">
                        <span class="font-semibold text-gray-900">Do the fees increase every year?</span>
                        <i class='bx bx-chevron-down text-xl transition-transform duration-300'></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Fee adjustments may occur annually to account for inflation, improvements in educational resources, and increased operational costs. However, we make every effort to keep increases reasonable and provide advance notice to parents. Typically, fee increases are announced at least three months before the start of the new academic year to allow families time to plan accordingly.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
                    <button class="flex justify-between items-center w-full px-6 py-4 text-left"
                            onclick="toggleFAQ(this)">
                        <span class="font-semibold text-gray-900">How do I apply for financial assistance?</span>
                        <i class='bx bx-chevron-down text-xl transition-transform duration-300'></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            To apply for financial assistance, you need to complete a Financial Assistance Application Form, available from our Admissions Office or downloadable from our website. This form requires information about your financial circumstances and must be accompanied by supporting documentation such as income statements, tax returns, or other relevant financial records. Applications are reviewed confidentially by our Financial Assistance Committee. For merit scholarships, students must demonstrate exceptional academic performance, leadership qualities, and good character.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
                    <button class="flex justify-between items-center w-full px-6 py-4 text-left"
                            onclick="toggleFAQ(this)">
                        <span class="font-semibold text-gray-900">Can I pay fees in installments?</span>
                        <i class='bx bx-chevron-down text-xl transition-transform duration-300'></i>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">
                            Yes, we offer installment payment plans for families who may find it difficult to pay the full term fees at once. To arrange an installment plan, you must contact our Finance Office before the term begins to discuss the options and sign a payment agreement. Typically, installment plans require an initial payment of 50% of the term fees, with the remainder paid in monthly installments. Please note that a small administrative fee may be applied to installment plans.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Finance Office -->
        <div class="max-w-3xl mx-auto">
            <div class="bg-primary text-white rounded-lg p-8 text-center shadow-md">
                <h3 class="text-2xl font-bold mb-4">Questions About Fees?</h3>
                <p class="mb-6">
                    Our Finance Office is available to answer any questions you may have about fees, payment options, or financial assistance.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}?dept=finance" class="px-6 py-3 bg-white text-primary rounded-lg hover:bg-gray-100 transition-colors font-medium">
                        Contact Finance Office
                    </a>
                    <a href="{{ route('admissions.apply') }}" class="px-6 py-3 bg-secondary text-white rounded-lg hover:bg-secondary/90 transition-colors font-medium">
                        Apply Now
                    </a>
                </div>
                <p class="mt-6 text-white/80 text-sm">
                    Phone: +260 978 123 456 | Email: finance@stfrancisschool.edu.zm
                </p>
            </div>
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

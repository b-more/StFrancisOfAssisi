@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/apply-banner.jpg') }}" alt="Apply Now" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Apply+Now'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Apply Now</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Start your application to St. Francis of Assisi Private School
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-12">
            <h2 class="text-3xl font-bold text-primary mb-6">Application Process</h2>
            <p class="text-gray-600 mb-4">
                Thank you for your interest in St. Francis of Assisi Private School. We're excited that you're considering joining our school community. Please complete the application form below to start the admission process.
            </p>
            <p class="text-gray-600">
                After submitting your application, our admissions team will review it and contact you regarding the next steps, which may include scheduling an assessment test and interview.
            </p>
        </div>

        <!-- Application Steps -->
        <div class="max-w-5xl mx-auto mb-12">
            <div class="bg-gray-50 rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-bold text-primary mb-4">Application Steps</h3>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="bg-white p-4 rounded-lg border border-gray-200 relative">
                        <div class="absolute -top-3 -left-3 w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">1</div>
                        <h4 class="font-semibold text-primary mb-2 mt-1">Complete Form</h4>
                        <p class="text-gray-600 text-sm">Fill out the online application form with accurate information</p>
                    </div>

                    <div class="bg-white p-4 rounded-lg border border-gray-200 relative">
                        <div class="absolute -top-3 -left-3 w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">2</div>
                        <h4 class="font-semibold text-primary mb-2 mt-1">Pay Application Fee</h4>
                        <p class="text-gray-600 text-sm">Pay the non-refundable application fee of K250</p>
                    </div>

                    <div class="bg-white p-4 rounded-lg border border-gray-200 relative">
                        <div class="absolute -top-3 -left-3 w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">3</div>
                        <h4 class="font-semibold text-primary mb-2 mt-1">Submit Documents</h4>
                        <p class="text-gray-600 text-sm">Upload or send required documents to complete your application</p>
                    </div>

                    <div class="bg-white p-4 rounded-lg border border-gray-200 relative">
                        <div class="absolute -top-3 -left-3 w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">4</div>
                        <h4 class="font-semibold text-primary mb-2 mt-1">Await Response</h4>
                        <p class="text-gray-600 text-sm">We'll contact you within 5 business days to schedule next steps</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Application Form -->
        <div class="max-w-4xl mx-auto">
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class='bx bx-check-circle text-green-500 text-xl'></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-primary p-6 text-white">
                    <h3 class="text-xl font-bold">Student Application Form</h3>
                    <p class="text-white/80 text-sm mt-1">Please fill out all required fields</p>
                </div>

                <form action="{{ route('admissions.submit') }}" method="POST" class="p-6" enctype="multipart/form-data">
                    @csrf

                    <!-- Student Information -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-primary mb-4 pb-2 border-b border-gray-200">Student Information</h4>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="student_name" class="block text-gray-700 font-medium mb-2">Full Name*</label>
                                <input type="text" id="student_name" name="student_name" value="{{ old('student_name') }}"
                                       class="w-full px-4 py-2 border @error('student_name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                       required>
                                @error('student_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="date_of_birth" class="block text-gray-700 font-medium mb-2">Date of Birth*</label>
                                <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}"
                                       class="w-full px-4 py-2 border @error('date_of_birth') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                       required>
                                @error('date_of_birth')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="gender" class="block text-gray-700 font-medium mb-2">Gender*</label>
                                <select id="gender" name="gender"
                                        class="w-full px-4 py-2 border @error('gender') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                        required>
                                    <option value="">Select gender</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                                @error('gender')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="nationality" class="block text-gray-700 font-medium mb-2">Nationality*</label>
                                <input type="text" id="nationality" name="nationality" value="{{ old('nationality') }}"
                                       class="w-full px-4 py-2 border @error('nationality') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                       required>
                                @error('nationality')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="grade_applying_for" class="block text-gray-700 font-medium mb-2">Grade Applying For*</label>
                                <select id="grade_applying_for" name="grade_applying_for"
                                        class="w-full px-4 py-2 border @error('grade_applying_for') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                        required>
                                    <option value="">Select grade</option>
                                    <optgroup label="Early Childhood">
                                        <option value="Baby Class" {{ old('grade_applying_for') == 'Baby Class' ? 'selected' : '' }}>Baby Class</option>
                                        <option value="Pre-KG" {{ old('grade_applying_for') == 'Pre-KG' ? 'selected' : '' }}>Pre-KG (Middle Class)</option>
                                        <option value="KG3" {{ old('grade_applying_for') == 'KG3' ? 'selected' : '' }}>Kindergarten (KG3)</option>
                                    </optgroup>
                                    <optgroup label="Primary School">
                                        <option value="Grade 1" {{ old('grade_applying_for') == 'Grade 1' ? 'selected' : '' }}>Grade 1</option>
                                        <option value="Grade 2" {{ old('grade_applying_for') == 'Grade 2' ? 'selected' : '' }}>Grade 2</option>
                                        <option value="Grade 3" {{ old('grade_applying_for') == 'Grade 3' ? 'selected' : '' }}>Grade 3</option>
                                        <option value="Grade 4" {{ old('grade_applying_for') == 'Grade 4' ? 'selected' : '' }}>Grade 4</option>
                                        <option value="Grade 5" {{ old('grade_applying_for') == 'Grade 5' ? 'selected' : '' }}>Grade 5</option>
                                        <option value="Grade 6" {{ old('grade_applying_for') == 'Grade 6' ? 'selected' : '' }}>Grade 6</option>
                                        <option value="Grade 7" {{ old('grade_applying_for') == 'Grade 7' ? 'selected' : '' }}>Grade 7</option>
                                    </optgroup>
                                    <optgroup label="Secondary School">
                                        <option value="Grade 8" {{ old('grade_applying_for') == 'Grade 8' ? 'selected' : '' }}>Grade 8</option>
                                        <option value="Grade 9" {{ old('grade_applying_for') == 'Grade 9' ? 'selected' : '' }}>Grade 9</option>
                                        <option value="Grade 10" {{ old('grade_applying_for') == 'Grade 10' ? 'selected' : '' }}>Grade 10</option>
                                        <option value="Grade 11" {{ old('grade_applying_for') == 'Grade 11' ? 'selected' : '' }}>Grade 11</option>
                                        <option value="Grade 12" {{ old('grade_applying_for') == 'Grade 12' ? 'selected' : '' }}>Grade 12</option>
                                    </optgroup>
                                </select>
                                @error('grade_applying_for')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="academic_year" class="block text-gray-700 font-medium mb-2">Academic Year*</label>
                                <select id="academic_year" name="academic_year"
                                        class="w-full px-4 py-2 border @error('academic_year') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                        required>
                                    <option value="">Select academic year</option>
                                    <option value="2023-2024" {{ old('academic_year') == '2023-2024' ? 'selected' : '' }}>2023-2024</option>
                                    <option value="2024-2025" {{ old('academic_year') == '2024-2025' ? 'selected' : '' }}>2024-2025</option>
                                </select>
                                @error('academic_year')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="term" class="block text-gray-700 font-medium mb-2">Starting Term*</label>
                                <select id="term" name="term"
                                        class="w-full px-4 py-2 border @error('term') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                        required>
                                    <option value="">Select term</option>
                                    <option value="Term 1" {{ old('term') == 'Term 1' ? 'selected' : '' }}>Term 1 (January)</option>
                                    <option value="Term 2" {{ old('term') == 'Term 2' ? 'selected' : '' }}>Term 2 (May)</option>
                                    <option value="Term 3" {{ old('term') == 'Term 3' ? 'selected' : '' }}>Term 3 (September)</option>
                                </select>
                                @error('term')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="previous_school" class="block text-gray-700 font-medium mb-2">Previous School (if applicable)</label>
                            <input type="text" id="previous_school" name="previous_school" value="{{ old('previous_school') }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50">
                        </div>
                    </div>

                    <!-- Parent/Guardian Information -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-primary mb-4 pb-2 border-b border-gray-200">Parent/Guardian Information</h4>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="parent_name" class="block text-gray-700 font-medium mb-2">Full Name*</label>
                                <input type="text" id="parent_name" name="parent_name" value="{{ old('parent_name') }}"
                                       class="w-full px-4 py-2 border @error('parent_name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                       required>
                                @error('parent_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="relationship" class="block text-gray-700 font-medium mb-2">Relationship to Student*</label>
                                <select id="relationship" name="relationship"
                                        class="w-full px-4 py-2 border @error('relationship') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                        required>
                                    <option value="">Select relationship</option>
                                    <option value="Father" {{ old('relationship') == 'Father' ? 'selected' : '' }}>Father</option>
                                    <option value="Mother" {{ old('relationship') == 'Mother' ? 'selected' : '' }}>Mother</option>
                                    <option value="Guardian" {{ old('relationship') == 'Guardian' ? 'selected' : '' }}>Guardian</option>
                                    <option value="Other" {{ old('relationship') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('relationship')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="parent_email" class="block text-gray-700 font-medium mb-2">Email Address*</label>
                                <input type="email" id="parent_email" name="parent_email" value="{{ old('parent_email') }}"
                                       class="w-full px-4 py-2 border @error('parent_email') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                       required>
                                @error('parent_email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="parent_phone" class="block text-gray-700 font-medium mb-2">Phone Number*</label>
                                <input type="tel" id="parent_phone" name="parent_phone" value="{{ old('parent_phone') }}"
                                       class="w-full px-4 py-2 border @error('parent_phone') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                       required>
                                @error('parent_phone')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="md:col-span-2">
                                <label for="address" class="block text-gray-700 font-medium mb-2">Residential Address*</label>
                                <textarea id="address" name="address" rows="3"
                                          class="w-full px-4 py-2 border @error('address') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                          required>{{ old('address') }}</textarea>
                                @error('address')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Documents Upload Section (Commented out - would be implemented with file upload functionality) -->
                    <!--
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-primary mb-4 pb-2 border-b border-gray-200">Required Documents</h4>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="birth_certificate" class="block text-gray-700 font-medium mb-2">Birth Certificate*</label>
                                <input type="file" id="birth_certificate" name="birth_certificate"
                                       class="w-full px-4 py-2 border @error('birth_certificate') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                       accept=".pdf,.jpg,.jpeg,.png">
                                @error('birth_certificate')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                <p class="text-gray-500 text-xs mt-1">Accept PDF, JPG, PNG (max 2MB)</p>
                            </div>

                            <div>
                                <label for="passport_photo" class="block text-gray-700 font-medium mb-2">Passport Photo*</label>
                                <input type="file" id="passport_photo" name="passport_photo"
                                       class="w-full px-4 py-2 border @error('passport_photo') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                       accept=".jpg,.jpeg,.png">
                                @error('passport_photo')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                <p class="text-gray-500 text-xs mt-1">Accept JPG, PNG (max 1MB)</p>
                            </div>

                            <div>
                                <label for="previous_reports" class="block text-gray-700 font-medium mb-2">Previous School Reports</label>
                                <input type="file" id="previous_reports" name="previous_reports"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                       accept=".pdf,.jpg,.jpeg,.png">
                                <p class="text-gray-500 text-xs mt-1">Accept PDF, JPG, PNG (max 2MB)</p>
                            </div>

                            <div>
                                <label for="immunization_records" class="block text-gray-700 font-medium mb-2">Immunization Records</label>
                                <input type="file" id="immunization_records" name="immunization_records"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                       accept=".pdf,.jpg,.jpeg,.png">
                                <p class="text-gray-500 text-xs mt-1">Accept PDF, JPG, PNG (max 2MB)</p>
                            </div>
                        </div>
                    </div>
                    -->

                    <!-- Additional Information -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-primary mb-4 pb-2 border-b border-gray-200">Additional Information</h4>

                        <div>
                            <label for="additional_info" class="block text-gray-700 font-medium mb-2">Is there any additional information you would like to share about your child?</label>
                            <textarea id="additional_info" name="additional_info" rows="4"
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50">{{ old('additional_info') }}</textarea>
                        </div>

                        <div class="mt-6">
                            <label class="flex items-start">
                                <input type="checkbox" name="special_needs" class="mt-1 mr-2" {{ old('special_needs') ? 'checked' : '' }}>
                                <span class="text-gray-700 text-sm">
                                    Does your child have any diagnosed learning differences, special educational needs, or medical conditions that the school should be aware of? If yes, please provide details in the additional information section above.
                                </span>
                            </label>
                        </div>

                        <div class="mt-4">
                            <label class="flex items-start">
                                <input type="checkbox" name="terms_agreement" class="mt-1 mr-2" required {{ old('terms_agreement') ? 'checked' : '' }}>
                                <span class="text-gray-700 text-sm">
                                    I confirm that the information provided in this application is true and accurate. I understand that providing false information may result in the cancellation of my child's admission.*
                                </span>
                            </label>
                            @error('terms_agreement')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Payment Information -->
                    <div class="mb-8">
                        <div class="bg-blue-50 border-l-4 border-blue-400 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <i class='bx bx-info-circle text-blue-400 text-xl'></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-blue-700">
                                        <span class="font-medium">Application Fee:</span> A non-refundable application fee of K250 is required to process your application. Payment details will be provided after form submission.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors font-medium">
                            Submit Application
                        </button>
                    </div>
                </form>
            </div>

            <div class="mt-8 bg-gray-50 p-6 rounded-lg">
                <h4 class="font-semibold text-primary mb-4">What's Next?</h4>
                <ol class="list-decimal pl-5 space-y-2 text-gray-600">
                    <li>After submitting your application, you will receive a confirmation email with payment instructions for the application fee.</li>
                    <li>Once we receive your application fee, our admissions team will review your application and contact you to schedule any required assessments and interviews.</li>
                    <li>Admissions decisions are typically communicated within two weeks after completing all admission requirements.</li>
                    <li>If accepted, you will receive an enrollment package with further instructions to secure your child's place at St. Francis.</li>
                </ol>

                <p class="mt-4 text-gray-600">
                    If you have any questions about the application process, please contact our Admissions Office at +260 977 123 456 or <a href="mailto:admissions@stfrancisschool.edu.zm" class="text-primary hover:underline">admissions@stfrancisschool.edu.zm</a>.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

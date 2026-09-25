@extends('layouts.app')

@section('title', 'Apply Now')

@section('content')
{{-- HERO --}}
<section style="background: linear-gradient(180deg, var(--site-sky) 0%, #fff 100%); padding-block: clamp(60px, 8vw, 100px) clamp(40px, 5vw, 70px);">
    <div class="site-wrap" style="text-align: center; max-width: 780px;">
        <span class="site-pill site-pill-sun">Admissions · Apply now</span>
        <h1 style="margin: 20px 0 18px; font-family: var(--site-display); font-weight: 800; font-size: clamp(40px, 5.5vw, 76px); line-height: 1.02; letter-spacing: -0.03em; color: var(--site-navy);">
            Begin your child's <span style="color: var(--site-red);">journey.</span>
        </h1>
        <p class="site-lead" style="margin-inline: auto; max-width: 56ch;">
            Thanks for considering St. Francis. Complete the form below to start the admission process — our team will contact you within 5 working days about next steps, including any assessment test and interview.
        </p>
    </div>
</section>

{{-- APPLICATION STEPS --}}
<section style="background: var(--site-ground); padding-block: clamp(48px, 6vw, 80px);">
    <div class="site-wrap" style="max-width: 1180px;">
        <div style="margin-bottom: 32px; max-width: 720px;">
            <span class="site-kicker">Application steps</span>
            <h2 class="site-h2" style="margin-top: 12px; max-width: 22ch; font-size: clamp(28px, 3.4vw, 42px);">
                Four steps from enquiry to enrolment.
            </h2>
        </div>
        @php
            $applySteps = [
                ['01', 'Complete form',       'Fill out the online application form below with accurate information.'],
                ['02', 'Pay application fee', 'Pay the non-refundable application fee of K50 at the office or via the fee schedule.'],
                ['03', 'Submit documents',    "Upload or bring the required documents (birth certificate, most recent report, photo)."],
                ['04', 'Await our reply',     'We contact you within 5 working days to schedule the aptitude test (if any) and next steps.'],
            ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($applySteps as $s)
                <div class="site-card">
                    <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sun); color: var(--site-navy); display: flex; align-items: center; justify-content: center; font-family: var(--site-display); font-weight: 800; font-size: 17px; margin-bottom: 14px;">{{ $s[0] }}</div>
                    <h3 class="site-h3" style="font-size: clamp(18px, 1.6vw, 22px);">{{ $s[1] }}</h3>
                    <p style="margin: 6px 0 0; color: var(--site-body); font-size: 15px; line-height: 1.55;">{{ $s[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- APPLICATION FORM --}}
<section style="background: #fff; padding-block: clamp(48px, 6vw, 96px);">
    <div class="site-wrap" style="max-width: 900px;">

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

            <div class="apply-card" style="background: #fff; border: 1px solid var(--site-line); border-radius: 20px; overflow: hidden; box-shadow: 0 12px 32px rgba(15,30,51,.05);">
                <div style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); padding: 24px 28px; color: #fff;">
                    <h3 style="margin: 0; font-family: var(--site-display); font-weight: 800; font-size: 22px; letter-spacing: -0.01em;">Student Application Form</h3>
                    <p style="margin: 6px 0 0; font-size: 14px; color: rgba(255,255,255,0.8);">Please fill out all required fields.</p>
                </div>

                <style>
                    /* Modernise every input, select, textarea inside the apply form */
                    .apply-card form { padding: 28px !important; }
                    .apply-card form h4 {
                        font-family: var(--site-display); font-weight: 800; font-size: 19px;
                        color: var(--site-navy); letter-spacing: -0.01em;
                        margin-bottom: 18px; padding-bottom: 10px; border-bottom: 1px solid var(--site-line);
                    }
                    .apply-card form label {
                        font-family: var(--site-sans); font-weight: 600; font-size: 14px;
                        color: var(--site-ink); margin-bottom: 6px; display: block;
                    }
                    .apply-card form input[type=text],
                    .apply-card form input[type=email],
                    .apply-card form input[type=tel],
                    .apply-card form input[type=number],
                    .apply-card form input[type=date],
                    .apply-card form input[type=file],
                    .apply-card form select,
                    .apply-card form textarea {
                        width: 100%; padding: 12px 14px;
                        border: 1.5px solid var(--site-line) !important; border-radius: 12px !important;
                        font: 400 15.5px var(--site-sans); color: var(--site-ink); background: #fff;
                        transition: border-color .15s, box-shadow .15s;
                    }
                    .apply-card form input:focus,
                    .apply-card form select:focus,
                    .apply-card form textarea:focus {
                        outline: none;
                        border-color: var(--site-navy-2) !important;
                        box-shadow: 0 0 0 3px rgba(31,78,121,0.12);
                    }
                    .apply-card form input.border-red-500,
                    .apply-card form select.border-red-500 {
                        border-color: var(--site-red) !important;
                    }
                    .apply-card form textarea { min-height: 120px; resize: vertical; }
                    .apply-card form .text-red-500 {
                        color: var(--site-red) !important; font-size: 12.5px !important; margin-top: 4px;
                    }
                </style>

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
                                        <span class="font-medium">Application Fee:</span> A non-refundable application fee of K50 is required to process your application. Payment details will be provided after form submission.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center" style="margin-top: 8px;">
                        <button type="submit" class="site-btn site-btn-red" style="min-width: min(260px, 100%); padding: 0 40px;">
                            Submit Application
                        </button>
                        <p style="margin: 14px 0 0; font-size: 13.5px; color: var(--site-muted);">Our admissions team will reply within 5 working days.</p>
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
                    If you have any questions about the application process, please contact our Admissions Office at <a href="tel:+260972266217" style="color: var(--site-navy-2); font-weight: 600;">+260 972 266 217</a> or <a href="mailto:stfrancisofassisi.sfa@gmail.com" style="color: var(--site-navy-2); font-weight: 600;">stfrancisofassisi.sfa@gmail.com</a>.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

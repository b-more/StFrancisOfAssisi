@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/contact-banner.jpg') }}" alt="Contact Us" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=Contact+Us'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Contact Us</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            We're here to answer your questions and welcome your feedback
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-16">
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold text-primary mb-6">Get in Touch</h2>
                <p class="text-gray-600 mb-8">
                    Whether you have a question about admissions, curriculum, school events, or just want to say hello, we're always happy to hear from you. Here are the ways you can reach us:
                </p>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1 w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                            <i class='bx bx-map text-xl text-primary'></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Our Location</h3>
                            <p class="text-gray-600 mt-1">
                                123 Education Avenue<br>
                                Lusaka, Zambia
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1 w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                            <i class='bx bx-phone text-xl text-primary'></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Phone Numbers</h3>
                            <p class="text-gray-600 mt-1">
                                Main Office: +260 978 124 541<br>
                                Admissions: +260 965 987 432
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1 w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                            <i class='bx bx-envelope text-xl text-primary'></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Email Addresses</h3>
                            <p class="text-gray-600 mt-1">
                                General Inquiries: info@stfrancisschool.edu.zm<br>
                                Admissions: admissions@stfrancisschool.edu.zm
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1 w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                            <i class='bx bx-time text-xl text-primary'></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Office Hours</h3>
                            <p class="text-gray-600 mt-1">
                                Monday - Friday: 7:30 AM - 4:30 PM<br>
                                Saturday: 8:00 AM - 12:00 PM (Admissions Office)<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-12">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                            <i class='bx bxl-facebook text-xl'></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                            <i class='bx bxl-twitter text-xl'></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                            <i class='bx bxl-instagram text-xl'></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                            <i class='bx bxl-youtube text-xl'></i>
                        </a>
                    </div>
                </div>

                <!-- Department Contact Info -->
                <div class="mt-12 bg-gray-50 p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold text-primary mb-4">Department Contacts</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-medium text-gray-900">Academic Office</h4>
                            <p class="text-gray-600 text-sm">academics@stfrancisschool.edu.zm | +260 963 222 333</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900">Finance Office</h4>
                            <p class="text-gray-600 text-sm">finance@stfrancisschool.edu.zm | +260 963 444 555</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900">Student Affairs</h4>
                            <p class="text-gray-600 text-sm">studentaffairs@stfrancisschool.edu.zm | +260 963 666 777</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <div class="bg-white p-8 rounded-lg shadow-sm">
                    <h2 class="text-3xl font-bold text-primary mb-6">Send Us a Message</h2>

                    @if(session('success'))
                        <div id="successNotification" class="mb-6 flex items-center bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded">
                            <i class='bx bx-check-circle text-2xl mr-2'></i>
                            <div>
                                <p class="font-medium">{{ session('success') }}</p>
                                <p class="text-sm">We'll respond to your message as soon as possible.</p>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                            <input type="text"
                                id="name"
                                name="name"
                                placeholder="Enter your full name"
                                value="{{ old('name') }}"
                                required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('name') border-red-500 @enderror">
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                            <input type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email address"
                                value="{{ old('email') }}"
                                required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel"
                                id="phone"
                                name="phone"
                                placeholder="260 9XXXXXXXX"
                                value="{{ old('phone') }}"
                                oninput="
                                    let value = this.value.replace(/\D/g, '');
                                    if (!value.startsWith('260')) {
                                        value = '260' + value;
                                    }
                                    this.value = value.slice(0, 12);
                                "
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('phone') border-red-500 @enderror">
                            @error('phone')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="inquiry_type" class="block text-sm font-medium text-gray-700 mb-1">Inquiry Type *</label>
                            <select id="inquiry_type"
                                    name="inquiry_type"
                                    required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('inquiry_type') border-red-500 @enderror">
                                <option value="" disabled {{ old('inquiry_type') ? '' : 'selected' }}>Select Inquiry Type</option>
                                <option value="general" {{ old('inquiry_type') == 'general' ? 'selected' : '' }}>General Information</option>
                                <option value="admission" {{ old('inquiry_type') == 'admission' || request()->has('tour') ? 'selected' : '' }}>Admission Inquiry</option>
                                <option value="tour" {{ old('inquiry_type') == 'tour' ? 'selected' : '' }}>Campus Tour Request</option>
                                <option value="fees" {{ old('inquiry_type') == 'fees' ? 'selected' : '' }}>Fee Information</option>
                                <option value="academic" {{ old('inquiry_type') == 'academic' ? 'selected' : '' }}>Academic Program</option>
                                <option value="other" {{ old('inquiry_type') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('inquiry_type')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message *</label>
                            <textarea id="message"
                                    name="message"
                                    placeholder="Enter your message here..."
                                    rows="5"
                                    required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                                class="w-full bg-primary text-white py-3 rounded-lg hover:bg-primary/90 transition-all font-medium flex items-center justify-center">
                            <i class='bx bx-send mr-2'></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Map -->
<section class="py-0">
    <div class="w-full h-96">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61534.401144543916!2d28.254863713475483!3d-15.396352839259816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19408b9a7cfcb975%3A0x63a6db4f7692631!2sLusaka%2C%20Zambia!5e0!3m2!1sen!2sus!4v1655478911063!5m2!1sen!2sus"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">Frequently Asked Questions</h2>

            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">What are the school hours?</h3>
                        <p class="mt-2 text-gray-600">
                            Our school day runs from 7:30 AM to 3:30 PM for all grade levels. The school gates open at 7:00 AM, and supervision is provided for students who arrive early.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Is transportation provided?</h3>
                        <p class="mt-2 text-gray-600">
                            Yes, we offer transportation services for students living within Lusaka. Additional fees apply for this service. Please contact our office for routes and pricing information.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">How can I schedule a campus tour?</h3>
                        <p class="mt-2 text-gray-600">
                            You can schedule a campus tour by filling out the contact form on this page and selecting "Campus Tour Request" as your inquiry type. Alternatively, you can call our admissions office directly to arrange a visit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Subscribe to Our Newsletter</h2>
        <p class="max-w-2xl mx-auto mb-8">
            Stay updated with the latest news, events, and announcements from St. Francis of Assisi Private School.
        </p>
        <div class="max-w-md mx-auto">
            <form action="#" method="POST" class="flex flex-col sm:flex-row gap-2">
                <input type="email"
                       placeholder="Your email address"
                       class="flex-grow px-4 py-3 rounded-lg focus:outline-none"
                       required>
                <button type="submit" class="bg-secondary text-white px-6 py-3 rounded-lg hover:bg-secondary/90 transition-colors font-medium">
                    Subscribe
                </button>
            </form>
            <p class="text-sm mt-4 text-white/60">
                We respect your privacy and will never share your information.
            </p>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Auto-hide success notification
    document.addEventListener('DOMContentLoaded', function() {
        const notification = document.getElementById('successNotification');
        if (notification) {
            setTimeout(function() {
                notification.style.opacity = '0';
                notification.style.transform = 'translateY(-100%)';
                setTimeout(function() {
                    notification.style.display = 'none';
                }, 300);
            }, 5000); // Will hide after 5 seconds
        }

        // Auto-select tour option if tour parameter is present
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('tour')) {
            const inquiryTypeSelect = document.getElementById('inquiry_type');
            if (inquiryTypeSelect) {
                Array.from(inquiryTypeSelect.options).forEach(option => {
                    if (option.value === 'tour') option.selected = true;
                });
            }

            const messageField = document.getElementById('message');
            if (messageField && !messageField.value) {
                messageField.value = "I'm interested in scheduling a campus tour for my child. Please let me know the available dates and times.";
            }
        }

        // Auto-select department if dept parameter is present
        if (urlParams.has('dept')) {
            const dept = urlParams.get('dept');
            const inquiryTypeSelect = document.getElementById('inquiry_type');
            if (inquiryTypeSelect) {
                Array.from(inquiryTypeSelect.options).forEach(option => {
                    if (option.value === dept) option.selected = true;
                });
            }
        }
    });
</script>
@endpush
@endsection

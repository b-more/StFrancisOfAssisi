@extends('layouts.app')

@section('title', 'Contact')
@section('description', 'St. Francis of Assisi Private School. Plot 1310/4 East Kamenza, Chililabombwe. Phone +260 972 266 217. Email info@stfrancisofassisizm.com.')

@section('content')
<!-- Hero -->
<section class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <p class="text-secondary tracking-widest uppercase text-sm font-semibold mb-3">Contact</p>
        <h1 class="font-display text-5xl md:text-6xl font-semibold leading-tight max-w-3xl">Get in touch.</h1>
        <p class="mt-5 text-white/90 text-lg max-w-3xl">Prospective parents, current parents, prospective staff, partners, community, we welcome enquiries from all of you.</p>
    </div>
</section>

<!-- Contact Details + Form -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12">

        <!-- Left: Details -->
        <div>
            <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Reach the School</p>
            <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-8">The fastest way is by phone, during school hours.</h2>

            <div class="space-y-5">
                <div class="flex items-start gap-4">
                    <div class="flex-none w-12 h-12 rounded-md bg-primary text-white flex items-center justify-center text-2xl"><i class="bx bxs-map"></i></div>
                    <div>
                        <p class="text-xs uppercase tracking-widest text-accent font-semibold">Address</p>
                        <p class="text-gray-800">St. Francis of Assisi Private School<br>Plot 1310/4, East Kamenza<br>Chililabombwe, Copperbelt Province<br>Zambia</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="flex-none w-12 h-12 rounded-md bg-primary text-white flex items-center justify-center text-2xl"><i class="bx bxs-phone"></i></div>
                    <div>
                        <p class="text-xs uppercase tracking-widest text-accent font-semibold">Telephone</p>
                        <p class="text-gray-800"><a href="tel:+260972266217" class="hover:text-accent">+260 972 266 217</a></p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="flex-none w-12 h-12 rounded-md bg-primary text-white flex items-center justify-center text-2xl"><i class="bx bxs-envelope"></i></div>
                    <div>
                        <p class="text-xs uppercase tracking-widest text-accent font-semibold">Email</p>
                        <p class="text-gray-800"><a href="mailto:info@stfrancisofassisizm.com" class="hover:text-accent">info@stfrancisofassisizm.com</a></p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="flex-none w-12 h-12 rounded-md bg-primary text-white flex items-center justify-center text-2xl"><i class="bx bxs-time"></i></div>
                    <div>
                        <p class="text-xs uppercase tracking-widest text-accent font-semibold">Office Hours</p>
                        <p class="text-gray-800">Monday, Friday · 7:30 AM, 4:30 PM<br><span class="text-sm text-gray-600">Closed on weekends and public holidays</span></p>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="mt-8">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-3">Find Us</p>
                <div class="aspect-[16/10] bg-gray-100 overflow-hidden border">
                    <iframe
                        src="https://www.google.com/maps?q=Plot+1310%2F4+East+Kamenza+Chililabombwe+Zambia&output=embed"
                        width="100%" height="100%" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <!-- Right: Form -->
        <div>
            <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Send Us a Message</p>
            <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-8">We respond within one working day.</h2>

            @if(session('success'))
                <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.submit') }}" class="space-y-5">
                @csrf
                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full name</label>
                        <input id="name" name="name" type="text" required class="w-full border-gray-300 focus:border-primary focus:ring-primary" autocomplete="name">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                        <input id="phone" name="phone" type="tel" class="w-full border-gray-300 focus:border-primary focus:ring-primary" autocomplete="tel">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input id="email" name="email" type="email" required class="w-full border-gray-300 focus:border-primary focus:ring-primary" autocomplete="email">
                </div>
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                    <select id="subject" name="subject" class="w-full border-gray-300 focus:border-primary focus:ring-primary">
                        <option>Admissions enquiry</option>
                        <option>Book a school tour</option>
                        <option>Fees &amp; financial info</option>
                        <option>Transport</option>
                        <option>Employment</option>
                        <option>General enquiry</option>
                        <option>Other</option>
                    </select>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea id="message" name="message" rows="5" required class="w-full border-gray-300 focus:border-primary focus:ring-primary"></textarea>
                </div>
                <button type="submit" class="w-full bg-accent text-white px-7 py-3 rounded-md font-semibold hover:bg-accent-dark transition shadow-lg">Send Message</button>
                <p class="text-xs text-gray-500">We respect your privacy. Your details are not shared.</p>
            </form>
        </div>
    </div>
</section>

<!-- Department Contacts -->
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Department Contacts</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-8">Reach the right office directly.</h2>
        <div class="bg-white shadow-sm overflow-hidden">
            <table class="w-full text-sm">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="text-left py-3 px-4 font-semibold">Office</th>
                        <th class="text-left py-3 px-4 font-semibold">When to Contact</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr><td class="py-3 px-4 font-semibold text-primary">Admissions</td><td class="py-3 px-4 text-gray-700">New applications, school tours, prospectus requests</td></tr>
                    <tr><td class="py-3 px-4 font-semibold text-primary">Accountant</td><td class="py-3 px-4 text-gray-700">Fees, statements, payment plans</td></tr>
                    <tr><td class="py-3 px-4 font-semibold text-primary">Head Teacher · Primary</td><td class="py-3 px-4 text-gray-700">Grades 1-7 academic matters, ECE</td></tr>
                    <tr><td class="py-3 px-4 font-semibold text-primary">Head Teacher · Secondary</td><td class="py-3 px-4 text-gray-700">Forms 1-5 academic matters</td></tr>
                    <tr><td class="py-3 px-4 font-semibold text-primary">Office of the Principal</td><td class="py-3 px-4 text-gray-700">Strategic, governance, and serious matters</td></tr>
                    <tr><td class="py-3 px-4 font-semibold text-primary">Transport</td><td class="py-3 px-4 text-gray-700">Bus routes, schedules, bookings</td></tr>
                </tbody>
            </table>
        </div>
        <p class="mt-4 text-sm text-gray-600">All offices route through <a href="tel:+260972266217" class="text-accent hover:underline">+260 972 266 217</a> · <a href="mailto:info@stfrancisofassisizm.com" class="text-accent hover:underline">info@stfrancisofassisizm.com</a></p>
    </div>
</section>

<!-- Connect with us -->
<section class="py-12 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Connect With Us</p>
        <div class="flex justify-center gap-4 mt-4">
            <a href="https://www.facebook.com/profile.php?id=100086224041919" target="_blank" rel="noopener" class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center text-2xl hover:bg-accent transition"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/stfrancisofassisi/" target="_blank" rel="noopener" class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center text-2xl hover:bg-accent transition"><i class="bx bxl-instagram"></i></a>
            <a href="https://wa.me/260972266217" target="_blank" rel="noopener" class="w-12 h-12 rounded-full bg-green-500 text-white flex items-center justify-center text-2xl hover:bg-green-600 transition"><i class="bx bxl-whatsapp"></i></a>
        </div>
    </div>
</section>
@endsection

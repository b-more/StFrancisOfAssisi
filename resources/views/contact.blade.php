@extends('layouts.app')

@section('title', 'Contact')
@section('description', 'St. Francis of Assisi Private School. Plot 1310/4 East Kamenza, Chililabombwe. Phone +260 972 266 217. Email info@stfrancisofassisizm.com.')

@section('content')
<!-- Hero — navy-forward -->
<section class="navy-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-end">
            <div class="lg:col-span-8">
                <div class="numeral on-dark mb-4"><span class="n">V</span><span class="r"></span></div>
                <p class="text-secondary tracking-[.28em] uppercase text-xs font-semibold mb-3">Get in touch</p>
                <h1 class="font-display text-5xl md:text-7xl font-semibold leading-[1.03] tracking-tight">Talk to us.</h1>
            </div>
            <div class="lg:col-span-4">
                <p class="font-display text-lg text-white/85 leading-[1.55]">
                    Prospective parents, current parents, staff, partners — we welcome enquiries from all of you. During school hours the phone is fastest; outside hours, we reply within one working day.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Motto -->
<div class="ribbon">
    <span>For God</span><span class="cross">✠</span><span>For Country</span><span class="cross">✠</span><span>For Every Child</span>
</div>

<!-- I. Direct contact actions -->
<section class="py-20 md:py-24 bg-paper">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="lg:col-span-5">
                <div class="numeral mb-4"><span class="n">I</span><span class="r"></span></div>
                <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">Four ways to reach us</p>
                <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight" style="max-width: 20ch;">Call, WhatsApp, email — or visit.</h2>
                <p class="font-display text-lg text-gray-700 leading-relaxed mt-5" style="max-width: 40ch;">
                    During school hours the phone is fastest. Outside hours, email and we'll reply within one working day.
                </p>
            </div>
            <div class="lg:col-span-7 space-y-4">
                <a href="tel:+260972266217" class="flex items-center gap-5 p-6 bg-paper-warm border-l-4 border-primary hover:shadow-lg transition group">
                    <div class="flex-none w-14 h-14 bg-primary text-white flex items-center justify-center text-3xl"><i class="bx bxs-phone"></i></div>
                    <div class="flex-1">
                        <p class="text-[11px] uppercase tracking-[.22em] text-muted font-semibold mb-1">Call us</p>
                        <p class="font-display text-2xl font-semibold text-primary leading-tight group-hover:text-accent">+260 972 266 217</p>
                        <p class="font-display italic text-muted text-sm">Mon – Fri · 7:30 AM – 4:30 PM</p>
                    </div>
                </a>

                <a href="https://wa.me/260972266217" target="_blank" rel="noopener" class="flex items-center gap-5 p-6 bg-paper-warm border-l-4 border-green-500 hover:shadow-lg transition group">
                    <div class="flex-none w-14 h-14 bg-green-500 text-white flex items-center justify-center text-3xl"><i class="bx bxl-whatsapp"></i></div>
                    <div class="flex-1">
                        <p class="text-[11px] uppercase tracking-[.22em] text-muted font-semibold mb-1">WhatsApp</p>
                        <p class="font-display text-2xl font-semibold text-primary leading-tight group-hover:text-green-700">Message the school office</p>
                        <p class="font-display italic text-muted text-sm">+260 972 266 217 · reply usually within the hour</p>
                    </div>
                </a>

                <a href="mailto:info@stfrancisofassisizm.com?subject=Enquiry%20from%20school%20website" class="flex items-center gap-5 p-6 bg-paper-warm border-l-4 border-primary hover:shadow-lg transition group">
                    <div class="flex-none w-14 h-14 bg-primary text-white flex items-center justify-center text-3xl"><i class="bx bxs-envelope"></i></div>
                    <div class="flex-1">
                        <p class="text-[11px] uppercase tracking-[.22em] text-muted font-semibold mb-1">Email us</p>
                        <p class="font-display text-2xl font-semibold text-primary leading-tight group-hover:text-accent break-all">info@stfrancisofassisizm.com</p>
                        <p class="font-display italic text-muted text-sm">Replies within one school day</p>
                    </div>
                </a>

                <a href="https://www.google.com/maps?q=Plot+1310%2F4+East+Kamenza+Chililabombwe+Zambia" target="_blank" rel="noopener" class="flex items-center gap-5 p-6 bg-paper-warm border-l-4 border-secondary hover:shadow-lg transition group">
                    <div class="flex-none w-14 h-14 bg-secondary text-primary flex items-center justify-center text-3xl"><i class="bx bxs-map"></i></div>
                    <div class="flex-1">
                        <p class="text-[11px] uppercase tracking-[.22em] text-muted font-semibold mb-1">Visit campus</p>
                        <p class="font-display text-2xl font-semibold text-primary leading-tight group-hover:text-accent">Plot 1310/4, East Kamenza</p>
                        <p class="font-display italic text-muted text-sm">Chililabombwe, Zambia · open in Google Maps</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- II. Office hours + map -->
<section class="py-20 md:py-24 bg-paper-deep">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
            <div class="lg:col-span-5">
                <div class="numeral mb-4"><span class="n">II</span><span class="r"></span></div>
                <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">Office hours</p>
                <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight" style="max-width: 20ch;">When you can find us on campus.</h2>
                <div class="mt-8">
                    <div class="grid grid-cols-12 gap-4 py-4 border-b border-rule items-baseline">
                        <span class="col-span-6 font-display text-lg text-gray-800">Monday – Friday</span>
                        <span class="col-span-6 text-right font-display text-lg font-semibold text-primary">07:30 – 16:30</span>
                    </div>
                    <div class="grid grid-cols-12 gap-4 py-4 border-b border-rule items-baseline">
                        <span class="col-span-6 font-display text-lg text-gray-800">Office (admissions)</span>
                        <span class="col-span-6 text-right font-display text-lg font-semibold text-primary">08:00 – 17:00</span>
                    </div>
                    <div class="grid grid-cols-12 gap-4 py-4 border-b border-rule items-baseline">
                        <span class="col-span-6 font-display text-lg text-gray-800">Weekends &amp; holidays</span>
                        <span class="col-span-6 text-right font-display italic text-lg text-muted">Closed · by appointment</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-7">
                <div class="border border-rule overflow-hidden bg-white" style="aspect-ratio: 4/3;">
                    <iframe
                        src="https://www.google.com/maps?q=Plot+1310%2F4+East+Kamenza+Chililabombwe+Zambia&output=embed"
                        width="100%" height="100%" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p class="mt-3 font-display italic text-muted text-center">Plot 1310/4 East Kamenza · Chililabombwe · Zambia</p>
            </div>
        </div>
    </div>
</section>

<!-- III. Department contacts — navy anchor -->
<section class="py-20 md:py-24 bg-primary-dark text-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <div class="numeral on-dark mb-4"><span class="n">III</span><span class="r"></span></div>
            <p class="text-secondary uppercase tracking-[.28em] text-xs font-semibold mb-3">Department contacts</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold leading-tight" style="max-width: 22ch;">Reach the right office directly.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">
            <div class="border-l-2 border-secondary pl-5 py-2">
                <h4 class="font-display text-xl font-semibold mb-1">Admissions</h4>
                <p class="font-display text-white/80 leading-relaxed">New applications, school tours, prospectus requests.</p>
            </div>
            <div class="border-l-2 border-secondary pl-5 py-2">
                <h4 class="font-display text-xl font-semibold mb-1">Accountant</h4>
                <p class="font-display text-white/80 leading-relaxed">Fees, statements, payment plans.</p>
            </div>
            <div class="border-l-2 border-secondary pl-5 py-2">
                <h4 class="font-display text-xl font-semibold mb-1">Head Teacher · Primary</h4>
                <p class="font-display text-white/80 leading-relaxed">Grades 1 – 7 academic matters and ECE.</p>
            </div>
            <div class="border-l-2 border-secondary pl-5 py-2">
                <h4 class="font-display text-xl font-semibold mb-1">Head Teacher · Secondary</h4>
                <p class="font-display text-white/80 leading-relaxed">Grades 8 – 12 academic matters.</p>
            </div>
            <div class="border-l-2 border-secondary pl-5 py-2">
                <h4 class="font-display text-xl font-semibold mb-1">Office of the Principal</h4>
                <p class="font-display text-white/80 leading-relaxed">Strategic, governance, and serious matters.</p>
            </div>
            <div class="border-l-2 border-secondary pl-5 py-2">
                <h4 class="font-display text-xl font-semibold mb-1">Transport</h4>
                <p class="font-display text-white/80 leading-relaxed">Bus routes, schedules, bookings.</p>
            </div>
        </div>
        <p class="mt-10 font-display italic text-white/70">
            All offices route through <a href="tel:+260972266217" class="text-secondary hover:underline">+260 972 266 217</a> · <a href="mailto:info@stfrancisofassisizm.com" class="text-secondary hover:underline">info@stfrancisofassisizm.com</a>
        </p>
    </div>
</section>

<!-- IV. Connect -->
<section class="py-16 bg-paper">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="numeral mb-4" style="justify-content: center;"><span class="n">IV</span><span class="r"></span></div>
        <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">Connect with us</p>
        <div class="flex justify-center gap-4 mt-6">
            <a href="https://www.facebook.com/profile.php?id=100086224041919" target="_blank" rel="noopener" class="w-14 h-14 rounded-full bg-primary text-white flex items-center justify-center text-2xl hover:bg-primary-dark transition"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/stfrancisofassisi/" target="_blank" rel="noopener" class="w-14 h-14 rounded-full bg-primary text-white flex items-center justify-center text-2xl hover:bg-primary-dark transition"><i class="bx bxl-instagram"></i></a>
            <a href="https://wa.me/260972266217" target="_blank" rel="noopener" class="w-14 h-14 rounded-full bg-green-500 text-white flex items-center justify-center text-2xl hover:bg-green-600 transition"><i class="bx bxl-whatsapp"></i></a>
        </div>
    </div>
</section>
@endsection

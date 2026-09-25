@extends('layouts.app')

@section('title', 'Contact')
@section('description', 'St. Francis of Assisi Private School. Plot 1310/4 East Kamenza, Chililabombwe. Phone +260 972 266 217. Email stfrancisofassisi.sfa@gmail.com.')

@section('content')

{{-- HERO --}}
<section style="background: linear-gradient(180deg, var(--site-sky) 0%, #fff 100%); padding-block: clamp(60px, 8vw, 100px) clamp(40px, 6vw, 70px);">
    <div class="site-wrap">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-end">
            <div class="lg:col-span-8">
                <span class="site-pill site-pill-sun">Get in touch</span>
                <h1 style="margin: 20px 0 12px; font-family: var(--site-display); font-weight: 800; font-size: clamp(48px, 6.5vw, 96px); line-height: 1.0; letter-spacing: -0.03em; color: var(--site-navy);">
                    Talk to <span style="color: var(--site-red);">us.</span>
                </h1>
            </div>
            <div class="lg:col-span-4">
                <p class="site-lead" style="max-width: 44ch;">
                    Prospective parents, current parents, staff, partners — we welcome enquiries from all of you. During school hours the phone is fastest; outside hours, we reply within one working day.
                </p>
            </div>
        </div>
    </div>
</section>

<div style="background: var(--site-navy-deep); color: var(--site-sun); padding: 18px 20px; text-align: center;">
    <span style="font-family: var(--site-display); letter-spacing: .18em; text-transform: uppercase; font-size: clamp(11px, 1.2vw, 15px); font-weight: 700;">
        For God · For Country · For Every Child
    </span>
</div>

{{-- FOUR WAYS TO REACH US --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 1180px;">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="lg:col-span-4">
                <span class="site-kicker">Four ways to reach us</span>
                <h2 class="site-h2" style="margin-top: 12px; max-width: 15ch;">Call, WhatsApp, email — or visit.</h2>
                <p class="site-lead" style="margin-top: 20px; max-width: 40ch;">
                    During school hours the phone is fastest. Outside hours, email and we'll reply within one working day.
                </p>
            </div>
            <div class="lg:col-span-8" style="display: flex; flex-direction: column; gap: 14px;">
                @php
                    $channels = [
                        ['tel:+260972266217',                                     'bxs-phone',    'var(--site-navy)',  'Call us',       '+260 972 266 217',                     'Mon – Fri · 07:30 – 16:30'],
                        ['https://wa.me/260972266217',                            'bxl-whatsapp', '#25D366',           'WhatsApp',      'Message the school office',            '+260 972 266 217 · reply usually within the hour'],
                        ['mailto:stfrancisofassisi.sfa@gmail.com?subject=Enquiry%20from%20school%20website', 'bxs-envelope', 'var(--site-red)', 'Email us', 'stfrancisofassisi.sfa@gmail.com',  'Replies within one school day'],
                        ['https://www.google.com/maps?q=Plot+1310%2F4+East+Kamenza+Chililabombwe+Zambia',   'bxs-map',      'var(--site-sun-ink)','Visit campus', 'Plot 1310/4, East Kamenza', 'Chililabombwe, Zambia · open in Google Maps'],
                    ];
                @endphp
                @foreach($channels as $c)
                    <a href="{{ $c[0] }}" @if(str_starts_with($c[0], 'http')) target="_blank" rel="noopener" @endif class="site-card" style="text-decoration: none; color: inherit; display: flex; gap: 20px; align-items: center;">
                        <div style="flex-shrink: 0; width: 54px; height: 54px; border-radius: 14px; background: {{ $c[2] }}; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 28px;">
                            <i class='bx {{ $c[1] }}'></i>
                        </div>
                        <div style="min-width: 0;">
                            <span class="site-kicker">{{ $c[3] }}</span>
                            <div style="margin: 4px 0 2px; font-family: var(--site-display); font-weight: 700; font-size: clamp(19px, 1.6vw, 22px); letter-spacing: -0.01em; color: var(--site-navy); word-break: break-word;">{{ $c[4] }}</div>
                            <div style="font-size: 13.5px; color: var(--site-muted); font-style: italic;">{{ $c[5] }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- OFFICE HOURS + MAP --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap" style="max-width: 1180px;">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
            <div class="lg:col-span-5">
                <span class="site-kicker">Office hours</span>
                <h2 class="site-h2" style="margin-top: 12px; max-width: 18ch;">When you can find us on campus.</h2>
                <div style="margin-top: 32px;">
                    @php
                        $hrs = [
                            ['Monday – Friday',       '07:30 – 16:30'],
                            ['Office (admissions)',   '08:00 – 17:00'],
                            ['Weekends &amp; holidays','Closed · by appointment'],
                        ];
                    @endphp
                    @foreach($hrs as $h)
                        <div style="display: grid; grid-template-columns: 1fr auto; gap: 16px; padding: 16px 0; border-bottom: 1px solid var(--site-line); align-items: baseline;">
                            <span style="font-size: 16.5px; color: var(--site-ink);">{!! $h[0] !!}</span>
                            <span style="font-family: var(--site-display); font-weight: 700; font-size: 17px; color: var(--site-navy); letter-spacing: -0.005em;">{{ $h[1] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="lg:col-span-7">
                <div style="border-radius: 24px; overflow: hidden; box-shadow: 0 24px 48px -20px rgba(15,30,51,.25); aspect-ratio: 4/3; background: var(--site-sky-2);">
                    <iframe src="https://www.google.com/maps?q=Plot+1310%2F4+East+Kamenza+Chililabombwe+Zambia&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p style="margin: 12px 0 0; font-size: 14px; color: var(--site-muted); font-style: italic; text-align: center;">Plot 1310/4 East Kamenza · Chililabombwe · Zambia</p>
            </div>
        </div>
    </div>
</section>

{{-- DEPARTMENT CONTACTS — navy anchor --}}
<section class="site-section" style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color: #fff; position: relative; overflow: hidden;">
    <div style="position:absolute; inset:0; opacity:0.08; background-image: radial-gradient(circle at 15% 20%, var(--site-sun) 1px, transparent 1px), radial-gradient(circle at 80% 70%, var(--site-sun) 1px, transparent 1px); background-size:100px 100px, 140px 140px; pointer-events:none;"></div>
    <div class="site-wrap" style="position: relative;">
        <div style="margin-bottom: 48px; max-width: 720px;">
            <span class="site-kicker" style="color: var(--site-sun);">Department contacts</span>
            <h2 style="margin-top: 12px; font-family: var(--site-display); font-weight: 800; font-size: clamp(34px, 4.2vw, 56px); line-height: 1.02; letter-spacing: -0.03em; color:#fff; max-width: 22ch;">
                Reach the right office directly.
            </h2>
        </div>
        @php
            $depts = [
                ['Admissions',              'New applications, school tours, prospectus requests.'],
                ['Accountant',              'Fees, statements, payment plans.'],
                ['Head Teacher · Primary',  'Grades 1 – 7 academic matters and ECE.'],
                ['Head Teacher · Secondary','Grades 8 – 12 academic matters.'],
                ['Office of the Principal', 'Strategic, governance, and serious matters.'],
                ['Transport',               'Bus routes, schedules, bookings.'],
            ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-4">
            @foreach($depts as $d)
                <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,200,61,0.28); border-radius: 16px; padding: 18px 22px;">
                    <h4 style="margin: 0 0 4px; font-family: var(--site-display); font-weight: 700; font-size: 19px; color: #fff; letter-spacing: -0.01em;">{{ $d[0] }}</h4>
                    <p style="margin: 0; font-size: 15px; color: rgba(255,255,255,0.78); line-height: 1.5;">{{ $d[1] }}</p>
                </div>
            @endforeach
        </div>
        <p style="margin: 32px 0 0; font-style: italic; color: rgba(255,255,255,0.7); font-size: 14.5px;">
            All offices route through <a href="tel:+260972266217" style="color: var(--site-sun); font-weight: 700;">+260 972 266 217</a> · <a href="mailto:stfrancisofassisi.sfa@gmail.com" style="color: var(--site-sun); font-weight: 700;">stfrancisofassisi.sfa@gmail.com</a>
        </p>
    </div>
</section>

{{-- CONNECT --}}
<section style="background: #fff; padding-block: clamp(48px, 6vw, 80px); text-align: center;">
    <div class="site-wrap" style="max-width: 640px;">
        <span class="site-kicker">Connect with us</span>
        <div style="margin-top: 24px; display: flex; justify-content: center; gap: 14px;">
            <a href="https://www.facebook.com/profile.php?id=100086224041919" target="_blank" rel="noopener" style="width: 56px; height: 56px; border-radius: 999px; background: var(--site-navy); color:#fff; display: flex; align-items: center; justify-content: center; font-size: 24px; text-decoration: none; transition: transform .18s, background .18s;" onmouseover="this.style.transform='translateY(-2px)'; this.style.background='var(--site-navy-2)';" onmouseout="this.style.transform=''; this.style.background='var(--site-navy)';"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/stfrancisofassisi/" target="_blank" rel="noopener" style="width: 56px; height: 56px; border-radius: 999px; background: var(--site-navy); color:#fff; display: flex; align-items: center; justify-content: center; font-size: 24px; text-decoration: none; transition: transform .18s, background .18s;" onmouseover="this.style.transform='translateY(-2px)'; this.style.background='var(--site-navy-2)';" onmouseout="this.style.transform=''; this.style.background='var(--site-navy)';"><i class="bx bxl-instagram"></i></a>
            <a href="https://wa.me/260972266217" target="_blank" rel="noopener" style="width: 56px; height: 56px; border-radius: 999px; background: #25D366; color:#fff; display: flex; align-items: center; justify-content: center; font-size: 24px; text-decoration: none; transition: transform .18s;" onmouseover="this.style.transform='translateY(-2px)';" onmouseout="this.style.transform='';"><i class="bx bxl-whatsapp"></i></a>
        </div>
    </div>
</section>

@endsection

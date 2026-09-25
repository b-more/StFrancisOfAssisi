@extends('layouts.app')

@section('title', 'Services')
@section('description', 'The services and facilities the school offers alongside the classroom: clinic, transport, library, ICT lab, sports, cafeteria, pastoral care, and security.')

@section('content')

{{-- HERO --}}
<section style="background: linear-gradient(180deg, var(--site-sky) 0%, #fff 100%); padding-block: clamp(60px, 8vw, 100px) clamp(40px, 5vw, 70px);">
    <div class="site-wrap" style="max-width: 900px;">
        <span class="site-pill site-pill-sun">Services</span>
        <h1 style="margin: 20px 0 18px; font-family: var(--site-display); font-weight: 800; font-size: clamp(40px, 5.5vw, 76px); line-height: 1.02; letter-spacing: -0.03em; color: var(--site-navy);">
            More than a <span style="color: var(--site-red);">school.</span>
        </h1>
        <p class="site-lead" style="max-width: 60ch;">
            The support services and facilities that surround the classroom — so every learner spends their day where they should: learning.
        </p>
    </div>
</section>

<div style="background: var(--site-navy-deep); color: var(--site-sun); padding: 18px 20px; text-align: center;">
    <span style="font-family: var(--site-display); letter-spacing: .18em; text-transform: uppercase; font-size: clamp(11px, 1.2vw, 15px); font-weight: 700;">
        For God · For Country · For Every Child
    </span>
</div>

{{-- SERVICES GRID --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap">
        <div style="margin-bottom: 48px; max-width: 780px;">
            <span class="site-kicker">Around the classroom</span>
            <h2 class="site-h2" style="margin-top: 12px; max-width: 22ch;">Every service supports the same goal.</h2>
        </div>

        @php
            $services = [
                ['bxs-plus-medical',    'School clinic',            'A digital sick-bay register run by our on-site clinician. Every visit is recorded, medication tracked, and parents notified when their child needs to go home. Confidential and always staffed during school hours.'],
                ['bxs-bus',             'Transport',                'Four school buses on established routes around Chililabombwe. Bookable termly, invoiced separately from tuition, safety-checked by the school office.'],
                ['bxs-book-open',       'Library',                  'A quiet, ordered study space for both Primary and Secondary learners, stocked with core-syllabus and enrichment titles including our Peter and Jane graded readers for the PRWC.'],
                ['bxs-devices',         'ICT laboratory',           "Modern computer laboratory that supports Computer Studies at every grade and the Grade-12 ICT syllabus. Also the venue for the school's Digital Transformation training programme."],
                ['bxs-basketball',      'Sports &amp; fitness',    'Structured year-round sport through our MoU with Chiko Private School — football, netball, athletics, plus inter-house competitions and district participation.'],
                ['bxs-restaurant',      'Cafeteria',                'A supervised eating space with cooked meals available at reasonable prices. Parents can also pack lunches; either way, every learner eats.'],
                ['bxs-heart',           'Pastoral care',            'Section-level pastoral routines: morning devotions, class-teacher check-ins, and a chain of care that runs from class teacher to section head to Principal for any concern that needs attention.'],
                ['bxs-shield-alt-2',    'Security',                 'Controlled campus access during school hours, trained ground staff, and a visitor sign-in procedure at the school office.'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($services as $s)
                <div class="site-card">
                    <div style="width: 52px; height: 52px; border-radius: 14px; background: var(--site-sun-soft); color: var(--site-sun-ink); display: flex; align-items: center; justify-content: center; font-size: 26px; margin-bottom: 16px;">
                        <i class='bx {{ $s[0] }}'></i>
                    </div>
                    <h3 class="site-h3" style="font-size: clamp(18px, 1.6vw, 22px);">{!! $s[1] !!}</h3>
                    <p style="margin: 6px 0 0; color: var(--site-body); font-size: 15px; line-height: 1.55;">{!! $s[2] !!}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="site-section" style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color: #fff; text-align: center;">
    <div class="site-wrap" style="max-width: 780px;">
        <span class="site-kicker" style="color: var(--site-sun);">Want to know more?</span>
        <h2 style="margin: 12px 0 20px; font-family: var(--site-display); font-weight: 800; font-size: clamp(30px, 4vw, 48px); line-height: 1.05; letter-spacing: -0.03em; color: #fff;">
            Book a tour and see for yourself.
        </h2>
        <p style="margin: 0 auto; max-width: 55ch; font-size: 17px; line-height: 1.6; color: rgba(255,255,255,0.85);">
            Come and meet the clinician, ride a bus route, sit in the ICT lab — a school shows better than it explains.
        </p>
        <div style="margin-top: 28px; display: flex; flex-wrap: wrap; justify-content: center; gap: 12px;">
            <a href="/contact" class="site-btn site-btn-sun">Book a school tour</a>
            <a href="/admissions" class="site-btn site-btn-ghost-light">See admissions</a>
        </div>
    </div>
</section>

@endsection

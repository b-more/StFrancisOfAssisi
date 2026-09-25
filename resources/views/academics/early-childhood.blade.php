@extends('layouts.app')

@section('title', 'Early Childhood Education')
@section('description', 'For learners aged approximately 3 to 6 years. Baby Class, Middle Class, and Reception in dedicated child-friendly classrooms with experienced ECE teachers and trained Aunties.')

@section('content')

{{-- HERO --}}
<section style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color:#fff; position:relative; overflow:hidden;">
    <div style="position:absolute; inset:0; opacity:0.08; background-image: radial-gradient(circle at 15% 20%, var(--site-sun) 1px, transparent 1px), radial-gradient(circle at 80% 70%, var(--site-sun) 1px, transparent 1px); background-size:100px 100px, 140px 140px; pointer-events:none;"></div>
    <div class="site-wrap" style="position:relative; padding-block: clamp(60px, 7vw, 100px);">
        <span class="site-kicker" style="color: var(--site-sun);"><a href="/academics" style="color:inherit; text-decoration:none;">Academics</a> · Early Childhood</span>
        <h1 style="margin: 14px 0 12px; font-family: var(--site-display); font-weight: 800; font-size: clamp(40px, 5.5vw, 76px); line-height: 1.02; letter-spacing: -0.03em; color:#fff;">
            Early Childhood Education.
        </h1>
        <p class="site-lead" style="color: rgba(255,255,255,0.85); max-width: 55ch;">
            For learners aged approximately 3 to 6 years — the first classroom experience, done well.
        </p>
    </div>
</section>

{{-- Motto ribbon --}}
<div style="background: var(--site-navy-deep); color: var(--site-sun); padding: 18px 20px; text-align: center;">
    <span style="font-family: var(--site-display); letter-spacing: .18em; text-transform: uppercase; font-size: clamp(11px, 1.2vw, 15px); font-weight: 700;">
        For God · For Country · For Every Child
    </span>
</div>

<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap" style="max-width: 900px;">
        <p style="margin: 0 0 40px; font-size: 17.5px; line-height: 1.7; color: var(--site-body);">
            The ECE section is housed in dedicated classrooms recently rebranded for a fresh, child-friendly learning environment, with experienced ECE teachers and trained Aunties supporting the youngest members of our community.
        </p>

        @php
            $stages = [
                ['Stage 1', 'Baby Class',   'First formal classroom experience. Focused on socialisation, motor skills, and language exposure.'],
                ['Stage 2', 'Middle Class', 'Building on Baby Class with structured pre-literacy and pre-numeracy.'],
                ['Stage 3', 'Reception',    'Final year before Grade 1, ensuring readiness for the Primary curriculum.'],
            ];
        @endphp
        <div style="display: grid; grid-template-columns: 1fr; gap: 16px;">
            @foreach($stages as $s)
                <div class="site-card" style="border-left: 4px solid var(--site-red);">
                    <span class="site-kicker">{{ $s[0] }}</span>
                    <h3 class="site-h3" style="margin: 8px 0 6px;">{{ $s[1] }}</h3>
                    <p style="margin: 0; color: var(--site-body); font-size: 16px; line-height: 1.6;">{{ $s[2] }}</p>
                </div>
            @endforeach
        </div>

        <div style="margin-top: 40px; text-align: center;">
            <a href="/admissions/apply" class="site-btn site-btn-red">Enquire about ECE admission</a>
        </div>
    </div>
</section>

@endsection

@extends('layouts.app')

@section('title', 'Privacy Policy')
@section('description', 'How St. Francis of Assisi Private School collects, processes, and stores personal data of learners, parents, staff and visitors.')

@section('content')
{{-- HERO --}}
<section style="background: linear-gradient(180deg, var(--site-sky) 0%, #fff 100%); padding-block: clamp(50px, 6vw, 90px) clamp(30px, 4vw, 60px);">
    <div class="site-wrap" style="max-width: 800px;">
        <span class="site-pill site-pill-sun">Privacy</span>
        <h1 style="margin: 20px 0 12px; font-family: var(--site-display); font-weight: 800; font-size: clamp(36px, 5vw, 64px); line-height: 1.02; letter-spacing: -0.03em; color: var(--site-navy);">
            Our commitment to your <span style="color: var(--site-red);">privacy.</span>
        </h1>
    </div>
</section>

<section class="py-16 md:py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 prose prose-lg prose-headings:font-display prose-headings:text-primary prose-a:text-accent">
        <p>St. Francis of Assisi Private School collects, processes, and stores personal data of learners, parents, staff, and visitors only for legitimate school purposes, admissions, academic records, fee management, communication, statutory reporting, and child protection.</p>

        <p>We do not sell or share personal data with third parties for marketing purposes. We retain records in line with applicable Zambian law and our internal records policy.</p>

        <h2>Your rights</h2>
        <p>Parents and staff have the right to request access to, correction of, or removal of their personal data, subject to the school's legitimate retention obligations.</p>

        <h2>Contact</h2>
        <p>For any privacy-related question, contact the School Principal's office at <a href="mailto:stfrancisofassisi.sfa@gmail.com">stfrancisofassisi.sfa@gmail.com</a> or +260 972 266 217.</p>

        <p class="text-sm text-gray-500 mt-12">Last updated: April 2026</p>
    </div>
</section>
@endsection

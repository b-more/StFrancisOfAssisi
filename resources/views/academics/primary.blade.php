@extends('layouts.app')

@section('title', 'Primary School')
@section('description', 'Grades 1 to 7. Full Zambian Primary curriculum with Lower and Upper Primary streams. Aptitude-tested entry to Grade 7. ECZ examination centre.')

@section('content')

{{-- HERO --}}
<section style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color:#fff; position:relative; overflow:hidden;">
    <div style="position:absolute; inset:0; opacity:0.08; background-image: radial-gradient(circle at 15% 20%, var(--site-sun) 1px, transparent 1px), radial-gradient(circle at 80% 70%, var(--site-sun) 1px, transparent 1px); background-size:100px 100px, 140px 140px; pointer-events:none;"></div>
    <div class="site-wrap" style="position:relative; padding-block: clamp(60px, 7vw, 100px);">
        <span class="site-kicker" style="color: var(--site-sun);"><a href="/academics" style="color:inherit; text-decoration:none;">Academics</a> · Primary</span>
        <h1 style="margin: 14px 0 12px; font-family: var(--site-display); font-weight: 800; font-size: clamp(40px, 5.5vw, 76px); line-height: 1.02; letter-spacing: -0.03em; color:#fff;">
            Primary Section.
        </h1>
        <p class="site-lead" style="color: rgba(255,255,255,0.85); max-width: 55ch;">
            Grades 1 to 7, the full Zambian Primary curriculum — with an aptitude-tested entry into Grade 7.
        </p>
    </div>
</section>

<div style="background: var(--site-navy-deep); color: var(--site-sun); padding: 18px 20px; text-align: center;">
    <span style="font-family: var(--site-display); letter-spacing: .18em; text-transform: uppercase; font-size: clamp(11px, 1.2vw, 15px); font-weight: 700;">
        For God · For Country · For Every Child
    </span>
</div>

<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap" style="max-width: 1000px;">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" style="margin-bottom: 32px;">
            <article class="site-card" style="border-top: 3px solid var(--site-navy);">
                <span class="site-kicker">Lower Primary</span>
                <h3 class="site-h3" style="margin: 8px 0 12px;">Grades 1 to 4</h3>
                <ul style="margin: 0; padding: 0; list-style: none; color: var(--site-body); font-size: 16px; line-height: 1.75;">
                    <li>› English</li>
                    <li>› Mathematics</li>
                    <li>› Integrated Science</li>
                    <li>› Creative &amp; Technology Studies (CTS)</li>
                    <li>› Zambian Language (iCibemba)</li>
                    <li>› Social Studies (from Grade 4)</li>
                    <li>› Religious Education</li>
                </ul>
            </article>
            <article class="site-card" style="border-top: 3px solid var(--site-navy);">
                <span class="site-kicker">Upper Primary</span>
                <h3 class="site-h3" style="margin: 8px 0 12px;">Grades 5 to 7</h3>
                <p style="margin: 0 0 8px; color: var(--site-body); font-size: 16px;">All of the above, plus:</p>
                <ul style="margin: 0; padding: 0; list-style: none; color: var(--site-body); font-size: 16px; line-height: 1.75;">
                    <li>› Home Economics</li>
                    <li>› Expressive Arts</li>
                    <li>› Technology Studies</li>
                </ul>
                <p style="margin: 14px 0 0; font-size: 14px; color: var(--site-muted);">With structured preparation for the Grade 7 ECZ examination.</p>
            </article>
        </div>

        <div class="site-card" style="border-left: 4px solid var(--site-red); background: linear-gradient(120deg, #FFF7E1 0%, #fff 60%); margin-bottom: 40px;">
            <span class="site-kicker" style="color: var(--site-red-ink);">Grade 7 · Examination year</span>
            <h3 class="site-h3" style="margin: 8px 0 10px; color: var(--site-red-ink);">Aptitude test before entry.</h3>
            <p style="margin: 0; color: var(--site-body); font-size: 16px; line-height: 1.6;">
                Grade 7 candidates sit the ECZ examination at our school, which is a registered examination centre. We have introduced an aptitude test as a precondition for entry into Grade 7, applied to both new and continuing pupils, to ensure every candidate enters the examination year ready to succeed.
            </p>
        </div>

        <div style="text-align: center;">
            <a href="/admissions/apply" class="site-btn site-btn-red">Apply for Primary</a>
        </div>
    </div>
</section>

@endsection

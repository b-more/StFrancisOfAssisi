@extends('layouts.app')

@section('title', 'Secondary School')
@section('description', 'Forms 1 to 5 (Grades 8 to 12). Junior and Senior Secondary curriculum with pure sciences, languages, humanities, ICT and the arts. ECZ examination centre.')

@section('content')

{{-- HERO --}}
<section style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color:#fff; position:relative; overflow:hidden;">
    <div style="position:absolute; inset:0; opacity:0.08; background-image: radial-gradient(circle at 15% 20%, var(--site-sun) 1px, transparent 1px), radial-gradient(circle at 80% 70%, var(--site-sun) 1px, transparent 1px); background-size:100px 100px, 140px 140px; pointer-events:none;"></div>
    <div class="site-wrap" style="position:relative; padding-block: clamp(60px, 7vw, 100px);">
        <span class="site-kicker" style="color: var(--site-sun);"><a href="/academics" style="color:inherit; text-decoration:none;">Academics</a> · Secondary</span>
        <h1 style="margin: 14px 0 12px; font-family: var(--site-display); font-weight: 800; font-size: clamp(40px, 5.5vw, 76px); line-height: 1.02; letter-spacing: -0.03em; color:#fff;">
            Secondary Section.
        </h1>
        <p class="site-lead" style="color: rgba(255,255,255,0.85); max-width: 55ch;">
            Forms 1 to 5 · Grades 8 through 12. Pure sciences, languages, humanities, ICT and the arts.
        </p>
    </div>
</section>

<div style="background: var(--site-navy-deep); color: var(--site-sun); padding: 18px 20px; text-align: center;">
    <span style="font-family: var(--site-display); letter-spacing: .18em; text-transform: uppercase; font-size: clamp(11px, 1.2vw, 15px); font-weight: 700;">
        For God · For Country · For Every Child
    </span>
</div>

<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap" style="max-width: 1100px;">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" style="margin-bottom: 32px;">
            <article class="site-card" style="border-top: 3px solid var(--site-navy);">
                <span class="site-kicker">Junior Secondary</span>
                <h3 class="site-h3" style="margin: 8px 0 12px;">Forms 1 to 2 · Grades 8 to 9</h3>
                <p style="margin: 0 0 8px; font-size: 14px; color: var(--site-muted);">Compulsory subjects:</p>
                <ul style="margin: 0; padding: 0; list-style: none; color: var(--site-body); font-size: 15.5px; line-height: 1.75;">
                    <li>› English · Mathematics · Integrated Science</li>
                    <li>› Civic Education · Religious Education</li>
                    <li>› Computer Studies · Physical Education</li>
                    <li>› Home Economics · Design &amp; Technology</li>
                    <li>› Art &amp; Design · Zambian Language</li>
                </ul>
            </article>
            <article class="site-card" style="border-top: 3px solid var(--site-navy);">
                <span class="site-kicker">Senior Secondary</span>
                <h3 class="site-h3" style="margin: 8px 0 12px;">Forms 3 to 5 · Grades 10 to 12</h3>
                <p style="margin: 0 0 8px; font-size: 14px; color: var(--site-muted);">Subject offering:</p>
                <ul style="margin: 0; padding: 0; list-style: none; color: var(--site-body); font-size: 15px; line-height: 1.7; display: grid; grid-template-columns: 1fr 1fr; gap: 4px 16px;">
                    <li>› Physics</li><li>› Chemistry</li>
                    <li>› Biology</li><li>› Mathematics</li>
                    <li>› Add. Maths</li><li>› English Lang.</li>
                    <li>› Lit. in English</li><li>› Geography</li>
                    <li>› History</li><li>› Civic Education</li>
                    <li>› Religious Ed.</li><li>› Commerce</li>
                    <li>› Accounts</li><li>› Computer Studies</li>
                    <li>› Home Mgmt.</li><li>› Food &amp; Nutrition</li>
                    <li>› Art &amp; Design</li><li>› Music</li>
                    <li>› P.E.</li>
                </ul>
            </article>
        </div>

        <div class="site-card" style="border-left: 4px solid var(--site-red); background: linear-gradient(120deg, #FFF7E1 0%, #fff 60%); margin-bottom: 40px;">
            <span class="site-kicker" style="color: var(--site-red-ink);">Grade 12 · School-Leaving Examination</span>
            <h3 class="site-h3" style="margin: 8px 0 10px; color: var(--site-red-ink);">Sat at our school. Verified by senior leadership.</h3>
            <p style="margin: 0; color: var(--site-body); font-size: 16px; line-height: 1.6;">
                Grade 12 candidates sit the ECZ examination at our school. Following our 2026 commitment to academic rigor, all Grade 12 syllabus and examination registrations are now formally verified and signed off by the Heads of Department, the Head Teacher Secondary, and the School Principal.
            </p>
        </div>

        <div style="text-align: center;">
            <a href="/admissions/apply" class="site-btn site-btn-red">Apply for Secondary</a>
        </div>
    </div>
</section>

@endsection

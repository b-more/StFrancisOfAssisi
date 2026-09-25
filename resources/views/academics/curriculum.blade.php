@extends('layouts.app')

@section('title', 'Curriculum')
@section('description', 'The full curriculum offered at St. Francis of Assisi Private School, ECE through Grade 12 — Zambian national curriculum blended with international best practices.')

@section('content')

{{-- HERO --}}
<section style="background: linear-gradient(180deg, var(--site-sky) 0%, #fff 100%); padding-block: clamp(60px, 8vw, 100px) clamp(40px, 5vw, 70px);">
    <div class="site-wrap" style="text-align: center; max-width: 780px;">
        <span class="site-pill site-pill-sun">Academics · Curriculum</span>
        <h1 style="margin: 20px 0 18px; font-family: var(--site-display); font-weight: 800; font-size: clamp(40px, 5.5vw, 76px); line-height: 1.02; letter-spacing: -0.03em; color: var(--site-navy);">
            Our <span style="color: var(--site-red);">curriculum.</span>
        </h1>
        <p class="site-lead" style="margin-inline: auto; max-width: 56ch;">
            The Zambian national curriculum, blended with international best practices — ECE through Grade 12. Built to develop critical thinking, creativity, and character alongside subject mastery.
        </p>
    </div>
</section>

{{-- OVERVIEW --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 960px;">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-start">
            <div class="md:col-span-4">
                <span class="site-kicker">Overview</span>
                <h2 class="site-h2" style="margin-top: 12px; max-width: 15ch; font-size: clamp(30px, 3.6vw, 46px);">
                    Educating the whole child.
                </h2>
            </div>
            <div class="md:col-span-8" style="font-size: 17px; line-height: 1.7; color: var(--site-body);">
                <p style="margin: 0 0 18px;">
                    We offer a comprehensive curriculum that blends the Zambian national curriculum with international best practices — designed to develop critical thinking, creativity, and problem-solving skills alongside a strong foundation of subject knowledge.
                </p>
                <p style="margin: 0;">
                    We educate the <strong style="color: var(--site-navy);">whole child</strong> — focusing not only on academic achievement but on character development, physical well-being, and social-emotional growth. The result is a graduate prepared for further education, career, and responsible citizenship.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- CURRICULUM BY LEVEL --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap" style="max-width: 1180px;">
        <div style="margin-bottom: 48px; max-width: 720px;">
            <span class="site-kicker">By educational level</span>
            <h2 class="site-h2" style="margin-top: 12px;">A continuous curriculum, stage by stage.</h2>
        </div>

        @php
            $levels = [
                [
                    'level'  => 'Stage 1',
                    'grade'  => 'Early Childhood Education',
                    'ages'   => 'Baby Class · Middle Class · Reception',
                    'accent' => 'var(--site-sun-soft)',
                    'ink'    => 'var(--site-sun-ink)',
                    'blurb'  => 'Holistic development through play-based learning — fostering curiosity, creativity, and foundational literacy and numeracy.',
                    'left'   => ['Language development and early literacy', 'Number concepts and early mathematics', 'Environmental awareness', 'Creative expression and arts'],
                    'left_h' => 'Key learning areas',
                    'right'  => ['Play-based learning', 'Hands-on activities and exploration', 'Songs, stories, and rhymes'],
                    'right_h'=> 'Teaching approaches',
                ],
                [
                    'level'  => 'Stage 2',
                    'grade'  => 'Primary Education',
                    'ages'   => 'Grades 1 – 7',
                    'accent' => 'var(--site-sky-2)',
                    'ink'    => 'var(--site-navy)',
                    'blurb'  => 'Structured foundational learning across the full Zambian primary curriculum. Aptitude-tested entry into Grade 7.',
                    'left'   => ['English', 'Mathematics', 'Integrated Science', 'Social Studies', 'Creative &amp; Technology Studies', 'iCibemba (Zambian language)', 'Religious Education', 'Home Economics · Expressive Arts (Upper Primary)'],
                    'left_h' => 'Core subjects',
                    'right'  => ['Structured lesson plans', 'Regular formative assessment', 'Reading focus (PRWC)', 'Preparation for Grade 7 ECZ'],
                    'right_h'=> 'Teaching approaches',
                ],
                [
                    'level'  => 'Stage 3',
                    'grade'  => 'Junior Secondary',
                    'ages'   => 'Forms 1 – 2 · Grades 8 – 9',
                    'accent' => 'var(--site-sky-2)',
                    'ink'    => 'var(--site-navy)',
                    'blurb'  => 'Broad-based secondary foundation — sciences, humanities, ICT, technology and languages. Prepares learners for senior subject choices.',
                    'left'   => ['English · Mathematics', 'Integrated Science', 'Civic Ed · Religious Ed', 'Computer Studies', 'Design &amp; Technology', 'Home Economics · Art', 'Zambian Language', 'Physical Education'],
                    'left_h' => 'Compulsory subjects',
                    'right'  => ['Foundational subject exposure', 'Guidance on senior-subject choices', 'Structured lab work in sciences', 'Regular internal assessment'],
                    'right_h'=> 'Teaching approaches',
                ],
                [
                    'level'  => 'Stage 4',
                    'grade'  => 'Senior Secondary',
                    'ages'   => 'Forms 3 – 5 · Grades 10 – 12',
                    'accent' => '#F5E6D6',
                    'ink'    => 'var(--site-red-ink)',
                    'blurb'  => 'Specialisation through subject choice; culminates in the Grade 12 ECZ examination at our own registered centre.',
                    'left'   => ['Physics · Chemistry · Biology', 'Mathematics · Additional Maths', 'English Language · Literature', 'Geography · History', 'Commerce · Accounts', 'Computer Studies', 'Home Management · Food &amp; Nutrition', 'Art · Music · P.E.'],
                    'left_h' => 'Subject offering',
                    'right'  => ['Subject-specialist teaching', 'Termly mock examinations', 'Item-level analysis of weak topics', 'Grade 12 ECZ verified by senior leadership'],
                    'right_h'=> 'Approaches &amp; assessment',
                ],
            ];
        @endphp

        <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
            @foreach($levels as $lv)
                <article class="site-card" style="padding: 0; overflow: hidden;">
                    <div style="display: grid; grid-template-columns: minmax(200px, 260px) 1fr; align-items: stretch;">
                        <div style="background: {{ $lv['accent'] }}; padding: 26px 28px; display: flex; flex-direction: column; justify-content: center;">
                            <span class="site-kicker" style="color: {{ $lv['ink'] }};">{{ $lv['level'] }}</span>
                            <h3 style="margin: 8px 0 4px; font-family: var(--site-display); font-weight: 800; font-size: clamp(22px, 2vw, 28px); color: {{ $lv['ink'] }}; letter-spacing: -0.015em; line-height: 1.05;">{{ $lv['grade'] }}</h3>
                            <p style="margin: 0; font-size: 14px; color: {{ $lv['ink'] }}; opacity: .78;">{!! $lv['ages'] !!}</p>
                        </div>
                        <div style="padding: 24px 28px; background: #fff;">
                            <p style="margin: 0 0 16px; color: var(--site-body); font-size: 15.5px; line-height: 1.55;">{!! $lv['blurb'] !!}</p>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
                                <div>
                                    <span class="site-kicker" style="letter-spacing: .18em;">{{ $lv['left_h'] }}</span>
                                    <ul style="margin: 8px 0 0; padding: 0; list-style: none; color: var(--site-body); font-size: 14.5px; line-height: 1.7;">
                                        @foreach($lv['left'] as $i)<li>› {!! $i !!}</li>@endforeach
                                    </ul>
                                </div>
                                <div>
                                    <span class="site-kicker" style="letter-spacing: .18em;">{{ $lv['right_h'] }}</span>
                                    <ul style="margin: 8px 0 0; padding: 0; list-style: none; color: var(--site-body); font-size: 14.5px; line-height: 1.7;">
                                        @foreach($lv['right'] as $i)<li>› {!! $i !!}</li>@endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <style>
            @media (max-width: 720px) {
                article.site-card > div { grid-template-columns: 1fr !important; }
                article.site-card > div > div:nth-child(2) > div { grid-template-columns: 1fr !important; }
            }
        </style>
    </div>
</section>

{{-- TEACHING & ASSESSMENT --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 1180px;">
        <div style="margin-bottom: 48px; max-width: 720px;">
            <span class="site-kicker">Teaching &amp; assessment</span>
            <h2 class="site-h2" style="margin-top: 12px;">How we teach — and how we know it's working.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <article class="site-card">
                <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sky-2); color: var(--site-navy); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 16px;">
                    <i class='bx bxs-chalkboard'></i>
                </div>
                <h3 class="site-h3">Teaching approaches</h3>
                <ul style="margin: 12px 0 0; padding: 0; list-style: none; color: var(--site-body); font-size: 15.5px; line-height: 1.7;">
                    <li>› Structured lesson plans matched to the ECZ syllabus</li>
                    <li>› Small-group and individualised support (PRWC)</li>
                    <li>› Practical work in science, ICT and home-economics laboratories</li>
                    <li>› Cross-subject projects at each grade level</li>
                    <li>› Explicit character formation through daily routines</li>
                </ul>
            </article>
            <article class="site-card">
                <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sun-soft); color: var(--site-sun-ink); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 16px;">
                    <i class='bx bxs-report'></i>
                </div>
                <h3 class="site-h3">Assessment and reporting</h3>
                <ul style="margin: 12px 0 0; padding: 0; list-style: none; color: var(--site-body); font-size: 15.5px; line-height: 1.7;">
                    <li>› End-of-term assessments at every grade</li>
                    <li>› Termly mock examinations for Grades 7 and 12</li>
                    <li>› Item-level analysis to identify weak topics</li>
                    <li>› Detailed termly reports shared with parents</li>
                    <li>› Grade 7 and 12 ECZ sat at our own examination centre</li>
                </ul>
            </article>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="site-section" style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color: #fff; text-align: center;">
    <div class="site-wrap" style="max-width: 780px;">
        <span class="site-kicker" style="color: var(--site-sun);">See it in practice</span>
        <h2 style="margin: 12px 0 20px; font-family: var(--site-display); font-weight: 800; font-size: clamp(30px, 4vw, 48px); line-height: 1.05; letter-spacing: -0.03em; color: #fff;">
            Come and sit in a lesson.
        </h2>
        <p style="margin: 0 auto; max-width: 55ch; font-size: 17px; line-height: 1.6; color: rgba(255,255,255,0.85);">
            A curriculum shows better than it explains. Book a tour and see the lessons happening.
        </p>
        <div style="margin-top: 28px; display: flex; flex-wrap: wrap; justify-content: center; gap: 12px;">
            <a href="/contact" class="site-btn site-btn-sun">Book a lesson visit</a>
            <a href="/admissions" class="site-btn site-btn-ghost-light">See admissions</a>
        </div>
    </div>
</section>

@endsection

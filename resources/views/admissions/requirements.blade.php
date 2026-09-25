@extends('layouts.app')

@section('title', 'Admission Requirements')
@section('description', 'Documents, age criteria and per-level requirements for admission to St. Francis of Assisi Private School.')

@section('content')

{{-- HERO --}}
<section style="background: linear-gradient(180deg, var(--site-sky) 0%, #fff 100%); padding-block: clamp(60px, 8vw, 100px) clamp(40px, 5vw, 70px);">
    <div class="site-wrap" style="text-align: center; max-width: 780px;">
        <span class="site-pill site-pill-sun">Admissions · Requirements</span>
        <h1 style="margin: 20px 0 18px; font-family: var(--site-display); font-weight: 800; font-size: clamp(40px, 5.5vw, 76px); line-height: 1.02; letter-spacing: -0.03em; color: var(--site-navy);">
            Everything you need to <span style="color: var(--site-red);">join us.</span>
        </h1>
        <p class="site-lead" style="margin-inline: auto; max-width: 56ch;">
            The documents, tests, and criteria for admission — set out plainly by stage. Please review before submitting your application.
        </p>
        <div style="margin-top: 28px; display: flex; flex-wrap: wrap; justify-content: center; gap: 12px;">
            <a href="/admissions/apply" class="site-btn site-btn-red">Begin an application</a>
            <a href="/downloads/" class="site-btn site-btn-line">Download forms</a>
        </div>
    </div>
</section>

{{-- GENERAL --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 900px;">
        <span class="site-kicker">General</span>
        <h2 class="site-h2" style="margin-top: 12px; max-width: 22ch;">
            Fit for our environment, capable of what we ask.
        </h2>
        <p class="site-lead" style="margin-top: 22px;">
            We welcome learners from diverse backgrounds who demonstrate academic potential and good character. The information below outlines the general requirements and specific criteria for each educational level.
        </p>
    </div>
</section>

{{-- REQUIRED DOCUMENTS --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap" style="max-width: 1180px;">
        <div style="margin-bottom: 40px; max-width: 720px;">
            <span class="site-kicker">Required documents</span>
            <h2 class="site-h2" style="margin-top: 12px; max-width: 22ch;">Bring these to the school office.</h2>
        </div>
        @php
            $allDocs = ['Completed application form', 'Birth certificate (original and photocopy)', 'Four passport-sized photographs', 'Immunisation records', 'Copy of parent/guardian ID or passport', 'Application fee payment receipt'];
            $xferDocs = ['Academic records from the previous two years', 'Transfer certificate from previous school', 'Recommendation letter from previous school', 'Most recent report card', 'National examination results (if applicable)', 'Disciplinary record (if required by the school)'];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <article class="site-card">
                <span class="site-kicker">For all applicants</span>
                <ul style="margin: 14px 0 0; padding: 0; list-style: none; color: var(--site-body); font-size: 15.5px; line-height: 1.7;">
                    @foreach($allDocs as $d)
                        <li style="display: flex; gap: 10px; padding: 3px 0;"><span style="color: var(--site-sun-ink);">›</span> {{ $d }}</li>
                    @endforeach
                </ul>
            </article>
            <article class="site-card">
                <span class="site-kicker">Additional for transfer students</span>
                <ul style="margin: 14px 0 0; padding: 0; list-style: none; color: var(--site-body); font-size: 15.5px; line-height: 1.7;">
                    @foreach($xferDocs as $d)
                        <li style="display: flex; gap: 10px; padding: 3px 0;"><span style="color: var(--site-sun-ink);">›</span> {{ $d }}</li>
                    @endforeach
                </ul>
            </article>
        </div>
    </div>
</section>

{{-- AGE TABLE --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 1000px;">
        <div style="margin-bottom: 40px; max-width: 720px;">
            <span class="site-kicker">Age requirements</span>
            <h2 class="site-h2" style="margin-top: 12px;">Age by grade — as at January of the enrolment year.</h2>
        </div>
        @php
            $ages = [
                ['Baby Class',            '2 – 3 yrs',  'Child must be 2 by January of enrolment'],
                ['Middle Class',          '3 – 4 yrs',  'Child must be 3 by January of enrolment'],
                ['Reception',             '4 – 5 yrs',  'Child must be 4 by January of enrolment'],
                ['Grade 1',               '5 – 6 yrs',  'Child must be 5 by January of enrolment'],
                ['Grades 2 – 12',         'Varies',     'Age appropriate for grade level'],
            ];
        @endphp
        <div style="overflow-x: auto; border-radius: 20px; border: 1px solid var(--site-line); background: #fff;">
            <table style="width: 100%; border-collapse: collapse; font-size: 15.5px;">
                <thead>
                    <tr style="background: var(--site-navy); color: #fff;">
                        <th style="padding: 14px 18px; text-align: left; font-family: var(--site-display); font-weight: 700; letter-spacing: -0.005em;">Grade level</th>
                        <th style="padding: 14px 18px; text-align: center; font-family: var(--site-display); font-weight: 700; letter-spacing: -0.005em;">Age</th>
                        <th style="padding: 14px 18px; text-align: left; font-family: var(--site-display); font-weight: 700; letter-spacing: -0.005em;">Notes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ages as $i => $a)
                        <tr style="background: {{ $i % 2 == 0 ? 'transparent' : 'var(--site-ground)' }}; border-top: 1px solid var(--site-line);">
                            <td style="padding: 14px 18px; color: var(--site-ink); font-weight: 600;">{{ $a[0] }}</td>
                            <td style="padding: 14px 18px; text-align: center; color: var(--site-body); font-variant-numeric: tabular-nums;">{{ $a[1] }}</td>
                            <td style="padding: 14px 18px; color: var(--site-body); font-size: 14.5px;">{{ $a[2] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div style="margin-top: 20px; padding: 16px 20px; background: var(--site-sky); border-left: 4px solid var(--site-navy-2); border-radius: 8px; font-size: 15px; color: var(--site-ink);">
            <strong>Note:</strong> Age exceptions may be considered on a case-by-case basis depending on the child's developmental readiness and previous educational experience — subject to additional assessment and approval from the admissions committee.
        </div>
    </div>
</section>

{{-- REQUIREMENTS BY LEVEL --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap" style="max-width: 1180px;">
        <div style="margin-bottom: 48px; max-width: 720px;">
            <span class="site-kicker">By educational level</span>
            <h2 class="site-h2" style="margin-top: 12px;">Requirements at each stage.</h2>
        </div>

        @php
            $stageReqs = [
                [
                    'label' => 'ECE',
                    'title' => 'Early Childhood (Baby Class – Reception)',
                    'blurb' => 'Focuses on developmental readiness rather than academic achievement. We look for children who can benefit from our play-based learning environment.',
                    'left_h'=> "What we're looking for",
                    'left'  => ['Age-appropriate social skills', 'Basic self-care abilities', 'Willingness to engage in group activities', 'Emotional readiness for a classroom setting'],
                    'right_h'=> 'Assessment process',
                    'right' => ['Brief observation session with the child', 'Interview with parents/guardians', 'Simple developmental screening', 'Trial day (for older ECE candidates)'],
                    'accent'=> 'var(--site-sun-soft)',
                    'ink'   => 'var(--site-sun-ink)',
                ],
                [
                    'label' => 'Primary',
                    'title' => 'Primary School (Grades 1 – 7)',
                    'blurb' => 'Requires demonstration of appropriate academic foundations and social readiness. Assessments verify readiness for structured Zambian curriculum learning.',
                    'left_h'=> 'Academic requirements',
                    'left'  => ['Age-appropriate literacy and numeracy', 'Basic English communication (spoken)', 'Ability to follow classroom instructions', 'Grade 7: aptitude test before entry'],
                    'right_h'=> 'Assessment process',
                    'right' => ['Age-appropriate placement assessment', 'Interview with the child', 'Interview with parents/guardians', 'Review of records from previous school'],
                    'accent'=> 'var(--site-sky-2)',
                    'ink'   => 'var(--site-navy)',
                ],
                [
                    'label' => 'Secondary',
                    'title' => 'Secondary School (Grades 8 – 12)',
                    'blurb' => 'Learners must demonstrate the academic ability and study habits required for the demanding secondary curriculum culminating in the Grade 12 ECZ examination.',
                    'left_h'=> 'Academic requirements',
                    'left'  => ['Solid English literacy and numeracy', 'Prior grade progress records', 'Grade 10: Grade 9 ECZ results reviewed', 'Grade 12: aptitude test before entry'],
                    'right_h'=> 'Assessment process',
                    'right' => ['Written entrance assessment', 'Interview with student and parents', 'Review of prior report cards', 'Subject-choice guidance for senior grades'],
                    'accent'=> '#F5E6D6',
                    'ink'   => 'var(--site-red-ink)',
                ],
            ];
        @endphp

        <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
            @foreach($stageReqs as $sr)
                <article class="site-card reqs-card" style="padding: 0; overflow: hidden;">
                    <div class="reqs-grid" style="display: grid; grid-template-columns: minmax(200px, 260px) 1fr;">
                        <div style="background: {{ $sr['accent'] }}; padding: 26px 28px; display: flex; flex-direction: column; justify-content: center;">
                            <span class="site-kicker" style="color: {{ $sr['ink'] }};">{{ $sr['label'] }}</span>
                            <h3 style="margin: 8px 0 0; font-family: var(--site-display); font-weight: 800; font-size: clamp(20px, 1.9vw, 26px); color: {{ $sr['ink'] }}; letter-spacing: -0.015em; line-height: 1.1;">{{ $sr['title'] }}</h3>
                        </div>
                        <div style="padding: 24px 28px; background: #fff;">
                            <p style="margin: 0 0 16px; color: var(--site-body); font-size: 15.5px; line-height: 1.55;">{{ $sr['blurb'] }}</p>
                            <div class="reqs-two-col" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                <div>
                                    <span class="site-kicker" style="letter-spacing: .18em;">{{ $sr['left_h'] }}</span>
                                    <ul style="margin: 8px 0 0; padding: 0; list-style: none; color: var(--site-body); font-size: 14.5px; line-height: 1.7;">
                                        @foreach($sr['left'] as $i)<li>› {{ $i }}</li>@endforeach
                                    </ul>
                                </div>
                                <div>
                                    <span class="site-kicker" style="letter-spacing: .18em;">{{ $sr['right_h'] }}</span>
                                    <ul style="margin: 8px 0 0; padding: 0; list-style: none; color: var(--site-body); font-size: 14.5px; line-height: 1.7;">
                                        @foreach($sr['right'] as $i)<li>› {{ $i }}</li>@endforeach
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
                .reqs-grid { grid-template-columns: 1fr !important; }
                .reqs-two-col { grid-template-columns: 1fr !important; }
            }
        </style>
    </div>
</section>

{{-- SPECIAL CONSIDERATIONS --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 1180px;">
        <div style="margin-bottom: 48px; max-width: 720px;">
            <span class="site-kicker">Special considerations</span>
            <h2 class="site-h2" style="margin-top: 12px;">Cases we handle a little differently.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            @php
                $specials = [
                    ['bxs-heart-circle', 'Special Educational Needs',  'We welcome learners with SEN, subject to our capacity to serve them well. Provide any specialist medical or educational reports at application so we can assess what support is needed.'],
                    ['bx-globe',         'International students',      'International applicants are welcome. Bring translated academic records (certified English translations) and any resident-permit documentation for the child.'],
                    ['bxs-time',         'Mid-year admissions',         'We accept applications year-round. Places depend on availability in the specific grade — the school office can advise on current spaces before you apply.'],
                ];
            @endphp
            @foreach($specials as $sp)
                <div class="site-card">
                    <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sun-soft); color: var(--site-sun-ink); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 14px;">
                        <i class='bx {{ $sp[0] }}'></i>
                    </div>
                    <h3 class="site-h3" style="font-size: clamp(18px, 1.6vw, 22px);">{{ $sp[1] }}</h3>
                    <p style="margin: 6px 0 0; color: var(--site-body); font-size: 15px; line-height: 1.55;">{{ $sp[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- DECISION FACTORS --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap" style="max-width: 1180px;">
        <div style="margin-bottom: 48px; max-width: 720px;">
            <span class="site-kicker">How decisions are made</span>
            <h2 class="site-h2" style="margin-top: 12px;">Three factors, weighted together.</h2>
        </div>
        @php
            $factors = [
                ['01', 'Academic readiness',   "Demonstrated ability to succeed at the requested grade level. Assessed through prior records, aptitude tests where required, and any in-school placement work."],
                ['02', 'Character &amp; behaviour', 'Willingness to engage with our values-based code of conduct. Recommendation letters, interviews and past disciplinary records inform this.'],
                ['03', 'Family alignment',     'Parents and guardians who accept the school\'s Christian foundation and are ready to partner with us on their child\'s learning.'],
            ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            @foreach($factors as $f)
                <div class="site-card" style="border-top: 3px solid var(--site-red);">
                    <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sun); color: var(--site-navy); display: flex; align-items: center; justify-content: center; font-family: var(--site-display); font-weight: 800; font-size: 17px; margin-bottom: 14px;">{{ $f[0] }}</div>
                    <h3 class="site-h3" style="font-size: clamp(18px, 1.6vw, 22px);">{!! $f[1] !!}</h3>
                    <p style="margin: 6px 0 0; color: var(--site-body); font-size: 15px; line-height: 1.55;">{!! $f[2] !!}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="site-section" style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color: #fff; text-align: center;">
    <div class="site-wrap" style="max-width: 780px;">
        <span class="site-kicker" style="color: var(--site-sun);">Ready?</span>
        <h2 style="margin: 12px 0 20px; font-family: var(--site-display); font-weight: 800; font-size: clamp(30px, 4vw, 48px); line-height: 1.05; letter-spacing: -0.03em; color: #fff;">
            Now that you know what we need — <span style="color: var(--site-sun);">apply.</span>
        </h2>
        <p style="margin: 0 auto; max-width: 55ch; font-size: 17px; line-height: 1.6; color: rgba(255,255,255,0.85);">
            We reply within five working days once your application is complete.
        </p>
        <div style="margin-top: 28px; display: flex; flex-wrap: wrap; justify-content: center; gap: 12px;">
            <a href="/admissions/apply" class="site-btn site-btn-sun">Begin an application</a>
            <a href="tel:+260972266217" class="site-btn site-btn-ghost-light"><i class='bx bxs-phone'></i> Call admissions</a>
        </div>
    </div>
</section>

@endsection

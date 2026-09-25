@extends('layouts.app')

@section('title', 'Academics')
@section('description', 'Full Zambian curriculum from ECE to Grade 12, taught by TCZ-licensed teachers, supported by science, computer and home economics laboratories, plus the Parallel Reading and Writing Course (PRWC).')

@section('content')

{{-- HERO --}}
<section style="background: linear-gradient(180deg, var(--site-sky) 0%, #fff 100%); padding-block: clamp(60px, 8vw, 120px) clamp(40px, 6vw, 80px);">
    <div class="site-wrap">
        <div class="site-hero-split">
            <div style="min-width: 0;">
                <span class="site-pill site-pill-sun">Academics</span>
                <h1 class="font-display" style="margin: 20px 0 18px; font-size: clamp(44px, 6vw, 88px); line-height: 1.02; letter-spacing: -0.03em; color: var(--site-navy); max-width: 15ch;">
                    Toward the <span style="color: var(--site-red);">distinction band.</span>
                </h1>
                <p class="site-lead" style="max-width: 52ch;">
                    Full Zambian national curriculum, ECE through Grade 12, taught by TCZ-licensed teachers with the discipline of regular internal assessment.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 12px; margin-top: 32px;">
                    <a href="#sections" class="site-btn site-btn-red">Explore our sections</a>
                    <a href="/admissions" class="site-btn site-btn-line">Begin an application</a>
                </div>
            </div>
            <div style="min-width: 0;">
                <div style="max-width: 460px; margin: 0 auto; border-radius: clamp(14px, 2vw, 28px); overflow: hidden; box-shadow: 0 30px 60px -20px rgba(15, 30, 51, .35); aspect-ratio: 4/3; background: var(--site-sky-2);">
                    <img src="/images/secondary/secondary2.jpg" alt="Secondary classroom" style="width:100%; height:100%; object-fit: cover; display: block;" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Motto ribbon --}}
<div style="background: var(--site-navy-deep); color: var(--site-sun); padding: 18px 20px; text-align: center;">
    <span style="font-family: var(--site-display); letter-spacing: .18em; text-transform: uppercase; font-size: clamp(11px, 1.2vw, 15px); font-weight: 700;">
        For God · For Country · For Every Child
    </span>
</div>

{{-- OVERVIEW --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 1180px;">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="md:col-span-4">
                <span class="site-kicker">Overview</span>
                <h2 class="site-h2" style="margin-top: 12px; max-width: 15ch;">Beyond passing, toward distinction.</h2>
            </div>
            <div class="md:col-span-8" style="font-size: 17.5px; line-height: 1.7; color: var(--site-body);">
                <p style="margin: 0 0 18px;">
                    We offer the full Zambian national curriculum from Early Childhood Education through Grade 12, taught by TCZ-licensed teachers in classrooms supported by science, computer, and home economics laboratories, a library, and the discipline of regular internal assessment.
                </p>
                <p style="margin: 0;">
                    Our 2026 – 2028 Strategic Plan commits the school to moving from universal pass rates to consistent <strong style="color: var(--site-navy);">distinction-band performance</strong> — and to ensuring that no learner reaches an examination class without first demonstrating the foundational competencies (reading, writing, comprehension, arithmetic) that examinations demand.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- SECTIONS — three-card grid --}}
<section id="sections" class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap">
        <div style="margin-bottom: 48px; max-width: 780px;">
            <span class="site-kicker">Sections</span>
            <h2 class="site-h2" style="margin-top: 12px; max-width: 24ch;">A continuous pathway from age 3 to Grade 12.</h2>
        </div>

        @php
            $sections = [
                ['/academics/early-childhood', '/images/ecl/ecl5.jpg',            'Ages 3 – 6',            'Early Childhood',   'Baby Class · Middle Class · Reception. Play-based learning, structured pre-literacy and pre-numeracy in dedicated child-friendly classrooms.',        'Explore ECE'],
                ['/academics/primary',         '/images/primary/primary5.jpg',   'Grades 1 – 7',          'Primary section',   'Lower & Upper Primary. Aptitude-tested entry into Grade 7; structured preparation for the ECZ examination at our own centre.',                       'Explore Primary'],
                ['/academics/secondary',       '/images/secondary/secondary3.jpg','Forms 1 – 5 · Gr 8-12','Secondary section', 'Junior & Senior Secondary. Pure sciences, languages, humanities, ICT, the arts. Grade 12 examinations sat at our school.',                         'Explore Secondary'],
            ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($sections as $s)
                <a href="{{ $s[0] }}" class="site-card" style="text-decoration: none; color: inherit; padding: 0; overflow: hidden;">
                    <div style="aspect-ratio: 4/3; overflow: hidden; background: var(--site-sky-2);">
                        <img src="{{ $s[1] }}" alt="{{ $s[3] }}" style="width:100%; height:100%; object-fit: cover; display: block;" loading="lazy">
                    </div>
                    <div style="padding: 24px 24px 26px;">
                        <span class="site-kicker" style="color: var(--site-navy-2); letter-spacing: .22em;">{{ $s[2] }}</span>
                        <h3 class="site-h3" style="margin: 8px 0 8px;">{{ $s[3] }}</h3>
                        <p style="margin: 0; color: var(--site-body); font-size: 15.5px; line-height: 1.55;">{{ $s[4] }}</p>
                        <span style="display: inline-block; margin-top: 14px; font-size: 14.5px; font-weight: 700; color: var(--site-red);">{{ $s[5] }} →</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- PRWC — flagship programme --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 1180px;">
        <div style="margin-bottom: 40px; max-width: 780px;">
            <span class="site-kicker">Flagship programme</span>
            <h2 class="site-h2" style="margin-top: 12px; max-width: 26ch;">The Parallel Reading and Writing Course.</h2>
            <p class="site-lead" style="margin-top: 22px;">
                In line with our 2026 Strategic Plan, we've introduced the <strong style="color: var(--site-navy);">Parallel Reading and Writing Course (PRWC)</strong> — a parallel stream that ensures no learner enters a regular grade class without first demonstrating functional reading and writing in English.
            </p>
        </div>

        @php
            $prwc = [
                ['01', 'Placement assessment on entry',      'Every newly enrolled learner is tested.'],
                ['02', 'PRWC parallel stream',                "Learners who don't yet meet the threshold join the PRWC stream, supported by dedicated coordinators (one for Primary, one for Secondary)."],
                ['03', 'Reintegration',                       'On demonstrating competence, they reintegrate into their substantive grade class — no stigma.'],
            ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5" style="margin-bottom: 32px;">
            @foreach($prwc as $p)
                <div class="site-card">
                    <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sun); color: var(--site-navy); display: flex; align-items: center; justify-content: center; font-family: var(--site-display); font-weight: 800; font-size: 17px; margin-bottom: 14px;">{{ $p[0] }}</div>
                    <h3 class="site-h3" style="font-size: clamp(18px, 1.6vw, 22px);">{{ $p[1] }}</h3>
                    <p style="margin: 6px 0 0; color: var(--site-body); font-size: 15.5px; line-height: 1.55;">{{ $p[2] }}</p>
                </div>
            @endforeach
        </div>

        <div style="background: var(--site-sky); border-left: 4px solid var(--site-red); border-radius: 12px; padding: 24px 28px; max-width: 800px;">
            <p style="margin: 0 0 12px; font-size: 16.5px; line-height: 1.65; color: var(--site-ink);">
                The PRWC uses the <em style="color: var(--site-navy);">Peter and Jane Key Words</em> reading scheme alongside graded readers and structured writing exercises. Existing pupils identified by class teachers as needing additional support are progressively absorbed into the programme.
            </p>
            <p style="margin: 0; font-size: 16.5px; line-height: 1.65;">
                <strong style="color: var(--site-red-ink);">A standing programme, not a remedial afterthought</strong> — part of our promise that every learner who passes through this school will leave it able to read and write.
            </p>
        </div>
    </div>
</section>

{{-- EXAMINATIONS --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap" style="max-width: 1180px;">
        <div style="margin-bottom: 40px; max-width: 780px;">
            <span class="site-kicker">Examinations</span>
            <h2 class="site-h2" style="margin-top: 12px; max-width: 22ch;">Internal rigour. External validation.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <article class="site-card">
                <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sky-2); color: var(--site-navy); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 16px;">
                    <i class="bx bxs-edit-alt"></i>
                </div>
                <h3 class="site-h3">Internal assessment</h3>
                <ul style="margin: 12px 0 0; padding: 0; list-style: none; color: var(--site-body); font-size: 15.5px; line-height: 1.7;">
                    <li>› End-of-term assessments at every grade</li>
                    <li>› Termly mock examinations for Grades 7 and 12</li>
                    <li>› Item-level analysis to identify weak topics</li>
                </ul>
            </article>
            <article class="site-card">
                <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sun-soft); color: var(--site-sun-ink); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 16px;">
                    <i class="bx bxs-medal"></i>
                </div>
                <h3 class="site-h3">External (ECZ)</h3>
                <ul style="margin: 12px 0 0; padding: 0; list-style: none; color: var(--site-body); font-size: 15.5px; line-height: 1.7;">
                    <li>› Grade 7 ECZ — sat at our school</li>
                    <li>› Grade 9 ECZ — sat at our school</li>
                    <li>› Grade 12 ECZ — sat at our school</li>
                </ul>
                <p style="margin: 14px 0 0; font-size: 13.5px; color: var(--site-muted); font-style: italic;">— We are a registered ECZ examination centre; your child sits external examinations at familiar premises.</p>
            </article>
        </div>
    </div>
</section>

{{-- 2028 TARGETS — navy anchor --}}
<section class="site-section" style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color: #fff; position: relative; overflow: hidden;">
    <div style="position: absolute; inset: 0; opacity: 0.08; background-image: radial-gradient(circle at 15% 20%, var(--site-sun) 1px, transparent 1px), radial-gradient(circle at 80% 70%, var(--site-sun) 1px, transparent 1px); background-size: 100px 100px, 140px 140px; pointer-events: none;"></div>
    <div class="site-wrap" style="position: relative;">
        <div style="margin-bottom: 48px; max-width: 720px;">
            <span class="site-kicker" style="color: var(--site-sun);">2028 targets</span>
            <h2 style="margin-top: 12px; font-family: var(--site-display); font-weight: 800; font-size: clamp(34px, 4.2vw, 56px); line-height: 1.02; letter-spacing: -0.03em; color: #fff; max-width: 22ch;">
                What we're committing to publicly.
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,200,61,0.35); border-radius: 20px; padding: 28px;">
                <span class="site-kicker" style="color: var(--site-sun);">Grade 7 ECZ</span>
                <p style="margin: 12px 0 0; font-family: var(--site-display); font-weight: 700; font-size: clamp(20px, 2vw, 24px); line-height: 1.25; color: #fff;">At least <span style="color: var(--site-sun);">5 pupils scoring 800+ marks.</span></p>
            </div>
            <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,200,61,0.35); border-radius: 20px; padding: 28px;">
                <span class="site-kicker" style="color: var(--site-sun);">Grade 12 ECZ</span>
                <p style="margin: 12px 0 0; font-family: var(--site-display); font-weight: 700; font-size: clamp(18px, 1.7vw, 22px); line-height: 1.3; color: #fff;"><span style="color: var(--site-sun);">100% pass rate</span>, ≥ 30% qualifying for university, and at least one Division I candidate.</p>
            </div>
            <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,200,61,0.35); border-radius: 20px; padding: 28px;">
                <span class="site-kicker" style="color: var(--site-sun);">Competitions</span>
                <p style="margin: 12px 0 0; font-family: var(--site-display); font-weight: 700; font-size: clamp(18px, 1.7vw, 22px); line-height: 1.3; color: #fff;">Active participation in Maths, Science, English, debate, and spelling — district, provincial and national.</p>
            </div>
        </div>
    </div>
</section>

@endsection

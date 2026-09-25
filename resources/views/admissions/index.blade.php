@extends('layouts.app')

@section('title', 'Admissions')
@section('description', 'Apply to St. Francis of Assisi. Step-by-step guide for Early Childhood Education, Primary, and Secondary admission. Aptitude testing for examination grades, term-by-term billing, and a referral discount.')

@section('content')

{{-- ============================================================
     HERO
     ============================================================ --}}
<section style="background: linear-gradient(180deg, var(--site-sky) 0%, #fff 100%); padding-block: clamp(60px, 8vw, 120px) clamp(40px, 6vw, 80px);">
    <div class="site-wrap">
        <div style="display: grid; grid-template-columns: minmax(0, 7fr) minmax(0, 5fr); gap: clamp(16px, 3vw, 64px); align-items: center;">
            <div style="min-width: 0;">
                <span class="site-pill site-pill-sun">Admissions · Now open</span>
                <h1 class="font-display" style="margin: 20px 0 18px; font-size: clamp(44px, 6vw, 88px); line-height: 1.02; letter-spacing: -0.03em; color: var(--site-navy); max-width: 15ch;">
                    Bring us your <span style="color: var(--site-red);">child.</span> We'll do the rest.
                </h1>
                <p class="site-lead" style="max-width: 52ch;">
                    Applications for Baby Class through Grade 12 are accepted year-round. Priority is given to applications received at least four weeks before the start of term.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 12px; margin-top: 32px;">
                    <a href="/admissions/apply" class="site-btn site-btn-red">Begin an application</a>
                    <a href="/contact" class="site-btn site-btn-line">Book a campus visit</a>
                </div>
            </div>
            <div style="min-width: 0;">
                <div style="max-width: 460px; margin: 0 auto; border-radius: clamp(14px, 2vw, 28px); overflow: hidden; box-shadow: 0 30px 60px -20px rgba(15, 30, 51, .35); aspect-ratio: 4/3; background: var(--site-sky-2);">
                    <img src="/images/ecl/ecl5.jpg" alt="Early Childhood classroom" style="width:100%; height:100%; object-fit: cover; display: block;" loading="lazy">
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

{{-- ============================================================
     A WORD FIRST
     ============================================================ --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 1000px;">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-start">
            <div class="md:col-span-3">
                <span class="site-kicker">A word first</span>
            </div>
            <div class="md:col-span-9">
                <p style="margin: 0; font-family: var(--site-display); font-weight: 500; font-size: clamp(22px, 2.2vw, 28px); line-height: 1.35; letter-spacing: -0.01em; color: var(--site-ink);">
                    Choosing a school is one of the most important decisions you will make for your child. Come and visit, meet our staff, see the classrooms, and ask any question you wish before you decide. Applications are accepted throughout the year, but priority is given to those received <strong style="color: var(--site-red);">at least four weeks</strong> before the start of each term.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     WHO WE ACCEPT
     ============================================================ --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap">
        <div style="margin-bottom: 48px; max-width: 720px;">
            <span class="site-kicker">Who we accept</span>
            <h2 class="site-h2" style="margin-top: 12px;">
                Open to learners at every stage.
            </h2>
        </div>

        @php
            $stages = [
                ['/images/ecl/ecl5.jpg',            'Ages 3 – 6',      'Early Childhood',  'Baby Class, Middle Class, and Reception.'],
                ['/images/primary/primary2.jpg',   'Grades 1 – 7',    'Primary',          'All grades. Aptitude test required for entry into Grade 7.'],
                ['/images/secondary/secondary2.jpg','Grades 8 – 12',   'Secondary',        'Grades 8 through 12. Aptitude test required for entry into Grade 12.'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($stages as $s)
                <article class="site-card" style="padding: 0; overflow: hidden;">
                    <div style="aspect-ratio: 4/3; overflow: hidden; background: var(--site-sky-2);">
                        <img src="{{ $s[0] }}" alt="{{ $s[2] }}" style="width:100%; height:100%; object-fit: cover; display: block;">
                    </div>
                    <div style="padding: 24px 24px 26px;">
                        <span class="site-kicker" style="color: var(--site-navy-2); letter-spacing: 0.22em;">{{ $s[1] }}</span>
                        <h3 class="site-h3" style="margin: 8px 0 8px;">{{ $s[2] }}</h3>
                        <p style="margin: 0; color: var(--site-body); font-size: 16px; line-height: 1.55;">{{ $s[3] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        <p style="margin-top: 32px; max-width: 60ch; font-style: italic; color: var(--site-body); font-size: 15px;">
            Entry into examination grades (Grade 7 and Grade 12) is subject to passing an aptitude test, which assesses readiness for examination-grade work.
        </p>
    </div>
</section>

{{-- ============================================================
     HOW TO APPLY — six steps, navy anchor
     ============================================================ --}}
<section class="site-section" style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color: #fff; position: relative; overflow: hidden;">
    <div style="position: absolute; inset: 0; opacity: 0.08; background-image: radial-gradient(circle at 15% 20%, var(--site-sun) 1px, transparent 1px), radial-gradient(circle at 80% 70%, var(--site-sun) 1px, transparent 1px); background-size: 100px 100px, 140px 140px; pointer-events: none;"></div>
    <div class="site-wrap" style="position: relative;">
        <div style="margin-bottom: 48px; max-width: 720px;">
            <span class="site-kicker" style="color: var(--site-sun);">How to apply</span>
            <h2 style="margin-top: 12px; font-family: var(--site-display); font-weight: 800; font-size: clamp(34px, 4.2vw, 56px); line-height: 1.02; letter-spacing: -0.03em; color: #fff; max-width: 22ch;">
                Six steps. Five working days for a decision.
            </h2>
        </div>

        @php
            $steps = [
                ['01', 'Enquire',                                     'Telephone or visit the school office to express your interest. We will explain availability in your child\'s grade and answer any preliminary questions.'],
                ['02', 'Visit and tour',                              'Book a school tour at a time convenient to you. You will see classrooms, laboratories, the library, the playground, and meet members of our staff.'],
                ['03', 'Submit application',                          'Complete the school\'s application form. See the documents required below.'],
                ['04', 'Aptitude test',                               'Applicants for Grade 7 and Grade 12 sit an aptitude test that assesses English literacy, numeracy, and the foundational competencies required for examination-grade work.'],
                ['05', 'Admission decision',                          'We confirm admission outcomes within five working days of the application being complete.'],
                ['06', 'Pay term fees and confirm enrolment',         'On admission confirmation, the first term\'s fees are payable by the published deadline. Your child\'s place is then secured and orientation arrangements are communicated.'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($steps as $s)
                <div style="display: flex; gap: 20px; align-items: flex-start; padding: 24px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,200,61,0.28); border-radius: 20px;">
                    <div style="flex-shrink: 0; width: 56px; height: 56px; border-radius: 14px; background: var(--site-sun); color: var(--site-navy); display: flex; align-items: center; justify-content: center; font-family: var(--site-display); font-weight: 800; font-size: 18px; letter-spacing: -0.02em;">{{ $s[0] }}</div>
                    <div>
                        <h3 style="margin: 0 0 6px; font-family: var(--site-display); font-weight: 700; font-size: 20px; color: #fff; letter-spacing: -0.01em;">{{ $s[1] }}</h3>
                        <p style="margin: 0; color: rgba(255,255,255,0.82); font-size: 15.5px; line-height: 1.55;">{{ $s[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     DOCUMENTS REQUIRED
     ============================================================ --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 1180px;">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="md:col-span-5">
                <span class="site-kicker">What to bring</span>
                <h2 class="site-h2" style="margin-top: 12px; max-width: 15ch;">
                    Documents you'll need.
                </h2>
                <p class="site-lead" style="margin-top: 20px; max-width: 40ch;">
                    Have these ready before you visit — the school office collects each at application.
                </p>
            </div>
            <div class="md:col-span-7">
                @php
                    $docs = [
                        'The completed application form (available from the school office).',
                        "A copy of the child's birth certificate (or under-five card for ECE applicants).",
                        'The most recent school report (for transferring pupils).',
                        'A clear passport-size photograph.',
                        "Any specialist medical or educational reports relevant to the child's care.",
                    ];
                @endphp
                <ol style="margin: 0; padding: 0; list-style: none; counter-reset: docs;">
                    @foreach($docs as $d)
                        <li style="counter-increment: docs; display: grid; grid-template-columns: 48px 1fr; gap: 20px; padding: 18px 0; border-bottom: 1px solid var(--site-line); align-items: center;">
                            <span style="display: flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 12px; background: var(--site-sun-soft); color: var(--site-sun-ink); font-family: var(--site-display); font-weight: 800; font-size: 17px;">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <span style="font-size: 16.5px; line-height: 1.55; color: var(--site-ink);">{{ $d }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     FORMS & DOWNLOADS
     ============================================================ --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap">
        <div style="margin-bottom: 48px; max-width: 780px;">
            <span class="site-kicker">Forms &amp; Downloads</span>
            <h2 class="site-h2" style="margin-top: 12px; max-width: 22ch;">
                Download and fill in ahead of your visit.
            </h2>
            <p class="site-lead" style="margin-top: 20px;">
                Print the three forms below, complete them at home, and bring them to the school office on the day of your visit. Each is a PDF that opens on any phone or computer.
            </p>
        </div>

        @php
            $forms = [
                ['Form I',   '1-admission-enrolment-form.pdf', 'Admission Enrolment Form',  'Start here. Complete this form for every child you are enrolling — new or returning.'],
                ['Form II',  '2-medical-information-form.pdf', 'Medical Information Form',  'Allergies, medications and emergency contacts. Held confidentially by the school nurse.'],
                ['Form III', '3-consent-forms.pdf',            'Consent Forms',             'Photo, transport, trips and school-clinic authorisations. Parent or guardian to sign.'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            @foreach($forms as $f)
                <a href="/documents/{{ $f[1] }}" download class="site-card" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; gap: 12px; border-top: 3px solid var(--site-red);">
                    <span class="site-kicker">{{ $f[0] }}</span>
                    <h3 class="site-h3">{{ $f[2] }}</h3>
                    <p style="margin: 0 0 auto; color: var(--site-body); font-size: 15.5px; line-height: 1.55;">{{ $f[3] }}</p>
                    <span style="margin-top: 8px; display: inline-flex; align-items: center; gap: 8px; font-size: 14px; font-weight: 700; color: var(--site-navy);">
                        <i class='bx bx-download'></i> Download PDF
                    </span>
                </a>
            @endforeach
        </div>

        <p style="margin-top: 28px; color: var(--site-muted); font-size: 14px; font-style: italic;">
            Looking for more? See every school document on the <a href="/downloads/" style="color: var(--site-navy-2); text-decoration: underline; text-decoration-thickness: 2px; text-underline-offset: 3px;">Downloads</a> page.
        </p>
    </div>
</section>

{{-- ============================================================
     PRACTICALITIES — fees, transport, what to bring
     ============================================================ --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap">
        <div style="margin-bottom: 48px; max-width: 780px;">
            <span class="site-kicker">Practicalities</span>
            <h2 class="site-h2" style="margin-top: 12px; max-width: 22ch;">
                Fees, transport, and what your child will need.
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <a href="/admissions/fees" class="site-card" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; gap: 12px;">
                <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sun-soft); color: var(--site-sun-ink); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                    <i class="bx bxs-credit-card"></i>
                </div>
                <h3 class="site-h3">School fees</h3>
                <p style="margin: 0; color: var(--site-body); font-size: 15.5px; line-height: 1.55;">Term-by-term billing, four-month payment window. Referral discount of K200 per referred child for existing parents.</p>
                <span style="margin-top: auto; font-size: 14px; font-weight: 700; color: var(--site-red);">View fees policy →</span>
            </a>

            <div class="site-card" style="display: flex; flex-direction: column; gap: 12px;">
                <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sky-2); color: var(--site-navy); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                    <i class="bx bxs-bus"></i>
                </div>
                <h3 class="site-h3">Transport</h3>
                <p style="margin: 0; color: var(--site-body); font-size: 15.5px; line-height: 1.55;">Four school buses serve the Chililabombwe area on established routes. Bookable termly, invoiced separately from tuition fees.</p>
            </div>

            <div class="site-card" style="display: flex; flex-direction: column; gap: 12px;">
                <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sky-2); color: var(--site-navy); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                    <i class="bx bxs-backpack"></i>
                </div>
                <h3 class="site-h3">What your child will need</h3>
                <ul style="margin: 0; padding: 0; list-style: none; color: var(--site-body); font-size: 15.5px; line-height: 1.7;">
                    <li>› School uniform</li>
                    <li>› Stationery (list issued by grade)</li>
                    <li>› Sports kit (Primary &amp; Secondary)</li>
                    <li>› School bag and labelled water bottle</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     CTA
     ============================================================ --}}
<section class="site-section" style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color: #fff; text-align: center;">
    <div class="site-wrap" style="max-width: 780px;">
        <span class="site-kicker" style="color: var(--site-sun);">Ready when you are</span>
        <h2 style="margin: 12px 0 20px; font-family: var(--site-display); font-weight: 800; font-size: clamp(34px, 4.2vw, 56px); line-height: 1.02; letter-spacing: -0.03em; color: #fff;">
            Ready to <span style="color: var(--site-sun);">apply?</span>
        </h2>
        <p style="margin: 0 auto; max-width: 55ch; font-size: 17.5px; line-height: 1.6; color: rgba(255,255,255,0.85);">
            Reach out today to begin the process. We'll guide you through each step.
        </p>
        <div style="margin-top: 32px; display: flex; flex-wrap: wrap; justify-content: center; gap: 12px;">
            <a href="/admissions/apply" class="site-btn site-btn-sun">Start application</a>
            <a href="tel:+260972266217" class="site-btn site-btn-ghost-light">
                <i class='bx bxs-phone'></i> Call admissions
            </a>
        </div>
    </div>
</section>

@endsection

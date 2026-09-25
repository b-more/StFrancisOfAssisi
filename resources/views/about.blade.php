@extends('layouts.app')

@section('title', 'About')
@section('description', 'Founded in 2021 by Mr. Francis Mulenga. Christian-foundation private school in Chililabombwe with TCZ-licensed teachers, ECE through Grade 12, and a published 2026-2028 Strategic Plan.')

@section('content')

{{-- ============================================================
     HERO
     ============================================================ --}}
<section style="background: linear-gradient(180deg, var(--site-sky) 0%, #fff 100%); padding-block: clamp(60px, 8vw, 120px) clamp(40px, 6vw, 80px);">
    <div class="site-wrap">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <span class="site-pill site-pill-sun">About the school</span>
                <h1 class="font-display" style="margin: 20px 0 18px; font-size: clamp(44px, 6vw, 88px); line-height: 1.02; letter-spacing: -0.03em; color: var(--site-navy); max-width: 14ch;">
                    A school built on <span style="color: var(--site-red);">conviction.</span>
                </h1>
                <p class="site-lead" style="max-width: 52ch;">
                    Christian foundation. Qualified teachers. A published Strategic Plan. Five years on — and just getting started.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 12px; margin-top: 32px;">
                    <a href="/admissions" class="site-btn site-btn-red">Begin an application</a>
                    <a href="/contact" class="site-btn site-btn-line">Book a school tour</a>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div style="border-radius: 28px; overflow: hidden; box-shadow: 0 30px 60px -20px rgba(15, 30, 51, .35); aspect-ratio: 4/5; background: var(--site-sky-2);">
                    <img src="/images/campus/campus2.jpg" alt="The school campus" style="width:100%; height:100%; object-fit: cover; display: block;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Motto ribbon (modernised — sun on navy, no crosses) --}}
<div style="background: var(--site-navy-deep); color: var(--site-sun); padding: 18px 20px; text-align: center;">
    <span style="font-family: var(--site-display); letter-spacing: .18em; text-transform: uppercase; font-size: clamp(11px, 1.2vw, 15px); font-weight: 700;">
        For God · For Country · For Every Child
    </span>
</div>

{{-- ============================================================
     OUR STORY
     ============================================================ --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 1180px;">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="lg:col-span-4">
                <span class="site-kicker">Our story</span>
                <h2 class="site-h2" style="margin-top: 12px; max-width: 14ch;">
                    From a small early-years group to ECE through Grade 12.
                </h2>
            </div>
            <div class="lg:col-span-8" style="font-size: 17.5px; line-height: 1.7; color: var(--site-body);">
                <p style="margin: 0 0 18px;">
                    St. Francis of Assisi Private School was founded in <strong style="color: var(--site-navy);">2021 by Mr Francis Mulenga</strong> as an answer to a clear local need: a private school in Chililabombwe that would deliver quality education on a Christian foundation, with teachers who hold real credentials and a learning environment that rewards both effort and character.
                </p>
                <p style="margin: 0 0 18px;">
                    Five years on, we have grown from a small early-years group to a fully-fledged school of <strong style="color: var(--site-navy);">500+ learners</strong> across Early Childhood, Primary and Secondary. We are a registered ECZ examination centre, our staff is fully professionalised, our finances are sound, and our facilities continue to expand.
                </p>
                <p style="margin: 0;">
                    In <strong style="color: var(--site-navy);">April 2026</strong> the school appointed its first substantive School Principal, <strong style="color: var(--site-navy);">Mr Blessmore Mulenga</strong> — a deliberate move toward formalised academic leadership and a published Strategic Plan that places academic excellence, universal literacy, talent development, digital transformation, financial sustainability and community engagement at the centre of our work over 2026 – 2028.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     MISSION & VISION — navy anchor
     ============================================================ --}}
<section class="site-section" style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color: #fff; position: relative; overflow: hidden;">
    <div style="position: absolute; inset: 0; opacity: 0.08; background-image: radial-gradient(circle at 15% 20%, var(--site-sun) 1px, transparent 1px), radial-gradient(circle at 80% 70%, var(--site-sun) 1px, transparent 1px); background-size: 100px 100px, 140px 140px; pointer-events: none;"></div>
    <div class="site-wrap" style="position: relative;">
        <div style="margin-bottom: 48px; max-width: 720px;">
            <span class="site-kicker" style="color: var(--site-sun);">Mission &amp; vision</span>
            <h2 style="margin-top: 12px; font-family: var(--site-display); font-weight: 800; font-size: clamp(34px, 4.2vw, 56px); line-height: 1.02; letter-spacing: -0.03em; color: #fff; max-width: 22ch;">
                What we're for. Where we're headed.
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <article style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,200,61,0.35); border-radius: 20px; padding: 32px;">
                <span class="site-kicker" style="color: var(--site-sun);">Our mission</span>
                <p style="margin-top: 14px; font-family: var(--site-display); font-weight: 700; font-size: clamp(20px, 2vw, 26px); line-height: 1.25; color: #fff;">
                    To provide high-quality education based on a Christian foundation for the betterment of the individual and the country.
                </p>
            </article>
            <article style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,200,61,0.35); border-radius: 20px; padding: 32px;">
                <span class="site-kicker" style="color: var(--site-sun);">Our vision · 2026 – 2028</span>
                <p style="margin-top: 14px; font-family: var(--site-display); font-weight: 700; font-size: clamp(18px, 1.7vw, 22px); line-height: 1.3; color: #fff;">
                    By April 2028, St. Francis will be the most academically respected private school in Chililabombwe — producing distinction-band ECZ candidates and well-rounded learners who leave the school able to read, write, think, perform, lead, and serve. <em style="color: var(--site-sun); font-style: italic;">For God and for Country.</em>
                </p>
            </article>
        </div>
    </div>
</section>

{{-- ============================================================
     CORE VALUES
     ============================================================ --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap">
        <div style="margin-bottom: 48px; max-width: 720px;">
            <span class="site-kicker">Our core values</span>
            <h2 class="site-h2" style="margin-top: 12px; max-width: 22ch;">
                Four words that govern every decision.
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @php
                $vals = [
                    ['bxs-shield-alt-2', 'Integrity',       'In every relationship and every transaction.'],
                    ['bxs-bulb',         'Innovation',      'In teaching and in operations.'],
                    ['bxs-briefcase',    'Professionalism', 'In conduct and in delivery.'],
                    ['bxs-balance',      'Fairness',        'In the application of rules and the distribution of opportunity.'],
                ];
            @endphp
            @foreach($vals as $v)
                <div class="site-card">
                    <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--site-sun-soft); color: var(--site-sun-ink); display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 16px;">
                        <i class="bx {{ $v[0] }}"></i>
                    </div>
                    <h3 class="site-h3">{{ $v[1] }}</h3>
                    <p style="margin: 6px 0 0; color: var(--site-body); font-size: 15.5px; line-height: 1.55;">{{ $v[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     CHRISTIAN FOUNDATION
     ============================================================ --}}
<section class="site-section" style="background: #fff;">
    <div class="site-wrap" style="max-width: 1180px;">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
            <div class="lg:col-span-5">
                <div style="border-radius: 28px; overflow: hidden; box-shadow: 0 28px 56px -22px rgba(15, 30, 51, .28); aspect-ratio: 4/5; background: var(--site-sky-2);">
                    <img src="/images/church.png" alt="Christian foundation at St. Francis" style="width: 100%; height: 100%; object-fit: cover; display: block;" onerror="this.style.display='none'; this.parentElement.style.background='linear-gradient(180deg, var(--site-sky) 0%, var(--site-sky-2) 100%)';">
                </div>
            </div>
            <div class="lg:col-span-7">
                <span class="site-kicker">Christian foundation</span>
                <h2 class="site-h2" style="margin-top: 12px; max-width: 22ch;">
                    Faith as foundation, not condition.
                </h2>
                <div style="margin-top: 22px; font-size: 17.5px; line-height: 1.7; color: var(--site-body);">
                    <p style="margin: 0 0 16px;">
                        We are a Christian-foundation school. We are <strong style="color: var(--site-navy);">not affiliated to any single church or denomination</strong>, and we welcome learners of every Christian tradition and of other faiths.
                    </p>
                    <p style="margin: 0;">
                        Christian principles shape our daily practice through morning devotions, our values-based code of conduct, and a culture of service to others. Our motto, <em style="color: var(--site-red); font-style: italic; font-weight: 600;">For God and Country</em>, expresses our conviction that learning is a gift to be used for the good of the wider community.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     LEADERSHIP
     ============================================================ --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap" style="max-width: 1180px;">
        <div style="margin-bottom: 40px; text-align: center; max-width: 640px; margin-inline: auto;">
            <span class="site-kicker">Leadership</span>
            <h2 class="site-h2" style="margin-top: 12px;">
                The people who carry the school.
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" style="margin-bottom: 28px;">
            <article class="site-card" style="border-top: 3px solid var(--site-red);">
                <span class="site-kicker">Proprietor &amp; Executive Director</span>
                <h3 class="site-h3" style="margin: 8px 0 10px;">Mr Francis Mulenga</h3>
                <p style="margin: 0; font-size: 16px; line-height: 1.6; color: var(--site-body);">
                    Founded the school in 2021 and continues to chair the Board of Directors, providing strategic governance and overall direction.
                </p>
            </article>
            <article class="site-card" style="border-top: 3px solid var(--site-red);">
                <span class="site-kicker">School Principal · Since 1 April 2026</span>
                <h3 class="site-h3" style="margin: 8px 0 10px;">Mr Blessmore Mulenga</h3>
                <p style="margin: 0; font-size: 16px; line-height: 1.6; color: var(--site-body);">
                    The first to hold this office. Leads the day-to-day operation of the school and is accountable to the Board for the delivery of the 2026 – 2028 Strategic Plan.
                </p>
            </article>
        </div>

        <div class="site-card">
            <span class="site-kicker">Senior Management Team</span>
            <ul style="margin: 18px 0 0; padding: 0; list-style: none; display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 10px 32px; font-size: 16px; color: var(--site-body);">
                <li style="display: flex; gap: 10px;"><span style="color: var(--site-sun-ink);">›</span> Head Teacher, Secondary Section</li>
                <li style="display: flex; gap: 10px;"><span style="color: var(--site-sun-ink);">›</span> Head Teacher, Primary Section</li>
                <li style="display: flex; gap: 10px;"><span style="color: var(--site-sun-ink);">›</span> Deputy Head Teacher</li>
                <li style="display: flex; gap: 10px;"><span style="color: var(--site-sun-ink);">›</span> School Accountant</li>
                <li style="display: flex; gap: 10px;"><span style="color: var(--site-sun-ink);">›</span> Section Secretaries (Primary and Secondary)</li>
                <li style="display: flex; gap: 10px;"><span style="color: var(--site-sun-ink);">›</span> Heads of Department (across academic subjects)</li>
            </ul>
        </div>
    </div>
</section>

{{-- ============================================================
     GOVERNANCE
     ============================================================ --}}
<section style="background: #fff; padding-block: clamp(48px, 6vw, 96px);">
    <div class="site-wrap" style="max-width: 780px; text-align: center;">
        <span class="site-kicker">Governance</span>
        <h2 style="margin-top: 12px; font-family: var(--site-display); font-weight: 800; font-size: clamp(28px, 3.4vw, 44px); line-height: 1.1; letter-spacing: -0.02em; color: var(--site-navy);">
            Our Constitution and Code of Conduct.
        </h2>
        <p style="margin: 20px auto 0; max-width: 60ch; font-size: 17px; line-height: 1.7; color: var(--site-body);">
            The school operates under a written <strong style="color: var(--site-navy);">Constitution (Version 2.0)</strong> and a binding <strong style="color: var(--site-navy);">Ethical Code of Conduct</strong>. These documents define the rights and responsibilities of every learner, parent, staff member, Board member, and visitor. Copies are available on request from the school office.
        </p>
    </div>
</section>

{{-- ============================================================
     CTA — navy band
     ============================================================ --}}
<section class="site-section" style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color: #fff; text-align: center;">
    <div class="site-wrap" style="max-width: 780px;">
        <h2 style="margin: 0; font-family: var(--site-display); font-weight: 800; font-size: clamp(34px, 4.2vw, 56px); line-height: 1.02; letter-spacing: -0.03em; color: #fff;">
            Want to see the school <span style="color: var(--site-sun);">for yourself?</span>
        </h2>
        <p style="margin: 20px auto 0; max-width: 55ch; font-size: 17.5px; line-height: 1.6; color: rgba(255,255,255,0.85);">
            Book a tour, meet our staff, see our facilities, and ask any question you wish.
        </p>
        <div style="margin-top: 32px; display: flex; flex-wrap: wrap; justify-content: center; gap: 12px;">
            <a href="/contact" class="site-btn site-btn-sun">Book a school tour</a>
            <a href="/admissions" class="site-btn site-btn-ghost-light">View admissions</a>
        </div>
    </div>
</section>

@endsection

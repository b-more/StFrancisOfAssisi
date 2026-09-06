@extends('layouts.app')

@section('title', 'About')
@section('description', 'Founded in 2021 by Mr. Francis Mulenga. Christian-foundation private school in Chililabombwe with TCZ-licensed teachers, ECE through Grade 12, and a published 2026-2028 Strategic Plan.')

@section('content')
<!-- Hero — navy-forward -->
<section class="navy-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-11 gap-8 lg:gap-16 items-center">
            <div class="lg:col-span-6">
                <p class="text-secondary tracking-[.28em] uppercase text-xs font-semibold mb-5">About the school</p>
                <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-semibold leading-[1.03] tracking-tight" style="max-width: 14ch;">
                    A school built on <em class="italic text-secondary">conviction.</em>
                </h1>
                <p class="mt-6 font-display text-xl text-white/85 leading-[1.55]" style="max-width: 46ch;">
                    Christian foundation. Qualified teachers. A formal Strategic Plan. Five years on — and just getting started.
                </p>
            </div>
            <div class="lg:col-span-5">
                <div class="arched arched-lg mx-auto" style="max-width: 500px; height: clamp(360px, 55vw, 480px); box-shadow: 0 20px 60px -20px rgba(0,0,0,.5);">
                    <img src="/images/campus/campus2.jpg" alt="The school campus">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="ribbon">
    <span>For God</span><span class="cross">✠</span><span>For Country</span><span class="cross">✠</span><span>For Every Child</span>
</div>

<!-- I. Our story -->
<section class="py-20 md:py-28 bg-paper-warm">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="lg:col-span-3">
                <div class="numeral mb-4"><span class="n">I</span><span class="r"></span></div>
                <p class="text-accent tracking-[.28em] uppercase text-xs font-semibold">Our story</p>
            </div>
            <div class="lg:col-span-9">
                <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight mb-6" style="max-width: 22ch;">
                    From a small early-years group to a fully-fledged ECE-through-Grade-12 school.
                </h2>
                <div class="space-y-5 font-display text-lg md:text-xl text-gray-700 leading-relaxed">
                    <p>St. Francis of Assisi Private School was founded in <strong class="text-primary">2021 by Mr Francis Mulenga</strong> as an answer to a clear local need: a private school in Chililabombwe that would deliver quality education on a Christian foundation, with teachers who hold real credentials and a learning environment that rewards both effort and character.</p>
                    <p>Five years on, we have grown from a small early-years group to a fully-fledged school of <strong class="text-primary">500+ learners</strong> across Early Childhood, Primary and Secondary. We are a registered ECZ examination centre, our staff is fully professionalised, our finances are sound, and our facilities continue to expand.</p>
                    <p>In <strong class="text-primary">April 2026</strong> the school appointed its first substantive School Principal, <strong class="text-primary">Mr Blessmore Mulenga</strong> — a deliberate move toward formalised academic leadership and a published Strategic Plan that places academic excellence, universal literacy, talent development, digital transformation, financial sustainability and community engagement at the centre of our work over 2026 – 2028.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- II. Mission & Vision — navy anchor -->
<section class="py-20 md:py-28 bg-primary-dark text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <div class="numeral on-dark mb-4"><span class="n">II</span><span class="r"></span></div>
            <p class="text-secondary uppercase tracking-[.28em] text-xs font-semibold mb-3">Mission &amp; vision</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold leading-tight" style="max-width: 22ch;">What we're for. Where we're headed.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-8 border-l-2 border-secondary bg-white/5">
                <p class="text-secondary uppercase tracking-[.22em] text-xs font-semibold mb-4">Our mission</p>
                <p class="font-display text-2xl md:text-3xl leading-snug">To provide high-quality education based on a Christian foundation for the betterment of the individual and the country.</p>
            </div>
            <div class="p-8 border-l-2 border-secondary bg-white/5">
                <p class="text-secondary uppercase tracking-[.22em] text-xs font-semibold mb-4">Our vision · 2026 – 2028</p>
                <p class="font-display text-xl md:text-2xl leading-snug">By April 2028, St. Francis will be the most academically respected private school in Chililabombwe — producing distinction-band ECZ candidates and well-rounded learners who leave the school able to read, write, think, perform, lead, and serve. <em class="italic text-secondary">For God and for Country.</em></p>
            </div>
        </div>
    </div>
</section>

<!-- III. Core values -->
<section class="py-20 md:py-28 bg-paper">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <div class="numeral mb-4"><span class="n">III</span><span class="r"></span></div>
            <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">Our core values</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight" style="max-width: 22ch;">Four words that govern every decision.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div>
                <div class="h-1 w-10 bg-primary mb-4"></div>
                <div class="text-primary text-3xl mb-3"><i class="bx bxs-shield-alt-2"></i></div>
                <h3 class="font-display text-2xl font-semibold text-primary mb-2">Integrity</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed">In every relationship and every transaction.</p>
            </div>
            <div>
                <div class="h-1 w-10 bg-primary mb-4"></div>
                <div class="text-primary text-3xl mb-3"><i class="bx bxs-bulb"></i></div>
                <h3 class="font-display text-2xl font-semibold text-primary mb-2">Innovation</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed">In teaching and in operations.</p>
            </div>
            <div>
                <div class="h-1 w-10 bg-primary mb-4"></div>
                <div class="text-primary text-3xl mb-3"><i class="bx bxs-briefcase"></i></div>
                <h3 class="font-display text-2xl font-semibold text-primary mb-2">Professionalism</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed">In conduct and in delivery.</p>
            </div>
            <div>
                <div class="h-1 w-10 bg-primary mb-4"></div>
                <div class="text-primary text-3xl mb-3"><i class="bx bxs-balance"></i></div>
                <h3 class="font-display text-2xl font-semibold text-primary mb-2">Fairness</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed">In the application of rules and the distribution of opportunity.</p>
            </div>
        </div>
    </div>
</section>

<!-- IV. Christian foundation -->
<section class="py-20 md:py-24 bg-paper-deep">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="lg:col-span-3">
                <div class="numeral mb-4"><span class="n">IV</span><span class="r"></span></div>
                <p class="text-accent tracking-[.28em] uppercase text-xs font-semibold">Christian foundation</p>
            </div>
            <div class="lg:col-span-9">
                <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight mb-6" style="max-width: 22ch;">Faith as foundation, not condition.</h2>
                <div class="space-y-4 font-display text-lg md:text-xl text-gray-700 leading-relaxed">
                    <p>We are a Christian-foundation school. We are <strong class="text-primary">not affiliated to any single church or denomination</strong>, and we welcome learners of every Christian tradition and of other faiths.</p>
                    <p>Christian principles shape our daily practice through morning devotions, our values-based code of conduct, and a culture of service to others. Our motto, <em class="italic text-accent">For God and Country</em>, expresses our conviction that learning is a gift to be used for the good of the wider community.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- V. Leadership -->
<section class="py-20 md:py-28 bg-paper">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-center max-w-3xl mx-auto">
            <div class="numeral mb-4" style="justify-content: center;"><span class="n">V</span><span class="r"></span></div>
            <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">Leadership</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight">The people who carry the school.</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
            <article class="bg-paper-warm p-8 border-l-4 border-primary">
                <p class="text-[11px] uppercase tracking-[.22em] text-accent font-semibold mb-2">Proprietor &amp; Executive Director</p>
                <h3 class="font-display text-2xl md:text-3xl text-primary font-semibold mb-3">Mr Francis Mulenga</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed">Founded the school in 2021 and continues to chair the Board of Directors, providing strategic governance and overall direction.</p>
            </article>
            <article class="bg-paper-warm p-8 border-l-4 border-primary">
                <p class="text-[11px] uppercase tracking-[.22em] text-accent font-semibold mb-2">School Principal · Since 1 April 2026</p>
                <h3 class="font-display text-2xl md:text-3xl text-primary font-semibold mb-3">Mr Blessmore Mulenga</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed">The first to hold this office. Leads the day-to-day operation of the school and is accountable to the Board for the delivery of the 2026 – 2028 Strategic Plan.</p>
            </article>
        </div>

        <div class="bg-paper-warm p-8 border border-rule">
            <p class="text-accent uppercase tracking-[.22em] text-xs font-semibold mb-3">Senior Management Team</p>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-8 font-display text-lg text-gray-700">
                <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> Head Teacher, Secondary Section</li>
                <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> Head Teacher, Primary Section</li>
                <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> Deputy Head Teacher</li>
                <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> School Accountant</li>
                <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> Section Secretaries (Primary and Secondary)</li>
                <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> Heads of Department (across academic subjects)</li>
            </ul>
        </div>
    </div>
</section>

<!-- VI. Governance -->
<section class="py-16 bg-paper-warm">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="numeral mb-4" style="justify-content: center;"><span class="n">VI</span><span class="r"></span></div>
        <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">Governance</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-5">Our Constitution and Code of Conduct.</h2>
        <p class="font-display text-lg text-gray-700 leading-relaxed max-w-2xl mx-auto">
            The school operates under a written <strong class="text-primary">Constitution (Version 2.0)</strong> and a binding <strong class="text-primary">Ethical Code of Conduct</strong>. These documents define the rights and responsibilities of every learner, parent, staff member, Board member, and visitor. Copies are available on request from the school office.
        </p>
    </div>
</section>

<!-- CTA -->
<section class="py-20 md:py-24 bg-primary text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-4xl md:text-5xl font-semibold leading-tight" style="max-width: 22ch; margin: 0 auto;">Want to see the school <em class="italic text-secondary">for yourself?</em></h2>
        <p class="font-display text-lg md:text-xl text-white/85 leading-relaxed mt-5 max-w-2xl mx-auto">Book a tour, meet our staff, see our facilities, and ask any question you wish.</p>
        <div class="mt-8 flex flex-wrap justify-center gap-3">
            <a href="/contact" class="inline-flex items-center bg-secondary text-primary px-7 py-4 font-semibold hover:bg-yellow-300 transition-all">Book a school tour</a>
            <a href="/admissions" class="inline-flex items-center border border-white/40 text-white px-7 py-4 font-medium hover:bg-white/10 transition-all">View admissions</a>
        </div>
    </div>
</section>
@endsection

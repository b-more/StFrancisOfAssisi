@extends('layouts.app')

@section('title', 'Admissions')
@section('description', 'Apply to St. Francis of Assisi. Step-by-step guide for Early Childhood Education, Primary, and Secondary admission. Aptitude testing for examination grades, term-by-term billing, and a referral discount.')

@section('content')
<!-- Hero — navy-forward split with arched photo -->
<section class="navy-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-11 gap-8 lg:gap-16 items-center">
            <div class="lg:col-span-5">
                <p class="text-secondary tracking-[.28em] uppercase text-xs font-semibold mb-5">Admissions · 2026 intake</p>
                <h1 class="font-display text-5xl md:text-6xl font-semibold leading-[1.03] tracking-tight" style="max-width: 15ch;">
                    Bring us your <em class="italic text-secondary">child.</em> We will do the rest.
                </h1>
                <p class="mt-6 font-display text-xl text-white/85 leading-[1.55]" style="max-width: 46ch;">
                    Applications for Baby Class through Grade 12 are accepted year-round, with priority given to those received at least four weeks before the start of term.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="/admissions/apply" class="inline-flex items-center bg-secondary text-primary px-7 py-3.5 font-semibold hover:bg-yellow-300 transition-all">Begin an application</a>
                    <a href="/contact" class="inline-flex items-center border border-white/40 text-white px-7 py-3.5 font-medium hover:bg-white/10 transition-all">Book a campus visit</a>
                </div>
            </div>
            <div class="lg:col-span-6">
                <div class="arched arched-lg mx-auto" style="max-width: 640px; height: clamp(400px, 60vw, 560px); box-shadow: 0 20px 60px -20px rgba(0,0,0,.5);">
                    <img src="/images/ecl/ecl5.jpg" alt="Early Childhood classroom">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Motto ribbon -->
<div class="ribbon">
    <span>For God</span><span class="cross">✠</span><span>For Country</span><span class="cross">✠</span><span>For Every Child</span>
</div>

<!-- I. Intro letter -->
<section class="py-20 md:py-28 bg-paper-warm">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="lg:col-span-3">
                <div class="numeral mb-4"><span class="n">I</span><span class="r"></span></div>
                <p class="text-accent tracking-[.28em] uppercase text-xs font-semibold">A word first</p>
            </div>
            <div class="lg:col-span-9">
                <p class="font-display text-lg md:text-xl text-gray-700 leading-relaxed">
                    Choosing a school is one of the most important decisions you will make for your child. We invite you to visit, meet our staff, see the classrooms, and ask any question you wish before you decide. We accept applications throughout the year, but priority is given to applications received <strong class="text-primary">at least four weeks before the start of each term</strong>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- II. Who we accept -->
<section class="py-20 md:py-28 bg-paper">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <div class="numeral mb-4"><span class="n">II</span><span class="r"></span></div>
            <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">Who we accept</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight" style="max-width: 20ch;">Open to learners at every stage.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
            <article>
                <div class="arched arched-sm mb-5" style="height: 240px;"><img src="/images/ecl/ecl5.jpg" alt="Early Childhood"></div>
                <div class="h-1 w-10 bg-primary mb-3"></div>
                <p class="text-[11px] tracking-[.22em] uppercase text-muted mb-2">Ages 3 – 6</p>
                <h3 class="font-display text-2xl font-semibold text-primary mb-2">Early Childhood</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed">Baby Class, Middle Class, and Reception.</p>
            </article>
            <article>
                <div class="arched arched-sm mb-5" style="height: 240px;"><img src="/images/primary/primary2.jpg" alt="Primary"></div>
                <div class="h-1 w-10 bg-primary mb-3"></div>
                <p class="text-[11px] tracking-[.22em] uppercase text-muted mb-2">Grades 1 – 7</p>
                <h3 class="font-display text-2xl font-semibold text-primary mb-2">Primary</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed">All grades. Aptitude test required for entry into Grade 7.</p>
            </article>
            <article>
                <div class="arched arched-sm mb-5" style="height: 240px;"><img src="/images/secondary/secondary2.jpg" alt="Secondary"></div>
                <div class="h-1 w-10 bg-primary mb-3"></div>
                <p class="text-[11px] tracking-[.22em] uppercase text-muted mb-2">Grades 8 – 12</p>
                <h3 class="font-display text-2xl font-semibold text-primary mb-2">Secondary</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed">Grades 8 through 12. Aptitude test required for entry into Grade 12.</p>
            </article>
        </div>
        <p class="font-display italic text-muted mt-8 max-w-3xl">
            — Entry into examination grades (Grade 7 and Grade 12) is subject to passing an aptitude test, which assesses readiness for examination-grade work.
        </p>
    </div>
</section>

<!-- III. Process — six steps, navy anchor -->
<section class="py-20 md:py-28 bg-primary-dark text-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <div class="numeral on-dark mb-4"><span class="n">III</span><span class="r"></span></div>
            <p class="text-secondary uppercase tracking-[.28em] text-xs font-semibold mb-3">How to apply</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold leading-tight" style="max-width: 22ch;">Six steps. Five working days for a decision.</h2>
        </div>

        @php
            $steps = [
                ['I',   'Enquire',                                     'Telephone or visit the school office to express your interest. We will explain availability in your child\'s grade and answer any preliminary questions.'],
                ['II',  'Visit and tour',                              'Book a school tour at a time convenient to you. You will see classrooms, laboratories, the library, the playground, and meet members of our staff.'],
                ['III', 'Submit application',                          'Complete the school\'s application form. See the documents required below.'],
                ['IV',  'Aptitude test (examination grades only)',     'Applicants for Grade 7 and Grade 12 sit an aptitude test. It assesses English literacy, numeracy, and the foundational competencies required for examination-grade work.'],
                ['V',   'Admission decision',                          'We confirm admission outcomes within five working days of the application being complete.'],
                ['VI',  'Pay term fees and confirm enrolment',         'On admission confirmation, the first term\'s fees are payable by the published deadline. Your child\'s place is then secured and orientation arrangements are communicated.'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($steps as $s)
                <div class="flex gap-6 items-start p-6 bg-white/5 border-l-2 border-secondary">
                    <div class="flex-shrink-0 w-14 h-14 rounded-full border border-secondary/60 flex items-center justify-center font-display text-xl font-semibold text-secondary bg-primary-dark">{{ $s[0] }}</div>
                    <div>
                        <h3 class="font-display text-xl font-semibold text-white mb-1">{{ $s[1] }}</h3>
                        <p class="font-display text-white/80 leading-relaxed">{{ $s[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- IV. Documents required -->
<section class="py-20 md:py-24 bg-paper-deep">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="lg:col-span-5">
                <div class="numeral mb-4"><span class="n">IV</span><span class="r"></span></div>
                <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">What to bring</p>
                <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight" style="max-width: 20ch;">Documents you'll need.</h2>
                <p class="font-display text-lg text-gray-700 leading-relaxed mt-5" style="max-width: 40ch;">
                    Have these ready before you visit — the school office collects each at application.
                </p>
            </div>
            <div class="lg:col-span-7">
                <ul>
                    <li class="grid grid-cols-12 gap-4 py-4 items-center border-b border-rule"><span class="col-span-1 font-display text-lg font-semibold" style="color:#B08A3E;">I</span><span class="col-span-11 font-display text-lg text-gray-800">The completed application form (available from the school office).</span></li>
                    <li class="grid grid-cols-12 gap-4 py-4 items-center border-b border-rule"><span class="col-span-1 font-display text-lg font-semibold" style="color:#B08A3E;">II</span><span class="col-span-11 font-display text-lg text-gray-800">A copy of the child's birth certificate (or under-five card for ECE applicants).</span></li>
                    <li class="grid grid-cols-12 gap-4 py-4 items-center border-b border-rule"><span class="col-span-1 font-display text-lg font-semibold" style="color:#B08A3E;">III</span><span class="col-span-11 font-display text-lg text-gray-800">The most recent school report (for transferring pupils).</span></li>
                    <li class="grid grid-cols-12 gap-4 py-4 items-center border-b border-rule"><span class="col-span-1 font-display text-lg font-semibold" style="color:#B08A3E;">IV</span><span class="col-span-11 font-display text-lg text-gray-800">A clear passport-size photograph.</span></li>
                    <li class="grid grid-cols-12 gap-4 py-4 items-center"><span class="col-span-1 font-display text-lg font-semibold" style="color:#B08A3E;">V</span><span class="col-span-11 font-display text-lg text-gray-800">Any specialist medical or educational reports relevant to the child's care.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- V. Fees, transport, what to bring -->
<section class="py-20 md:py-24 bg-paper">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <div class="numeral mb-4"><span class="n">V</span><span class="r"></span></div>
            <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">Practicalities</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight" style="max-width: 22ch;">Fees, transport, and what your child will need.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
            <a href="/admissions/fees" class="block bg-paper-warm p-7 border-l-4 border-primary hover:shadow-lg transition group">
                <div class="text-primary text-3xl mb-3"><i class="bx bxs-credit-card"></i></div>
                <h3 class="font-display text-2xl text-primary font-semibold mb-2">School fees</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed mb-3">Term-by-term billing, four-month payment window. Referral discount of K200 per referred child for existing parents.</p>
                <span class="text-accent font-semibold text-sm">View fees policy →</span>
            </a>
            <div class="bg-paper-warm p-7 border-l-4 border-primary">
                <div class="text-primary text-3xl mb-3"><i class="bx bxs-bus"></i></div>
                <h3 class="font-display text-2xl text-primary font-semibold mb-2">Transport</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed">Four school buses serve the Chililabombwe area on established routes. Bookable termly, invoiced separately from tuition fees.</p>
            </div>
            <div class="bg-paper-warm p-7 border-l-4 border-primary">
                <div class="text-primary text-3xl mb-3"><i class="bx bxs-backpack"></i></div>
                <h3 class="font-display text-2xl text-primary font-semibold mb-2">What your child will need</h3>
                <ul class="font-display text-lg text-gray-700 leading-relaxed space-y-1">
                    <li>› School uniform</li>
                    <li>› Stationery (list issued by grade)</li>
                    <li>› Sports kit (Primary &amp; Secondary)</li>
                    <li>› School bag and labelled water bottle</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- VI. CTA -->
<section class="py-20 md:py-24 bg-primary text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="numeral on-dark mb-4" style="justify-content: center;"><span class="n">VI</span><span class="r"></span></div>
        <p class="text-secondary uppercase tracking-[.28em] text-xs font-semibold mb-3">Ready when you are</p>
        <h2 class="font-display text-4xl md:text-5xl font-semibold leading-tight" style="max-width: 20ch; margin: 0 auto;">Ready to <em class="italic text-secondary">apply?</em></h2>
        <p class="font-display text-lg md:text-xl text-white/85 leading-relaxed mt-5 max-w-2xl mx-auto">
            Reach out today to begin the process. We'll guide you through each step.
        </p>
        <div class="mt-8 flex flex-wrap justify-center gap-3">
            <a href="/admissions/apply" class="inline-flex items-center bg-secondary text-primary px-7 py-4 font-semibold hover:bg-yellow-300 transition-all">Start application</a>
            <a href="tel:+260972266217" class="inline-flex items-center gap-2 border border-white/40 text-white px-7 py-4 font-medium hover:bg-white/10 transition-all">
                <i class="bx bxs-phone"></i> Call admissions · +260 972 266 217
            </a>
        </div>
    </div>
</section>
@endsection

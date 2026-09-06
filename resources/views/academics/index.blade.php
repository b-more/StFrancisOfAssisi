@extends('layouts.app')

@section('title', 'Academics')
@section('description', 'Full Zambian curriculum from ECE to Grade 12, taught by TCZ-licensed teachers, supported by science, computer and home economics laboratories, plus the Parallel Reading and Writing Course (PRWC).')

@section('content')
<!-- Hero — navy-forward -->
<section class="navy-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-11 gap-8 lg:gap-16 items-center">
            <div class="lg:col-span-6">
                <p class="text-secondary tracking-[.28em] uppercase text-xs font-semibold mb-5">Academics</p>
                <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-semibold leading-[1.03] tracking-tight" style="max-width: 15ch;">
                    Toward the <em class="italic text-secondary">distinction band.</em>
                </h1>
                <p class="mt-6 font-display text-xl text-white/85 leading-[1.55]" style="max-width: 46ch;">
                    Full Zambian national curriculum, ECE through Grade 12, taught by TCZ-licensed teachers with the discipline of regular internal assessment.
                </p>
            </div>
            <div class="lg:col-span-5">
                <div class="arched arched-lg mx-auto" style="max-width: 500px; height: clamp(360px, 55vw, 480px); box-shadow: 0 20px 60px -20px rgba(0,0,0,.5);">
                    <img src="/images/secondary/secondary2.jpg" alt="Secondary classroom">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="ribbon">
    <span>For God</span><span class="cross">✠</span><span>For Country</span><span class="cross">✠</span><span>For Every Child</span>
</div>

<!-- I. Overview -->
<section class="py-20 md:py-28 bg-paper-warm">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="lg:col-span-3">
                <div class="numeral mb-4"><span class="n">I</span><span class="r"></span></div>
                <p class="text-accent tracking-[.28em] uppercase text-xs font-semibold">Overview</p>
            </div>
            <div class="lg:col-span-9">
                <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight mb-6" style="max-width: 22ch;">Beyond passing, toward distinction.</h2>
                <div class="space-y-5 font-display text-lg md:text-xl text-gray-700 leading-relaxed">
                    <p>We offer the full Zambian national curriculum from Early Childhood Education through Grade 12, taught by TCZ-licensed teachers in classrooms supported by science, computer, and home economics laboratories, a library, and the discipline of regular internal assessment.</p>
                    <p>Our 2026 – 2028 Strategic Plan commits the school to moving from universal pass rates to consistent <strong class="text-primary">distinction-band performance</strong> — and to ensuring that no learner reaches an examination class without first demonstrating the foundational competencies (reading, writing, comprehension, arithmetic) that examinations demand.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- II. Three sections -->
<section class="py-20 md:py-28 bg-paper">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-14">
            <div class="numeral mb-4"><span class="n">II</span><span class="r"></span></div>
            <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">Sections</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight" style="max-width: 24ch;">A continuous pathway from age 3 to Grade 12.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
            <a href="/academics/early-childhood" class="block group">
                <div class="arched arched-sm mb-5" style="height: 280px;">
                    <img src="/images/ecl/ecl5.jpg" alt="ECE" loading="lazy">
                </div>
                <div class="h-1 w-10 bg-primary mb-3"></div>
                <p class="text-[11px] tracking-[.22em] uppercase text-muted mb-2">Ages 3 – 6</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-2">Early Childhood</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed mb-3">Baby Class · Middle Class · Reception. Play-based learning, structured pre-literacy and pre-numeracy in dedicated child-friendly classrooms.</p>
                <span class="text-primary font-semibold border-b border-primary pb-0.5 group-hover:text-accent group-hover:border-accent">Explore ECE →</span>
            </a>
            <a href="/academics/primary" class="block group">
                <div class="arched arched-sm mb-5" style="height: 280px;">
                    <img src="/images/primary/primary5.jpg" alt="Primary" loading="lazy">
                </div>
                <div class="h-1 w-10 bg-primary mb-3"></div>
                <p class="text-[11px] tracking-[.22em] uppercase text-muted mb-2">Grades 1 – 7</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-2">Primary section</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed mb-3">Lower &amp; Upper Primary. Aptitude-tested entry into Grade 7; structured preparation for the ECZ examination at our own centre.</p>
                <span class="text-primary font-semibold border-b border-primary pb-0.5 group-hover:text-accent group-hover:border-accent">Explore Primary →</span>
            </a>
            <a href="/academics/secondary" class="block group">
                <div class="arched arched-sm mb-5" style="height: 280px;">
                    <img src="/images/secondary/secondary3.jpg" alt="Secondary" loading="lazy">
                </div>
                <div class="h-1 w-10 bg-primary mb-3"></div>
                <p class="text-[11px] tracking-[.22em] uppercase text-muted mb-2">Forms 1 – 5 · Grades 8 – 12</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-2">Secondary section</h3>
                <p class="font-display text-lg text-gray-700 leading-relaxed mb-3">Junior &amp; Senior Secondary. Pure sciences, languages, humanities, ICT, the arts. Grade 12 examinations sat at our school.</p>
                <span class="text-primary font-semibold border-b border-primary pb-0.5 group-hover:text-accent group-hover:border-accent">Explore Secondary →</span>
            </a>
        </div>
    </div>
</section>

<!-- III. PRWC flagship -->
<section class="py-20 md:py-28 bg-paper-deep">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10">
            <div class="numeral mb-4"><span class="n">III</span><span class="r"></span></div>
            <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">Flagship programme</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight" style="max-width: 26ch;">The Parallel Reading and Writing Course.</h2>
        </div>
        <p class="font-display text-lg md:text-xl text-gray-700 leading-relaxed mb-10 max-w-4xl">
            In line with our 2026 Strategic Plan, we have introduced the <strong class="text-primary">Parallel Reading and Writing Course (PRWC)</strong> — a parallel stream that ensures no learner enters a regular grade class without first demonstrating functional reading and writing competence in English.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mb-10">
            <div class="bg-paper-warm p-7 border-l-2 border-secondary">
                <div class="numeral mb-4"><span class="n" style="font-size: 2rem;">I</span></div>
                <p class="font-display text-lg text-gray-700 leading-relaxed"><strong class="text-primary">Placement assessment</strong> on entry. Every newly enrolled learner is tested.</p>
            </div>
            <div class="bg-paper-warm p-7 border-l-2 border-secondary">
                <div class="numeral mb-4"><span class="n" style="font-size: 2rem;">II</span></div>
                <p class="font-display text-lg text-gray-700 leading-relaxed">Learners who don't yet meet the threshold join the <strong class="text-primary">PRWC parallel stream</strong>, supported by dedicated coordinators (one for Primary, one for Secondary).</p>
            </div>
            <div class="bg-paper-warm p-7 border-l-2 border-secondary">
                <div class="numeral mb-4"><span class="n" style="font-size: 2rem;">III</span></div>
                <p class="font-display text-lg text-gray-700 leading-relaxed">On demonstrating competence, they reintegrate into their substantive grade class — <strong class="text-primary">no stigma</strong>.</p>
            </div>
        </div>

        <div class="max-w-4xl space-y-4">
            <p class="font-display text-lg md:text-xl text-gray-700 leading-relaxed">
                The PRWC uses the <em class="italic">Peter and Jane Key Words</em> reading scheme alongside graded readers and structured writing exercises. Existing pupils identified by class teachers as needing additional support are progressively absorbed into the programme.
            </p>
            <p class="font-display text-lg md:text-xl text-gray-700 leading-relaxed">
                <strong class="text-accent">This is a standing programme, not a remedial afterthought</strong> — part of our promise that every learner who passes through this school will leave it able to read and write.
            </p>
        </div>
    </div>
</section>

<!-- IV. Examinations -->
<section class="py-20 md:py-24 bg-paper">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10">
            <div class="numeral mb-4"><span class="n">IV</span><span class="r"></span></div>
            <p class="text-accent uppercase tracking-[.28em] text-xs font-semibold mb-3">Examinations</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight" style="max-width: 22ch;">Internal rigour. External validation.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-paper-warm p-7 border-l-4 border-primary">
                <h3 class="font-display text-2xl text-primary font-semibold mb-3">Internal assessment</h3>
                <ul class="space-y-2 font-display text-lg text-gray-700">
                    <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> End-of-term assessments at every grade</li>
                    <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> Termly mock examinations for Grades 7 and 12</li>
                    <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> Item-level analysis to identify weak topics</li>
                </ul>
            </div>
            <div class="bg-paper-warm p-7 border-l-4 border-primary">
                <h3 class="font-display text-2xl text-primary font-semibold mb-3">External (ECZ)</h3>
                <ul class="space-y-2 font-display text-lg text-gray-700">
                    <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> Grade 7 ECZ — sat at our school</li>
                    <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> Grade 9 ECZ — sat at our school</li>
                    <li class="flex items-baseline gap-2"><span style="color:#B08A3E;">›</span> Grade 12 ECZ — sat at our school</li>
                </ul>
                <p class="mt-4 font-display italic text-muted">— We are a registered ECZ examination centre, so your child sits external examinations at familiar premises.</p>
            </div>
        </div>
    </div>
</section>

<!-- V. 2028 targets — navy anchor -->
<section class="py-20 md:py-28 bg-primary-dark text-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <div class="numeral on-dark mb-4"><span class="n">V</span><span class="r"></span></div>
            <p class="text-secondary uppercase tracking-[.28em] text-xs font-semibold mb-3">2028 targets</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold leading-tight" style="max-width: 22ch;">What we're committing to publicly.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
            <div class="p-7 border-l-2 border-secondary bg-white/5">
                <p class="text-secondary uppercase tracking-[.22em] text-xs font-semibold mb-3">Grade 7 ECZ</p>
                <p class="font-display text-2xl leading-snug">At least <strong>5 pupils scoring 800+ marks.</strong></p>
            </div>
            <div class="p-7 border-l-2 border-secondary bg-white/5">
                <p class="text-secondary uppercase tracking-[.22em] text-xs font-semibold mb-3">Grade 12 ECZ</p>
                <p class="font-display text-2xl leading-snug"><strong>100% pass rate</strong>, ≥ 30% qualifying for university entry, and at least one Division I candidate.</p>
            </div>
            <div class="p-7 border-l-2 border-secondary bg-white/5">
                <p class="text-secondary uppercase tracking-[.22em] text-xs font-semibold mb-3">Inter-school competitions</p>
                <p class="font-display text-2xl leading-snug">Active participation in Maths, Science, English, debate, and spelling — district, provincial and national.</p>
            </div>
        </div>
    </div>
</section>
@endsection

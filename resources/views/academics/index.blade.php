@extends('layouts.app')

@section('title', 'Academics')
@section('description', 'Full Zambian curriculum from ECE to Grade 12, taught by TCZ-licensed teachers, supported by science, computer and home economics laboratories, plus the Parallel Reading and Writing Course (PRWC).')

@section('content')
<!-- Hero -->
<section class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <p class="text-secondary tracking-widest uppercase text-sm font-semibold mb-3">Academics</p>
        <h1 class="font-display text-5xl md:text-6xl font-semibold leading-tight max-w-3xl">From distinction-grade pass marks to lifelong literacy.</h1>
        <p class="mt-5 text-white/90 text-lg max-w-3xl">Full Zambian national curriculum, ECE through Grade 12, taught by TCZ-licensed teachers, with the discipline of regular internal assessment.</p>
    </div>
</section>

<!-- Overview -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Overview</p>
        <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight mb-6">Beyond passing, toward distinction.</h2>
        <p class="text-lg text-gray-700 leading-relaxed mb-4">
            We offer the full Zambian national curriculum from Early Childhood Education through to Grade 12, taught by TCZ-licensed teachers, in classrooms supported by science, computer, and home economics laboratories, a library, and the discipline of regular internal assessment.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed">
            Our 2026-2028 Strategic Plan commits the school to moving from universal pass rates to consistent <strong>distinction-band performance</strong>, and to ensuring that no learner reaches an examination class without first demonstrating the foundational competencies (reading, writing, comprehension, arithmetic) that examinations demand.
        </p>
    </div>
</section>

<!-- Three sections grid -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 max-w-2xl mx-auto">
            <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Sections</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight">A continuous pathway from age 3 to Grade 12.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <a href="/academics/early-childhood" class="block bg-white shadow-sm hover:shadow-xl transition group">
                <div class="aspect-[4/3] overflow-hidden bg-gray-100">
                    <img src="/images/primary/primary2.jpg" alt="ECE" class="w-full h-full object-cover group-hover:scale-105 transition" loading="lazy">
                </div>
                <div class="p-7">
                    <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Ages 3 to 6</p>
                    <h3 class="font-display text-2xl text-primary font-semibold mb-2">Early Childhood Education</h3>
                    <p class="text-gray-700 mb-4">Baby Class · Middle Class · Reception. Play-based learning, structured pre-literacy and pre-numeracy, in dedicated child-friendly classrooms.</p>
                    <span class="text-primary font-semibold group-hover:text-accent">Explore ECE →</span>
                </div>
            </a>

            <a href="/academics/primary" class="block bg-white shadow-sm hover:shadow-xl transition group">
                <div class="aspect-[4/3] overflow-hidden bg-gray-100">
                    <img src="/images/primary/primary5.jpg" alt="Primary" class="w-full h-full object-cover group-hover:scale-105 transition" loading="lazy">
                </div>
                <div class="p-7">
                    <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Grades 1 to 7</p>
                    <h3 class="font-display text-2xl text-primary font-semibold mb-2">Primary Section</h3>
                    <p class="text-gray-700 mb-4">Lower &amp; Upper Primary. Aptitude-tested entry into Grade 7, structured preparation for the ECZ examination at our own centre.</p>
                    <span class="text-primary font-semibold group-hover:text-accent">Explore Primary →</span>
                </div>
            </a>

            <a href="/academics/secondary" class="block bg-white shadow-sm hover:shadow-xl transition group">
                <div class="aspect-[4/3] overflow-hidden bg-gray-100">
                    <img src="/images/secondary/secondary3.jpg" alt="Secondary" class="w-full h-full object-cover group-hover:scale-105 transition" loading="lazy">
                </div>
                <div class="p-7">
                    <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Forms 1 to 5 · Grades 8 to 12</p>
                    <h3 class="font-display text-2xl text-primary font-semibold mb-2">Secondary Section</h3>
                    <p class="text-gray-700 mb-4">Junior &amp; Senior Secondary. Pure sciences, languages, humanities, ICT, the arts. Grade 12 examinations sat at our school.</p>
                    <span class="text-primary font-semibold group-hover:text-accent">Explore Secondary →</span>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- PRWC -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="border-l-4 border-accent pl-6">
            <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Flagship Programme</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight mb-6">The Parallel Reading and Writing Course (PRWC).</h2>
        </div>
        <p class="text-lg text-gray-700 leading-relaxed mb-6 mt-6">
            In line with our 2026 Strategic Plan, we have introduced the <strong>Parallel Reading and Writing Course</strong>, a parallel stream that ensures no learner enters a regular grade class without first demonstrating functional reading and writing competence in English.
        </p>

        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="bg-gray-50 p-6">
                <p class="text-3xl text-accent font-display font-semibold mb-2">01</p>
                <p class="text-gray-700"><strong>Placement assessment</strong> on entry. Every newly-enrolled learner is tested.</p>
            </div>
            <div class="bg-gray-50 p-6">
                <p class="text-3xl text-accent font-display font-semibold mb-2">02</p>
                <p class="text-gray-700">Learners who don't yet meet the threshold join the <strong>PRWC parallel stream</strong>, supported by dedicated coordinators (one for Primary, one for Secondary).</p>
            </div>
            <div class="bg-gray-50 p-6">
                <p class="text-3xl text-accent font-display font-semibold mb-2">03</p>
                <p class="text-gray-700">On demonstrating competence, they reintegrate into their substantive grade class, <strong>no stigma</strong>.</p>
            </div>
        </div>

        <p class="text-lg text-gray-700 leading-relaxed">
            The PRWC uses the <em>Peter and Jane Key Words</em> reading scheme alongside graded readers and structured writing exercises. Existing pupils identified by class teachers as needing additional support are progressively absorbed into the programme.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed mt-4">
            <strong class="text-accent">This is a standing programme, not a remedial afterthought</strong>, it is part of our promise that every learner who passes through this school will leave it able to read and write.
        </p>
    </div>
</section>

<!-- Examinations -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Examinations</p>
        <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight mb-8">Internal rigour. External validation.</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-7 shadow-sm">
                <h3 class="font-display text-2xl text-primary font-semibold mb-3">Internal Assessment</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-baseline gap-2"><span class="text-accent">›</span> End-of-term assessments at every grade</li>
                    <li class="flex items-baseline gap-2"><span class="text-accent">›</span> Termly mock examinations for Grades 7 and 12</li>
                    <li class="flex items-baseline gap-2"><span class="text-accent">›</span> Item-level analysis to identify weak topics</li>
                </ul>
            </div>
            <div class="bg-white p-7 shadow-sm">
                <h3 class="font-display text-2xl text-primary font-semibold mb-3">External (ECZ)</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-baseline gap-2"><span class="text-accent">›</span> Grade 7 ECZ, sat at our school</li>
                    <li class="flex items-baseline gap-2"><span class="text-accent">›</span> Grade 9 ECZ, sat at our school</li>
                    <li class="flex items-baseline gap-2"><span class="text-accent">›</span> Grade 12 ECZ, sat at our school</li>
                </ul>
                <p class="mt-4 text-sm text-gray-600">We are a registered ECZ examination centre, so your child sits external examinations at familiar premises.</p>
            </div>
        </div>
    </div>
</section>

<!-- Targets -->
<section class="py-16 md:py-24 bg-primary text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-secondary uppercase tracking-widest text-sm font-semibold mb-3">2028 Targets</p>
        <h2 class="font-display text-4xl md:text-5xl font-semibold leading-tight mb-8">What we're committing to publicly.</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white/10 backdrop-blur p-6 border border-white/20">
                <p class="text-secondary font-display text-2xl font-semibold mb-2">Grade 7 ECZ</p>
                <p class="text-white/90">At least <strong>5 pupils scoring 800+ marks</strong></p>
            </div>
            <div class="bg-white/10 backdrop-blur p-6 border border-white/20">
                <p class="text-secondary font-display text-2xl font-semibold mb-2">Grade 12 ECZ</p>
                <p class="text-white/90"><strong>100% pass rate</strong>, ≥ 30% qualifying for university entry, and at least one Division I (top distinction) candidate</p>
            </div>
            <div class="bg-white/10 backdrop-blur p-6 border border-white/20">
                <p class="text-secondary font-display text-2xl font-semibold mb-2">Inter-school competitions</p>
                <p class="text-white/90">Active participation in Maths, Science, English, debate, and spelling, district, provincial and national</p>
            </div>
        </div>
    </div>
</section>
@endsection

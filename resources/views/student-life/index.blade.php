@extends('layouts.app')

@section('title', 'Student Life')
@section('description', 'Beyond the classroom: 13 active clubs, structured sport under our MoU with Chiko Private School, structured pastoral care, and a daily rhythm built around character.')

@section('content')
<!-- Hero -->
<section class="navy-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <p class="text-secondary tracking-widest uppercase text-sm font-semibold mb-3">Student Life</p>
        <h1 class="font-display text-5xl md:text-6xl font-semibold leading-tight max-w-3xl">More than a classroom.</h1>
        <p class="mt-5 text-white/90 text-lg max-w-3xl">Thirteen active clubs. Year-round sport. Pastoral care. Daily formation in character, not just academics.</p>
    </div>
</section>

<div class="ribbon"><span>For God</span><span class="cross">✠</span><span>For Country</span><span class="cross">✠</span><span>For Every Child</span></div>


<!-- Intro -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-lg text-gray-700 leading-relaxed">
            We believe that academic excellence is necessary, but not sufficient, for the formation of a young person. Our Student Life programme, built around our 2026-2028 commitment to talent and character development, establishes <strong>thirteen active clubs and structured sport</strong> as a permanent part of every learner's experience.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed mt-4">
            We want every child to leave our school knowing not only what they learned, but <strong class="text-accent">what they are good at</strong>, and how to use it.
        </p>
    </div>
</section>

<!-- 13 Clubs -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Our 13 Clubs</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-12">Four families. Thirteen pursuits.</h2>

        @php
            $groups = [
                ['🔬 Academic & Cognitive', 'bg-blue-50', [
                    ['JETS, Junior Engineers, Technicians & Scientists', 'For learners with a curiosity for how things work. Science fair preparation, applied problem-solving, and exposure to STEM career pathways.'],
                    ['Debate and Public Speaking', 'For learners who think on their feet. Argumentation, structured speech, and the confidence to speak in formal settings.'],
                    ['Spelling Bee', 'For Primary learners who love words. Vocabulary mastery, English fluency, and competitive drive.'],
                ]],
                ['🎭 Creative & Performing Arts', 'bg-yellow-50', [
                    ['Music, Choir and Instruments', 'Vocal and instrumental development, performance for school and community events.'],
                    ['Art and Design', 'Visual arts, craft, and the satisfaction of making something beautiful with one\'s own hands.'],
                    ['Drama and Theatre', 'Stage performance, scriptwriting, and civic theatre.'],
                    ['Dance and Cultural', 'Traditional and modern dance forms, with cultural performance at school and community events.'],
                ]],
                ['💼 Practical & Vocational', 'bg-green-50', [
                    ['Entrepreneurship, "Monetise Your Skill"', 'Our flagship character-and-economic club. Learners learn to price their skills, market them, sell them, and account for the income.'],
                    ['ICT and Coding', 'Computer literacy beyond the syllabus, basic coding, and freelance digital skills.'],
                    ['Cookery and Baking', 'Practical food production, baking for events and orders, a pathway into small-business confidence.'],
                    ['Fashion and Tailoring', 'Sewing, design, and alterations.'],
                ]],
                ['⚽ Sports', 'bg-red-50', [
                    ['Football', 'Boys\' and girls\' teams, with structured fixtures throughout the year and inter-school competition under our MoU with Chiko Private School.'],
                    ['Chess', 'Concentration, strategy, and a competition pathway from school level upward.'],
                ]],
            ];
        @endphp

        @foreach($groups as $g)
            <div class="mb-10">
                <h3 class="font-display text-2xl text-primary font-semibold mb-5">{{ $g[0] }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach($g[2] as $club)
                        <div class="{{ $g[1] }} p-6 border-l-4 border-primary">
                            <h4 class="font-display text-lg text-primary font-semibold mb-2">{{ $club[0] }}</h4>
                            <p class="text-sm text-gray-700 leading-relaxed">{{ $club[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Sports -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-primary text-white p-8 md:p-12">
            <p class="text-secondary uppercase tracking-widest text-xs font-semibold mb-3">Sports All Year Round</p>
            <h2 class="font-display text-3xl md:text-4xl font-semibold leading-tight mb-5">A proper sports field, finally.</h2>
            <p class="text-white/90 text-lg leading-relaxed">
                Through a Memorandum of Understanding with <strong>Chiko Private School</strong>, our learners now have access to a proper sports field for football, athletics, and field events. We are equipping the field with our own goal posts and equipment under the terms of the MoU.
            </p>
            <p class="text-white/90 mt-3">Chess and other board games are available daily during break periods.</p>
        </div>
    </div>
</section>

<!-- Day in the Life -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">A Day in the Life</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-10">From morning assembly to the gate.</h2>

        @php
            $day = [
                ['Morning', 'Mornings begin with assembly.', 'A short devotion, school notices, recognition of any pupil who has done something noteworthy, and the day is launched.'],
                ['Lessons', 'Lessons run on a structured timetable.', 'Forty-minute periods, double periods for laboratory and practical subjects.'],
                ['Break', 'Break and lunch are supervised.', 'Aunties and support staff are present in the playground and dining areas.'],
                ['Afternoon', 'Afternoons include club and sport time.', 'Every learner is expected to be engaged in at least one club; many take part in two or three.'],
                ['Close', 'School ends with a structured close.', 'Teachers escort learners to bus pick-up and parent-collection points; the gate is staffed by trained security.'],
            ];
        @endphp

        <div class="space-y-4">
            @foreach($day as $d)
                <div class="bg-white p-6 grid md:grid-cols-[150px_1fr] gap-4 items-baseline shadow-sm">
                    <p class="text-accent font-display text-xl font-semibold">{{ $d[0] }}</p>
                    <div>
                        <p class="font-display text-lg text-primary font-semibold">{{ $d[1] }}</p>
                        <p class="text-gray-700 text-sm mt-1">{{ $d[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Pastoral Care -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Pastoral Care</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-10">We take wellbeing seriously.</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gray-50 p-6 border-l-4 border-accent">
                <h3 class="font-display text-xl text-primary font-semibold mb-2"><i class="bx bxs-first-aid mr-2 text-accent"></i>Sick Bay</h3>
                <p class="text-gray-700 text-sm">Staffed by a trained Clinician for routine first aid and minor health complaints.</p>
            </div>
            <div class="bg-gray-50 p-6 border-l-4 border-accent">
                <h3 class="font-display text-xl text-primary font-semibold mb-2"><i class="bx bxs-conversation mr-2 text-accent"></i>Guidance &amp; Counselling</h3>
                <p class="text-gray-700 text-sm">Trained staff with a confidential referral pathway for sensitive issues.</p>
            </div>
            <div class="bg-gray-50 p-6 border-l-4 border-accent">
                <h3 class="font-display text-xl text-primary font-semibold mb-2"><i class="bx bxs-heart mr-2 text-accent"></i>Welfare Programme</h3>
                <p class="text-gray-700 text-sm">Provides essential personal-care items (including sanitary supplies for girls) so that no learner misses school for reasons of dignity.</p>
            </div>
            <div class="bg-gray-50 p-6 border-l-4 border-accent">
                <h3 class="font-display text-xl text-primary font-semibold mb-2"><i class="bx bxs-shield mr-2 text-accent"></i>Code of Conduct</h3>
                <p class="text-gray-700 text-sm">Protects every learner from bullying, harassment, and unfair treatment, with clear reporting channels.</p>
            </div>
        </div>
    </div>
</section>
@endsection

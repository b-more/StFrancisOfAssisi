@extends('layouts.app')

@section('title', 'Admissions')
@section('description', 'Apply to St. Francis of Assisi. Step-by-step guide for Early Childhood Education, Primary, and Secondary admission. Aptitude testing for examination grades, term-by-term billing, and a referral discount.')

@section('content')
<!-- Hero -->
<section class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <p class="text-secondary tracking-widest uppercase text-sm font-semibold mb-3">Admissions</p>
        <h1 class="font-display text-5xl md:text-6xl font-semibold leading-tight max-w-3xl">Welcome to our admissions office.</h1>
        <p class="mt-5 text-white/90 text-lg max-w-3xl">Choose the school. Visit. Tour. Apply. We accept applications throughout the year.</p>
    </div>
</section>

<!-- Intro -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-lg text-gray-700 leading-relaxed">
            Choosing a school is one of the most important decisions you will make for your child. We invite you to visit, meet our staff, see our facilities, and ask any question you wish before you decide. We accept applications throughout the year, but priority is given to applications received <strong>at least four weeks before the start of each term</strong>.
        </p>
    </div>
</section>

<!-- Who We Accept -->
<section class="py-12 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Who We Accept</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-8">Open to learners at every stage.</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 shadow-sm">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Ages 3 to 6</p>
                <h3 class="font-display text-xl text-primary font-semibold mb-2">Early Childhood</h3>
                <p class="text-gray-700 text-sm">Baby Class, Middle Class, and Reception.</p>
            </div>
            <div class="bg-white p-6 shadow-sm">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Grades 1 to 7</p>
                <h3 class="font-display text-xl text-primary font-semibold mb-2">Primary</h3>
                <p class="text-gray-700 text-sm">All grades. Aptitude test required for entry into Grade 7.</p>
            </div>
            <div class="bg-white p-6 shadow-sm">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Forms 1 to 5</p>
                <h3 class="font-display text-xl text-primary font-semibold mb-2">Secondary</h3>
                <p class="text-gray-700 text-sm">Grades 8 through 12. Aptitude test required for entry into Grade 12.</p>
            </div>
        </div>
        <p class="text-sm text-gray-600 mt-5">Entry into examination grades (Grade 7 and Grade 12) is subject to passing an aptitude test, which assesses readiness for examination-grade work.</p>
    </div>
</section>

<!-- 6-Step Process -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">How to Apply</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-12">Six steps. Five working days for a decision.</h2>

        @php
            $steps = [
                ['1', 'Enquire',     'Telephone or visit the school office to express your interest. We will explain availability in your child\'s grade and answer any preliminary questions.'],
                ['2', 'Visit and Tour', 'Book a school tour at a time convenient to you. You will see classrooms, laboratories, the library, the playground, and meet members of our staff.'],
                ['3', 'Submit Application', 'Complete the school\'s application form. See the documents required below.'],
                ['4', 'Aptitude Test (Examination Grades Only)', 'Applicants for Grade 7 and Grade 12 sit an aptitude test before formal admission. The test assesses English literacy, numeracy, and the foundational competencies required for examination-grade work.'],
                ['5', 'Admission Decision', 'We confirm admission outcomes within five working days of the application being complete.'],
                ['6', 'Pay the Term Fees and Confirm Enrollment', 'On admission confirmation, the first term\'s fees are payable by the published deadline. Your child\'s place is secured and orientation arrangements are communicated.'],
            ];
        @endphp

        <div class="space-y-6">
            @foreach($steps as $s)
                <div class="flex gap-6 items-start bg-gray-50 p-6 border-l-4 border-accent">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-display text-2xl font-semibold">{{ $s[0] }}</div>
                    <div>
                        <h3 class="font-display text-xl text-primary font-semibold mb-1">{{ $s[1] }}</h3>
                        <p class="text-gray-700">{{ $s[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Documents required -->
        <div class="mt-12 bg-primary/5 border-l-4 border-primary p-6">
            <h3 class="font-display text-xl text-primary font-semibold mb-3">Documents you'll need</h3>
            <ul class="text-gray-700 space-y-1">
                <li class="flex items-baseline gap-2"><span class="text-accent">›</span> The completed application form (available from the school office)</li>
                <li class="flex items-baseline gap-2"><span class="text-accent">›</span> A copy of the child's birth certificate (or under-five card, for ECE applicants)</li>
                <li class="flex items-baseline gap-2"><span class="text-accent">›</span> The most recent school report (for transferring pupils)</li>
                <li class="flex items-baseline gap-2"><span class="text-accent">›</span> A clear passport-size photograph</li>
                <li class="flex items-baseline gap-2"><span class="text-accent">›</span> Any specialist medical or educational reports relevant to the child's care</li>
            </ul>
        </div>
    </div>
</section>

<!-- Fees + Transport + What to bring -->
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-3 gap-6">

        <a href="/admissions/fees" class="block bg-white p-7 shadow-sm hover:shadow-lg transition group">
            <div class="text-primary text-3xl mb-3"><i class="bx bxs-credit-card"></i></div>
            <h3 class="font-display text-xl text-primary font-semibold mb-2">School Fees</h3>
            <p class="text-gray-700 text-sm mb-3">Term-by-term billing, four-month payment window. Referral discount of K200 per referred child for existing parents.</p>
            <span class="text-accent font-semibold text-sm">View fees policy →</span>
        </a>

        <div class="bg-white p-7 shadow-sm">
            <div class="text-primary text-3xl mb-3"><i class="bx bxs-bus"></i></div>
            <h3 class="font-display text-xl text-primary font-semibold mb-2">Transport</h3>
            <p class="text-gray-700 text-sm">Four school buses serve the Chililabombwe area on established routes. Bookable termly, invoiced separately from tuition fees.</p>
        </div>

        <div class="bg-white p-7 shadow-sm">
            <div class="text-primary text-3xl mb-3"><i class="bx bxs-backpack"></i></div>
            <h3 class="font-display text-xl text-primary font-semibold mb-2">What Your Child Will Need</h3>
            <ul class="text-gray-700 text-sm space-y-1">
                <li>› School uniform</li>
                <li>› Stationery (list issued by grade)</li>
                <li>› Sports kit (Primary &amp; Secondary)</li>
                <li>› School bag and labelled water bottle</li>
            </ul>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-primary text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-semibold mb-4">Ready to apply?</h2>
        <p class="text-white/85 mb-7">Reach out today to begin the process, we'll guide you through each step.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/admissions/apply" class="bg-secondary text-primary px-7 py-3 rounded-md font-semibold hover:bg-yellow-300 transition shadow-lg">Start Application</a>
            <a href="tel:+260972266217" class="bg-white/10 border border-white/40 px-7 py-3 rounded-md font-semibold hover:bg-white/20 transition">Call Admissions · +260 972 266 217</a>
        </div>
    </div>
</section>
@endsection

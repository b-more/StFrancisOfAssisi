@extends('layouts.app')

@section('title', 'For Parents')
@section('description', 'Parent app, bulk SMS, monthly newsletter, termly Parents\' Days. Everything you need to support your child at St. Francis of Assisi.')

@section('content')
<!-- Hero -->
<section class="navy-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <p class="text-secondary tracking-widest uppercase text-sm font-semibold mb-3">For Parents</p>
        <h1 class="font-display text-5xl md:text-6xl font-semibold leading-tight max-w-3xl">You're not just our customers. You're our partners.</h1>
        <p class="mt-5 text-white/90 text-lg max-w-3xl">Your child's success at this school depends on the working relationship between home and school. This page is your hub.</p>
    </div>
</section>

<div class="ribbon"><span>For God</span><span class="cross">✠</span><span>For Country</span><span class="cross">✠</span><span>For Every Child</span></div>


<!-- Communication Channels -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">How We Communicate</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-10">Seven channels. Use whichever fits.</h2>

        @php
            $channels = [
                ['bxs-mobile-vibration', 'Parent Mobile Application', 'Download the SFA Parent App to access your child\'s homework, fee statements, individual reports, and school notices in one place. <a href="/parent-app" class="text-accent font-semibold hover:underline">Download &amp; install →</a>'],
                ['bxs-message-rounded-detail', 'Bulk SMS', 'Official school notices, including school closures, fee reminders, and urgent updates. Please ensure the school office has your current mobile number.'],
                ['bxs-envelope', 'Monthly Newsletter', 'Distributed digitally on the first week of each month, covering academic news, learner achievements, club activity, and forthcoming events.'],
                ['bxs-group', 'Termly Parents\' Day', 'Once per term, in person, structured agenda. Your attendance matters, both for your child\'s progress and for the school community.'],
                ['bxs-microphone', 'Principal\'s Radio Programme', 'Tune in monthly to hear the Principal discuss matters of education, parenting, and community.'],
                ['bxs-file-doc', 'Quarterly Principal\'s Letter', 'Sent home in printed and digital form on strategic matters affecting the school.'],
                ['bxs-globe', 'School Website', 'You\'re reading it, bookmark this page for ongoing reference.'],
            ];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($channels as $c)
                <div class="bg-gray-50 p-6 border-t-4 border-primary">
                    <div class="text-primary text-3xl mb-3"><i class="bx {{ $c[0] }}"></i></div>
                    <h3 class="font-display text-xl text-primary font-semibold mb-2">{{ $c[1] }}</h3>
                    <p class="text-sm text-gray-700">{!! $c[2] !!}</p>
                </div>
            @endforeach
            <div class="bg-accent/5 p-6 border-t-4 border-accent">
                <div class="text-accent text-3xl mb-3"><i class="bx bxs-log-in"></i></div>
                <h3 class="font-display text-xl text-accent font-semibold mb-2">Parent &amp; Student Portal</h3>
                <p class="text-sm text-gray-700 mb-3">Sign in for results, attendance, and fee statements.</p>
                <a href="/portal" class="text-accent font-semibold text-sm hover:underline">Open the portal →</a>
            </div>
        </div>
    </div>
</section>

<!-- What We Ask -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">What We Ask of Parents</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-10">Five things, please.</h2>
        @php
            $asks = [
                ['Engage with your child\'s learning.', 'Look at their books. Ask about their day. Sign communications when asked.'],
                ['Pay fees on time.', 'Our four-month payment window exists to be reasonable; please use it. Early payment helps the school plan.'],
                ['Attend Parents\' Day.', 'Three times a year. Even if your child is doing well, perhaps especially if they are.'],
                ['Talk to us early.', 'If something is going wrong at home or in the classroom, please come and tell us. We can almost always help if we know.'],
                ['Recommend us.', 'If your experience here is good, please share it. Existing parents who refer a new family receive a fee discount of K200 per referred child.'],
            ];
        @endphp
        <div class="space-y-4">
            @foreach($asks as $i => $a)
                <div class="bg-white p-6 flex gap-5 items-start shadow-sm">
                    <div class="flex-none w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-display text-lg font-semibold">{{ $i + 1 }}</div>
                    <div>
                        <h3 class="font-display text-xl text-primary font-semibold mb-1">{{ $a[0] }}</h3>
                        <p class="text-gray-700">{{ $a[1] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Frequently Asked Questions</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-10">Quick answers to common questions.</h2>
        @php
            $faqs = [
                ['What times does the school day run?', 'Typical school hours are Monday to Friday, 7:30 AM to 4:30 PM. Bus pick-up and drop-off times are circulated separately each term.'],
                ['What is the school uniform policy?', 'Full uniform is required at all times. Uniform suppliers and the full dress code are issued on admission.'],
                ['Is transport provided?', 'Yes. We operate four school buses on established routes around the Chililabombwe area. Transport is bookable termly and is billed separately.'],
                ['What religious tradition does the school follow?', 'We are a Christian-foundation school with no formal church affiliation. We welcome learners of every Christian tradition and of other faiths. Daily devotions are non-denominational.'],
                ['How do I report an absence?', 'Notify the class teacher by SMS or via the parent app on the morning of the absence. Extended absences should be communicated in writing in advance where possible.'],
                ['What if my child is unwell at school?', 'Our Sick Bay, staffed by a trained Clinician, provides first response. For anything more serious we contact you immediately and, if required, transport the child to a clinic.'],
                ['Can I visit the school before applying?', 'Yes, and we encourage it. Please contact the office to arrange a tour.'],
                ['How do I raise a concern or complaint?', 'Speak first to your child\'s class teacher. If the matter is not resolved, escalate to the Section Head, then to the Principal. Our Constitution provides a written complaints pathway.'],
            ];
        @endphp
        <div class="space-y-3">
            @foreach($faqs as $f)
                <details class="bg-gray-50 border-l-4 border-primary group">
                    <summary class="px-5 py-4 cursor-pointer font-display text-lg text-primary font-semibold flex justify-between items-center">
                        {{ $f[0] }}
                        <i class="bx bx-chevron-down group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="px-5 pb-5 text-gray-700">{{ $f[1] }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>

<!-- School Calendar -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">School Calendar</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-8">Three terms. One academic year.</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 border-t-4 border-accent">
                <p class="text-accent font-display text-2xl font-semibold mb-1">Term 1</p>
                <p class="text-gray-700">January, April</p>
            </div>
            <div class="bg-white p-6 border-t-4 border-accent">
                <p class="text-accent font-display text-2xl font-semibold mb-1">Term 2</p>
                <p class="text-gray-700">May, August</p>
            </div>
            <div class="bg-white p-6 border-t-4 border-accent">
                <p class="text-accent font-display text-2xl font-semibold mb-1">Term 3</p>
                <p class="text-gray-700">September, December</p>
            </div>
        </div>
        <p class="mt-6 text-sm text-gray-600">Specific dates, holidays, and examination periods are published in the annual School Calendar, available from the school office and in the Parent App.</p>
        <a href="/calendar" class="inline-block mt-5 bg-primary text-white px-6 py-2 rounded-md font-semibold hover:bg-primary-dark transition">View full calendar →</a>
    </div>
</section>
@endsection

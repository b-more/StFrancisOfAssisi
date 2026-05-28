@extends('layouts.app')

@section('title', 'News & Events')
@section('description', 'School news, upcoming events, and the monthly newsletter from St. Francis of Assisi Private School.')

@section('content')
<!-- Hero -->
<section class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <p class="text-secondary tracking-widest uppercase text-sm font-semibold mb-3">News &amp; Events</p>
        <h1 class="font-display text-5xl md:text-6xl font-semibold leading-tight max-w-3xl">What's happening at the school.</h1>
        <p class="mt-5 text-white/90 text-lg max-w-3xl">Academic results, staff appointments, building developments, awards, parent days, and the monthly newsletter.</p>
    </div>
</section>

<!-- The three streams -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <div class="bg-gray-50 p-7 border-t-4 border-primary text-center">
                <div class="text-primary text-3xl mb-3"><i class="bx bxs-news"></i></div>
                <h3 class="font-display text-xl text-primary font-semibold mb-2">School News</h3>
                <p class="text-sm text-gray-700">Academic results, staff appointments, building developments, awards.</p>
            </div>
            <div class="bg-gray-50 p-7 border-t-4 border-primary text-center">
                <div class="text-primary text-3xl mb-3"><i class="bx bxs-calendar-event"></i></div>
                <h3 class="font-display text-xl text-primary font-semibold mb-2">Events</h3>
                <p class="text-sm text-gray-700">Parents' Days, sports fixtures, club performances, the Principal's radio interviews, holiday tuition.</p>
            </div>
            <div class="bg-gray-50 p-7 border-t-4 border-primary text-center">
                <div class="text-primary text-3xl mb-3"><i class="bx bxs-envelope"></i></div>
                <h3 class="font-display text-xl text-primary font-semibold mb-2">Newsletters</h3>
                <p class="text-sm text-gray-700">Our monthly digital newsletter, archived here.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Post -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Featured · Leadership</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-3">A new chapter: welcoming our first School Principal.</h2>
        <p class="text-sm text-gray-500 mb-7">Posted 1 April 2026</p>
        <div class="aspect-[16/9] bg-gray-200 mb-6 overflow-hidden">
            <img src="/images/campus/campus2.jpg" alt="" class="w-full h-full object-cover" loading="lazy">
        </div>
        <div class="space-y-4 text-lg text-gray-700 leading-relaxed">
            <p>We are pleased to announce the appointment of <strong>Mr. Blessmore Mulenga</strong> as the first School Principal of St. Francis of Assisi Private School. The creation of this office represents a deliberate step in the school's institutional journey, formalising academic leadership and embedding a published Strategic Plan that will guide the school from 2026 to 2028.</p>
            <p>Mr. Mulenga's first month in office has already seen the enactment of the school's Constitution (Version 2.0) and Ethical Code of Conduct, the issuance of 2026 contracts to all staff, the rebranding of the ECE section, the repainting of Primary, and the activation of our new external playground.</p>
            <blockquote class="border-l-4 border-accent pl-6 italic text-primary py-2">
                "My commitment to every parent who has placed a child in our care is plain, that this school will deliver real results, treat every child with fairness, and grow steadily into the most academically respected private school in Chililabombwe."
                <footer class="text-sm not-italic text-gray-600 mt-2">- Mr. Blessmore Mulenga, on assumption of office</footer>
            </blockquote>
            <p>The full <strong>2026-2028 Strategic Plan</strong> is available on request from the school office.</p>
        </div>
    </div>
</section>

<!-- Upcoming Events Strip -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Upcoming Events</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-10">Save the date.</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-50 p-6 border-l-4 border-accent">
                <p class="text-accent font-display text-xl font-semibold mb-1">Termly Parents' Day</p>
                <p class="text-sm text-gray-700 mb-4">Once per term, in person, structured agenda. Your attendance matters.</p>
                <a href="/contact" class="text-primary font-semibold text-sm hover:text-accent">Add to your diary →</a>
            </div>
            <div class="bg-gray-50 p-6 border-l-4 border-accent">
                <p class="text-accent font-display text-xl font-semibold mb-1">Inter-school Football Fixture</p>
                <p class="text-sm text-gray-700 mb-4">Boys' and girls' teams compete under our MoU with Chiko Private School.</p>
                <a href="/student-life" class="text-primary font-semibold text-sm hover:text-accent">Sport at SFA →</a>
            </div>
            <div class="bg-gray-50 p-6 border-l-4 border-accent">
                <p class="text-accent font-display text-xl font-semibold mb-1">End-of-Term Assembly &amp; Subject Mastery Awards</p>
                <p class="text-sm text-gray-700 mb-4">Recognising distinction across academics and character.</p>
                <a href="/calendar" class="text-primary font-semibold text-sm hover:text-accent">School calendar →</a>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter sign-up -->
<section class="py-16 bg-primary text-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-semibold mb-3">Get the monthly newsletter.</h2>
        <p class="text-white/85 mb-6">Distributed digitally on the first week of each month, academic news, learner achievements, club activity, and forthcoming events.</p>
        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex flex-wrap gap-2 max-w-md mx-auto">
            @csrf
            <input type="email" name="email" placeholder="Your email address" required class="flex-1 min-w-[200px] border-0 text-gray-900">
            <button type="submit" class="bg-secondary text-primary px-6 py-2 font-semibold hover:bg-yellow-300 transition">Subscribe</button>
        </form>
        @if(session('success'))<p class="mt-4 text-secondary text-sm">{{ session('success') }}</p>@endif
    </div>
</section>
@endsection

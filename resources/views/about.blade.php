@extends('layouts.app')

@section('title', 'About')
@section('description', 'Founded in 2021 by Mr. Francis Mulenga. Christian-foundation private school in Chililabombwe with TCZ-licensed teachers, ECE through Grade 12, and a published 2026-2028 Strategic Plan.')

@section('content')
<!-- Page Header -->
<section class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <p class="text-secondary tracking-widest uppercase text-sm font-semibold mb-3">About Us</p>
        <h1 class="font-display text-5xl md:text-6xl font-semibold leading-tight max-w-3xl">A school built on conviction.</h1>
        <p class="mt-5 text-white/90 text-lg max-w-3xl">Christian foundation. Qualified teachers. A formal Strategic Plan. Five years on, and just getting started.</p>
    </div>
</section>

<!-- Our Story -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Our Story</p>
        <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight mb-6">From a small early-years group to a fully-fledged ECE-through-Grade-12 school.</h2>
        <div class="space-y-5 text-lg text-gray-700 leading-relaxed">
            <p>St. Francis of Assisi Private School was founded in <strong>2021 by Mr. Francis Mulenga</strong> as an answer to a clear local need: a private school in Chililabombwe that would deliver quality education on a Christian foundation, with teachers who hold real credentials and a learning environment that rewards both effort and character.</p>
            <p>Five years on, we have grown from a small early-years group to a fully-fledged school of <strong>500+ learners</strong> across Early Childhood Education, Primary (Grades 1 to 7), and Secondary (Forms 1 to 5, that is, Grades 8 to 12). We are a registered ECZ examination centre, our staff is fully professionalised, our finances are sound, and our facilities continue to expand.</p>
            <p>In <strong>April 2026</strong> the school appointed its first substantive School Principal, <strong>Mr. Blessmore Mulenga</strong>, marking a deliberate move toward formalised academic leadership and a published Strategic Plan that places academic excellence, universal literacy, talent development, digital transformation, financial sustainability, and community engagement at the centre of our work over the period 2026 to 2028.</p>
        </div>
    </div>
</section>

<!-- Mission · Vision · Values -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 mb-10">
            <div class="bg-white p-8 border-l-4 border-accent shadow-sm">
                <p class="text-accent uppercase tracking-widest text-xs font-semibold mb-3">Our Mission</p>
                <p class="font-display text-2xl text-primary leading-snug">To provide high quality education based on a Christian foundation for the betterment of the individual and the country.</p>
            </div>
            <div class="bg-white p-8 border-l-4 border-primary shadow-sm">
                <p class="text-primary uppercase tracking-widest text-xs font-semibold mb-3">Our Vision · 2026-2028</p>
                <p class="font-display text-xl text-primary leading-snug">By April 2028, St. Francis of Assisi Private School will be the most academically respected private school in Chililabombwe, producing distinction-band ECZ candidates and well-rounded learners. Every learner will leave the school able to read, write, think, perform, lead, and serve, for God and for Country.</p>
            </div>
        </div>

        <div>
            <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Our Core Values</p>
            <h3 class="font-display text-3xl text-primary mb-8">Four words that govern every decision.</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 text-center shadow-sm">
                    <div class="text-primary text-3xl mb-3"><i class="bx bxs-shield-alt-2"></i></div>
                    <h4 class="font-display text-xl text-primary font-semibold mb-2">Integrity</h4>
                    <p class="text-sm text-gray-600">in every relationship and every transaction.</p>
                </div>
                <div class="bg-white p-6 text-center shadow-sm">
                    <div class="text-primary text-3xl mb-3"><i class="bx bxs-bulb"></i></div>
                    <h4 class="font-display text-xl text-primary font-semibold mb-2">Innovation</h4>
                    <p class="text-sm text-gray-600">in teaching and in operations.</p>
                </div>
                <div class="bg-white p-6 text-center shadow-sm">
                    <div class="text-primary text-3xl mb-3"><i class="bx bxs-briefcase"></i></div>
                    <h4 class="font-display text-xl text-primary font-semibold mb-2">Professionalism</h4>
                    <p class="text-sm text-gray-600">in conduct and in delivery.</p>
                </div>
                <div class="bg-white p-6 text-center shadow-sm">
                    <div class="text-primary text-3xl mb-3"><i class="bx bxs-balance"></i></div>
                    <h4 class="font-display text-xl text-primary font-semibold mb-2">Fairness</h4>
                    <p class="text-sm text-gray-600">in the application of rules and the distribution of opportunity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Christian Foundation -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Our Christian Foundation</p>
        <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight mb-6">Faith as foundation, not condition.</h2>
        <div class="space-y-4 text-lg text-gray-700 leading-relaxed">
            <p>We are a Christian-foundation school. We are <strong>not affiliated to any single church or denomination</strong>, and we welcome learners of every Christian tradition and of other faiths.</p>
            <p>Christian principles shape our daily practice through morning devotions, our values-based code of conduct, and a culture of service to others. Our motto, <strong class="text-accent">For God and Country</strong>, expresses our conviction that learning is a gift to be used for the good of the wider community.</p>
        </div>
    </div>
</section>

<!-- Leadership -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 max-w-3xl mx-auto">
            <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Leadership</p>
            <h2 class="font-display text-4xl md:text-5xl font-semibold text-primary leading-tight">The people who carry the school.</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mb-10">
            <div class="bg-white p-8 shadow-sm">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Proprietor &amp; Executive Director</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-3">Mr. Francis Mulenga</h3>
                <p class="text-gray-700">Founded the school in 2021 and continues to chair the Board of Directors, providing strategic governance and overall direction.</p>
            </div>
            <div class="bg-white p-8 shadow-sm">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">School Principal · Since 1 April 2026</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-3">Mr. Blessmore Mulenga</h3>
                <p class="text-gray-700">The first to hold this office. Leads the day-to-day operation of the school and is accountable to the Board for the delivery of the 2026-2028 Strategic Plan.</p>
            </div>
        </div>

        <div class="bg-white p-8 shadow-sm">
            <p class="text-accent uppercase tracking-widest text-xs font-semibold mb-3">Senior Management Team</p>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-y-2 gap-x-8 text-gray-700">
                <li class="flex items-baseline gap-2"><span class="text-accent">›</span> Head Teacher, Secondary Section</li>
                <li class="flex items-baseline gap-2"><span class="text-accent">›</span> Head Teacher, Primary Section</li>
                <li class="flex items-baseline gap-2"><span class="text-accent">›</span> Deputy Head Teacher</li>
                <li class="flex items-baseline gap-2"><span class="text-accent">›</span> School Accountant</li>
                <li class="flex items-baseline gap-2"><span class="text-accent">›</span> Section Secretaries (Primary and Secondary)</li>
                <li class="flex items-baseline gap-2"><span class="text-accent">›</span> Heads of Department (across academic subjects)</li>
            </ul>
        </div>
    </div>
</section>

<!-- Constitution & Code of Conduct -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Governance</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-5">Our Constitution and Code of Conduct.</h2>
        <p class="text-lg text-gray-700 leading-relaxed max-w-2xl mx-auto">
            The school operates under a written <strong>Constitution (Version 2.0)</strong> and a binding <strong>Ethical Code of Conduct</strong>. These documents define the rights and responsibilities of every learner, parent, staff member, Board member, and visitor. Copies are available on request from the school office.
        </p>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-primary text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-semibold mb-4">Want to see the school for yourself?</h2>
        <p class="text-white/85 mb-7">Book a tour, meet our staff, see our facilities, and ask any question you wish.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/contact" class="bg-secondary text-primary px-7 py-3 rounded-md font-semibold hover:bg-yellow-300 transition shadow-lg">Book a School Tour</a>
            <a href="/admissions" class="bg-white/10 border border-white/40 px-7 py-3 rounded-md font-semibold hover:bg-white/20 transition">View Admissions</a>
        </div>
    </div>
</section>
@endsection

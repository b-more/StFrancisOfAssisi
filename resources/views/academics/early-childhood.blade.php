@extends('layouts.app')

@section('title', 'Early Childhood Education')
@section('description', 'For learners aged approximately 3 to 6 years. Baby Class, Middle Class, and Reception in dedicated child-friendly classrooms with experienced ECE teachers and trained Aunties.')

@section('content')
<section class="navy-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <p class="text-xs uppercase tracking-widest text-secondary mb-3"><a href="/academics" class="hover:underline">Academics</a> · Early Childhood</p>
        <h1 class="font-display text-4xl md:text-6xl font-semibold leading-tight">Early Childhood Education.</h1>
        <p class="mt-4 text-white/90 text-lg">For learners aged approximately 3 to 6 years.</p>
    </div>
</section>

<div class="ribbon"><span>For God</span><span class="cross">✠</span><span>For Country</span><span class="cross">✠</span><span>For Every Child</span></div>


<section class="py-16 md:py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-lg text-gray-700 leading-relaxed mb-10">
            The ECE section is housed in dedicated classrooms recently rebranded for a fresh, child-friendly learning environment, with experienced ECE teachers and trained Aunties supporting the youngest members of our community.
        </p>

        <div class="space-y-6">
            <div class="bg-gray-50 p-7 border-l-4 border-accent">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Stage 1</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-2">Baby Class</h3>
                <p class="text-gray-700">First formal classroom experience. Focused on socialisation, motor skills, and language exposure.</p>
            </div>
            <div class="bg-gray-50 p-7 border-l-4 border-accent">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Stage 2</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-2">Middle Class</h3>
                <p class="text-gray-700">Building on Baby Class with structured pre-literacy and pre-numeracy.</p>
            </div>
            <div class="bg-gray-50 p-7 border-l-4 border-accent">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Stage 3</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-2">Reception</h3>
                <p class="text-gray-700">Final year before Grade 1, ensuring readiness for the Primary curriculum.</p>
            </div>
        </div>

        <div class="mt-10 text-center">
            <a href="/admissions/apply" class="inline-block bg-accent text-white px-7 py-3 rounded-md font-semibold hover:bg-accent-dark transition shadow-lg">Enquire about ECE admission</a>
        </div>
    </div>
</section>
@endsection

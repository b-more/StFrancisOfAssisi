@extends('layouts.app')

@section('title', 'School Fees')
@section('description', 'School fee policy at St. Francis of Assisi: term-by-term billing, four-month payment window, K200-per-referred-child discount for existing parents.')

@section('content')
<section class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <p class="text-xs uppercase tracking-widest text-secondary mb-3"><a href="/admissions" class="hover:underline">Admissions</a> · School Fees</p>
        <h1 class="font-display text-4xl md:text-6xl font-semibold leading-tight">School Fees.</h1>
        <p class="mt-4 text-white/90 text-lg max-w-2xl">Transparent. Reviewed annually. Term-by-term billing.</p>
    </div>
</section>

<section class="py-16 md:py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-lg text-gray-700 leading-relaxed mb-8">
            School fees are reviewed annually and published in our termly Fees Schedule, which is available from the school office on request. Our fees policy includes:
        </p>

        <div class="space-y-5 mb-10">
            <div class="bg-gray-50 p-6 border-l-4 border-primary">
                <h3 class="font-display text-xl text-primary font-semibold mb-2">Term-by-term billing</h3>
                <p class="text-gray-700">Payable before the start of each term.</p>
            </div>
            <div class="bg-gray-50 p-6 border-l-4 border-primary">
                <h3 class="font-display text-xl text-primary font-semibold mb-2">Four-month payment window</h3>
                <p class="text-gray-700">Within each term, after which arrears procedures apply.</p>
            </div>
            <div class="bg-accent/5 p-6 border-l-4 border-accent">
                <h3 class="font-display text-xl text-accent font-semibold mb-2">Referral discount</h3>
                <p class="text-gray-700">Existing parents who refer a new family receive a discount of <strong>K200 per referred child</strong> on their own child's fees, with <strong>no upper limit</strong>.</p>
            </div>
        </div>

        <div class="bg-primary text-white p-8 text-center">
            <p class="text-secondary uppercase tracking-widest text-xs font-semibold mb-2">Current Fees Schedule</p>
            <p class="font-display text-2xl mb-4">Contact the Accountant's office</p>
            <p>📞 <a href="tel:+260972266217" class="text-secondary hover:underline">+260 972 266 217</a></p>
            <p>📧 <a href="mailto:info@stfrancisofassisizm.com" class="text-secondary hover:underline">info@stfrancisofassisizm.com</a></p>
        </div>
    </div>
</section>
@endsection

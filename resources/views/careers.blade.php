@extends('layouts.app')

@section('title', 'Careers')
@section('description', 'Join our team. We welcome applications from qualified, TCZ-registered teachers and skilled support staff who share our vision and values.')

@section('content')
<!-- Hero -->
<section class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
        <p class="text-secondary tracking-widest uppercase text-sm font-semibold mb-3">Careers</p>
        <h1 class="font-display text-5xl md:text-6xl font-semibold leading-tight max-w-3xl">Join our team.</h1>
        <p class="mt-5 text-white/90 text-lg max-w-3xl">Qualified, TCZ-registered teachers and skilled support staff who share our vision and values.</p>
    </div>
</section>

<!-- Vacancies -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Current Vacancies</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-8">Open positions.</h2>

        <div class="bg-gray-50 border-l-4 border-accent p-6 mb-6">
            <p class="text-gray-700">There are no advertised vacancies at this time. We accept speculative applications from qualified TCZ-registered teachers, see "How to Apply" below.</p>
        </div>

        <p class="text-sm text-gray-600">When positions arise, they will be advertised here with title, section, and application deadline.</p>
    </div>
</section>

<!-- What We Offer -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">What We Offer</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-10">A formal employer. A serious workplace.</h2>
        @php
            $offers = [
                ['bxs-file', 'A formal written contract', 'From the day you join.'],
                ['bxs-bank', 'All statutory contributions', 'NAPSA, NHIMA, PAYE remitted on time.'],
                ['bxs-trophy', 'Merit-based fee-collection bonus', 'Class teachers can earn up to K1,600 per term in addition to salary.'],
                ['bxs-user-plus', 'Enrollment incentive scheme', 'K200 for every new pupil you bring in who pays in full, with no cap.'],
                ['bxs-graduation', 'Continuing professional development', 'Structured staff meetings, HOD mentoring, and external training opportunities.'],
                ['bxs-handshake', 'A school community that values fairness, integrity, and professionalism.', ''],
            ];
        @endphp
        <div class="grid md:grid-cols-2 gap-5">
            @foreach($offers as $o)
                <div class="bg-white p-6 flex gap-4 items-start shadow-sm">
                    <div class="flex-none w-10 h-10 rounded-md bg-primary text-white flex items-center justify-center text-xl"><i class="bx {{ $o[0] }}"></i></div>
                    <div>
                        <p class="font-display text-lg text-primary font-semibold">{{ $o[1] }}</p>
                        @if($o[2])<p class="text-sm text-gray-700 mt-1">{{ $o[2] }}</p>@endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- How to Apply -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">How to Apply</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-6">Send your application to the Principal.</h2>
        <p class="text-lg text-gray-700 leading-relaxed mb-6">Send the following to <a href="mailto:info@stfrancisofassisizm.com?subject=Application%20-%20For%20the%20attention%20of%20the%20School%20Principal" class="text-accent hover:underline">info@stfrancisofassisizm.com</a>, marked for the attention of the School Principal:</p>
        <ul class="space-y-3 text-gray-700 mb-8">
            <li class="flex items-baseline gap-3"><span class="text-accent text-xl">›</span> A cover letter setting out your interest in the position</li>
            <li class="flex items-baseline gap-3"><span class="text-accent text-xl">›</span> A current curriculum vitae</li>
            <li class="flex items-baseline gap-3"><span class="text-accent text-xl">›</span> Certified copies of all academic and professional certificates (including TCZ registration for teaching applications)</li>
            <li class="flex items-baseline gap-3"><span class="text-accent text-xl">›</span> Three referees, at least one of whom is a previous head of school</li>
        </ul>
        <p class="text-gray-700">Shortlisted applicants will be invited for an interview and, where applicable, a teaching demonstration.</p>
    </div>
</section>
@endsection

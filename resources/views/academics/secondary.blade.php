@extends('layouts.app')

@section('title', 'Secondary School')
@section('description', 'Forms 1 to 5 (Grades 8 to 12). Junior and Senior Secondary curriculum with pure sciences, languages, humanities, ICT and the arts. ECZ examination centre.')

@section('content')
<section class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <p class="text-xs uppercase tracking-widest text-secondary mb-3"><a href="/academics" class="hover:underline">Academics</a> · Secondary</p>
        <h1 class="font-display text-4xl md:text-6xl font-semibold leading-tight">Secondary Section.</h1>
        <p class="mt-4 text-white/90 text-lg">Forms 1 to 5, Grades 8 through 12.</p>
    </div>
</section>

<section class="py-16 md:py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-gray-50 p-7">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Junior Secondary</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-3">Forms 1 to 2 · Grades 8 to 9</h3>
                <p class="text-sm text-gray-600 mb-2">Compulsory subjects:</p>
                <ul class="text-gray-700 space-y-1 text-sm">
                    <li>› English</li>
                    <li>› Mathematics</li>
                    <li>› Integrated Science</li>
                    <li>› Civic Education</li>
                    <li>› Religious Education</li>
                    <li>› Computer Studies</li>
                    <li>› Physical Education</li>
                    <li>› Home Economics</li>
                    <li>› Design &amp; Technology</li>
                    <li>› Art &amp; Design</li>
                    <li>› Zambian Language</li>
                </ul>
            </div>
            <div class="bg-gray-50 p-7">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Senior Secondary</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-3">Forms 3 to 5 · Grades 10 to 12</h3>
                <p class="text-sm text-gray-600 mb-2">Subject offering:</p>
                <ul class="text-gray-700 space-y-1 text-sm grid grid-cols-2 gap-x-4">
                    <li>› Physics</li>
                    <li>› Chemistry</li>
                    <li>› Biology</li>
                    <li>› Mathematics</li>
                    <li>› Additional Mathematics</li>
                    <li>› English Language</li>
                    <li>› Literature in English</li>
                    <li>› Geography</li>
                    <li>› History</li>
                    <li>› Civic Education</li>
                    <li>› Religious Education</li>
                    <li>› Commerce</li>
                    <li>› Principles of Accounts</li>
                    <li>› Computer Studies</li>
                    <li>› Home Management</li>
                    <li>› Food &amp; Nutrition</li>
                    <li>› Art &amp; Design</li>
                    <li>› Music</li>
                    <li>› Physical Education</li>
                </ul>
            </div>
        </div>

        <div class="bg-primary/5 border-l-4 border-accent p-7 mb-10">
            <p class="text-accent uppercase tracking-widest text-xs font-semibold mb-2">Grade 12, School-Leaving Examination</p>
            <h3 class="font-display text-2xl text-primary font-semibold mb-3">Sat at our school. Verified by senior leadership.</h3>
            <p class="text-gray-700">Grade 12 candidates sit the ECZ examination at our school. Following our 2026 commitment to academic rigor, all Grade 12 syllabus and examination registrations are now formally verified and signed off by the Heads of Department, the Head Teacher Secondary, and the School Principal.</p>
        </div>

        <div class="text-center">
            <a href="/admissions/apply" class="inline-block bg-accent text-white px-7 py-3 rounded-md font-semibold hover:bg-accent-dark transition shadow-lg">Apply for Secondary</a>
        </div>
    </div>
</section>
@endsection

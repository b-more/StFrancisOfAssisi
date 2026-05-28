@extends('layouts.app')

@section('title', 'Primary School')
@section('description', 'Grades 1 to 7. Full Zambian Primary curriculum with Lower and Upper Primary streams. Aptitude-tested entry to Grade 7. ECZ examination centre.')

@section('content')
<section class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <p class="text-xs uppercase tracking-widest text-secondary mb-3"><a href="/academics" class="hover:underline">Academics</a> · Primary</p>
        <h1 class="font-display text-4xl md:text-6xl font-semibold leading-tight">Primary Section.</h1>
        <p class="mt-4 text-white/90 text-lg">Grades 1 to 7, the full Zambian Primary curriculum.</p>
    </div>
</section>

<section class="py-16 md:py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-gray-50 p-7">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Lower Primary</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-3">Grades 1 to 4</h3>
                <ul class="text-gray-700 space-y-1">
                    <li>› English</li>
                    <li>› Mathematics</li>
                    <li>› Integrated Science</li>
                    <li>› Creative &amp; Technology Studies (CTS)</li>
                    <li>› Zambian Language (iCibemba)</li>
                    <li>› Social Studies (from Grade 4)</li>
                    <li>› Religious Education</li>
                </ul>
            </div>
            <div class="bg-gray-50 p-7">
                <p class="text-xs uppercase tracking-widest text-accent font-semibold mb-2">Upper Primary</p>
                <h3 class="font-display text-2xl text-primary font-semibold mb-3">Grades 5 to 7</h3>
                <p class="text-gray-700 mb-2">All of the above, plus:</p>
                <ul class="text-gray-700 space-y-1">
                    <li>› Home Economics</li>
                    <li>› Expressive Arts</li>
                    <li>› Technology Studies</li>
                </ul>
                <p class="mt-3 text-sm text-gray-600">With structured preparation for the Grade 7 ECZ examination.</p>
            </div>
        </div>

        <div class="bg-primary/5 border-l-4 border-accent p-7 mb-10">
            <p class="text-accent uppercase tracking-widest text-xs font-semibold mb-2">Grade 7, Examination Year</p>
            <h3 class="font-display text-2xl text-primary font-semibold mb-3">Aptitude test before entry.</h3>
            <p class="text-gray-700">Grade 7 candidates sit the ECZ examination at our school, which is a registered examination centre. We have introduced an aptitude test as a precondition for entry into Grade 7, applied to both new and continuing pupils, to ensure every candidate enters the examination year ready to succeed.</p>
        </div>

        <div class="text-center">
            <a href="/admissions/apply" class="inline-block bg-accent text-white px-7 py-3 rounded-md font-semibold hover:bg-accent-dark transition shadow-lg">Apply for Primary</a>
        </div>
    </div>
</section>
@endsection

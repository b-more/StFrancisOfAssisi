@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/notices-banner.jpg') }}" alt="School Notices" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=School+Notices'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">School Notices & Bulletins</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Stay informed with the latest announcements, policies, and important information from our school
        </p>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-20">
    <!-- Featured Notice -->
    <div class="mb-16">
        <div class="bg-gradient-to-r from-red-500 to-red-600 text-white rounded-lg p-8 mb-8 shadow-lg">
            <div class="flex items-center mb-4">
                <i class='bx bx-error text-3xl mr-4'></i>
                <h2 class="text-2xl font-bold">Latest Important Notice</h2>
            </div>
            <p class="text-red-100 mb-4">New bulletin available with essential information for Term Two</p>
            <a href="{{ route('notices.term-two-bulletin') }}" class="inline-flex items-center bg-white text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-red-50 transition-colors">
                <i class='bx bx-file-blank mr-2'></i>
                View Term Two Bulletin
            </a>
        </div>
    </div>

    <!-- Notices Grid -->
    <div class="grid gap-8">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-bold text-primary">All Notices & Bulletins</h2>
            <div class="flex space-x-2">
                <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">High Priority</span>
                <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">Medium Priority</span>
                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">General Info</span>
            </div>
        </div>

        @foreach($notices as $notice)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <!-- Priority Badge -->
                            <div class="flex items-center mb-3">
                                <span class="px-3 py-1 rounded-full text-xs font-medium mr-3
                                    @if($notice['priority'] === 'high')
                                        bg-red-100 text-red-800
                                    @elseif($notice['priority'] === 'medium')
                                        bg-yellow-100 text-yellow-800
                                    @else
                                        bg-green-100 text-green-800
                                    @endif
                                ">
                                    @if($notice['priority'] === 'high')
                                        🔴 High Priority
                                    @elseif($notice['priority'] === 'medium')
                                        🟡 Medium Priority
                                    @else
                                        🟢 General
                                    @endif
                                </span>
                                <span class="text-sm text-gray-500">{{ $notice['category'] }}</span>
                            </div>

                            <!-- Notice Title -->
                            <h3 class="text-xl font-bold text-primary mb-2 hover:text-primary/80 transition-colors">
                                <a href="@if($notice['slug'] === 'term-two-bulletin'){{ route('notices.term-two-bulletin') }}@else{{ route('notices.show', $notice['slug']) }}@endif">
                                    {{ $notice['title'] }}
                                </a>
                            </h3>

                            <!-- Date and Excerpt -->
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <i class='bx bx-calendar mr-2'></i>
                                <span>{{ $notice['date'] }}</span>
                            </div>

                            <p class="text-gray-600 mb-4 leading-relaxed">{{ $notice['excerpt'] }}</p>

                            <!-- Action Buttons -->
                            <div class="flex items-center space-x-3">
                                <a href="@if($notice['slug'] === 'term-two-bulletin'){{ route('notices.term-two-bulletin') }}@else{{ route('notices.show', $notice['slug']) }}@endif"
                                   class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                                    <i class='bx bx-file-blank mr-2'></i>
                                    Read Full Notice
                                </a>

                                @if($notice['slug'] === 'term-two-bulletin')
                                    <a href="{{ route('notices.download.term-two-bulletin') }}"
                                       class="inline-flex items-center text-gray-600 hover:text-gray-800 font-medium">
                                        <i class='bx bx-download mr-2'></i>
                                        Download
                                    </a>
                                @endif
                            </div>
                        </div>

                        <!-- Notice Icon -->
                        <div class="flex-shrink-0 ml-6">
                            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center">
                                @if($notice['category'] === 'General Information')
                                    <i class='bx bx-info-circle text-2xl text-primary'></i>
                                @elseif($notice['category'] === 'Health & Safety')
                                    <i class='bx bx-health text-2xl text-green-600'></i>
                                @elseif($notice['category'] === 'Events')
                                    <i class='bx bx-calendar-event text-2xl text-purple-600'></i>
                                @else
                                    <i class='bx bx-file text-2xl text-primary'></i>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notice Footer -->
                <div class="bg-gray-50 px-6 py-3 border-t">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Last updated: {{ $notice['date'] }}</span>
                        <div class="flex items-center space-x-4">
                            <button onclick="shareNotice('{{ $notice['title'] }}', '{{ url()->current() }}/@if($notice['slug'] === 'term-two-bulletin'){{ route('notices.term-two-bulletin') }}@else{{ route('notices.show', $notice['slug']) }}@endif')"
                                    class="text-gray-500 hover:text-primary transition-colors">
                                <i class='bx bx-share'></i> Share
                            </button>
                            <button onclick="printNotice()" class="text-gray-500 hover:text-primary transition-colors">
                                <i class='bx bx-printer'></i> Print
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Call to Action -->
    <div class="mt-16 text-center">
        <div class="bg-primary/10 rounded-lg p-8">
            <h3 class="text-2xl font-bold text-primary mb-4">Stay Connected</h3>
            <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                Don't miss important updates! Make sure to check our notices regularly and contact the school office if you have any questions about the information provided.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center bg-primary text-white px-6 py-3 rounded-lg hover:bg-primary/90 transition-colors font-medium">
                    <i class='bx bx-phone mr-2'></i>
                    Contact School Office
                </a>
                <a href="{{ route('portal') }}" class="inline-flex items-center bg-secondary text-white px-6 py-3 rounded-lg hover:bg-secondary/90 transition-colors font-medium">
                    <i class='bx bx-user-account mr-2'></i>
                    Parent Portal
                </a>
                <a href="{{ route('calendar') }}" class="inline-flex items-center bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors font-medium">
                    <i class='bx bx-calendar mr-2'></i>
                    School Calendar
                </a>
            </div>
        </div>
    </div>

    <!-- Important Reminders -->
    <div class="mt-12 grid md:grid-cols-3 gap-6">
        <div class="bg-red-50 border border-red-200 rounded-lg p-6">
            <div class="flex items-center mb-3">
                <i class='bx bx-health text-2xl text-red-600 mr-3'></i>
                <h4 class="font-bold text-red-800">Health & Safety</h4>
            </div>
            <p class="text-red-700 text-sm">Remember to carry hand sanitizer and follow all health protocols as outlined in our notices.</p>
        </div>

        <div class="bg-green-50 border border-green-200 rounded-lg p-6">
            <div class="flex items-center mb-3">
                <i class='bx bx-money text-2xl text-green-600 mr-3'></i>
                <h4 class="font-bold text-green-800">Fee Payments</h4>
            </div>
            <p class="text-green-700 text-sm">Ensure all fees are paid on time. Check our notices for payment deadlines and bank account details.</p>
        </div>

        <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
            <div class="flex items-center mb-3">
                <i class='bx bx-uniform text-2xl text-blue-600 mr-3'></i>
                <h4 class="font-bold text-blue-800">Uniform Policy</h4>
            </div>
            <p class="text-blue-700 text-sm">Students must wear proper uniforms daily. Best shirts on Wednesdays, track suits on Fridays only.</p>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function shareNotice(title, url) {
        if (navigator.share) {
            navigator.share({
                title: title,
                url: url
            });
        } else {
            // Fallback: copy to clipboard
            navigator.clipboard.writeText(url).then(() => {
                alert('Notice link copied to clipboard!');
            });
        }
    }

    function printNotice() {
        window.print();
    }

    // Add smooth scroll and other interactive features
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add fade-in animation for notice cards
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });

        document.querySelectorAll('.grid > div').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    });
</script>
@endpush
@endsection

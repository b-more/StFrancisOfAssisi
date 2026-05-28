@extends('layouts.app')

@section('title', 'Term Two Bulletin')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/notice-banner.jpg') }}" alt="School Notice" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.style.display='none'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">School Notice</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Important information and updates for our school community
        </p>
    </div>
</div>

<!-- Notice Content -->
<div class="container mx-auto px-4 py-20">
    <!-- Professional Letterhead -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
        <!-- Header with Logo and School Info -->
        <div class="bg-gradient-to-r from-primary to-primary/90 text-white p-8">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <!-- Left: School Logo -->
                <div class="flex items-center mb-6 md:mb-0">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mr-6 shadow-lg">
                        <img src="{{ asset('images/logo.png') }}" alt="School Logo" class="w-16 h-16 object-contain"
                             onerror="this.style.display='none'">
                    </div>
                    <div class="text-center md:text-left">
                        <h1 class="text-2xl md:text-3xl font-bold tracking-wide">{{ $bulletin['header']['school_name'] }}</h1>
                        <p class="text-white/90 mt-1">{{ $bulletin['header']['address'] }}</p>
                        <p class="text-white/90">Email: {{ $bulletin['header']['email'] }}</p>
                    </div>
                </div>

                <!-- Right: Contact Info -->
                <div class="text-center md:text-right">
                    <div class="bg-white/10 rounded-lg p-4 backdrop-blur-sm">
                        <p class="text-lg font-semibold mb-2">Contact Information</p>
                        @foreach($bulletin['header']['phones'] as $phone)
                            <p class="text-white/90">📞 {{ $phone }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Notice Details -->
        <div class="p-8 bg-gray-50 border-b">
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <h3 class="font-semibold text-primary mb-2">📅 Date</h3>
                    <p class="text-gray-700">{{ $bulletin['date'] }}</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <h3 class="font-semibold text-primary mb-2">👥 Attention</h3>
                    <p class="text-gray-700">{{ $bulletin['recipient'] }}</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <h3 class="font-semibold text-primary mb-2">📋 Reference</h3>
                    <p class="text-gray-700">{{ $bulletin['reference'] }}</p>
                </div>
            </div>
        </div>

        <!-- Greeting and Introduction -->
        <div class="p-8">
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-primary mb-4">Greetings!</h2>
                <p class="text-lg text-gray-700 bg-blue-50 p-4 rounded-lg border-l-4 border-primary">
                    <strong>Kindly take note of the following:</strong>
                </p>
            </div>

            <!-- Notice Items -->
            <div class="space-y-6">
                @foreach($bulletin['notices'] as $index => $notice)
                    @if($notice === 'Use the following Bank accounts for:')
                        <!-- Bank Accounts Special Section -->
                        <div class="bg-amber-50 border border-amber-200 rounded-lg p-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-amber-600 text-white rounded-full flex items-center justify-center font-bold text-sm mr-4">
                                    {{ $index + 1 }}
                                </div>
                                <div class="flex-1">
                                    <p class="text-gray-800 font-medium mb-4">{{ $notice }}</p>
                                    <div class="bg-white rounded-lg p-4 border-l-4 border-amber-600">
                                        @foreach($bulletin['bank_accounts'] as $account)
                                            <div class="flex items-center mb-2 last:mb-0">
                                                <i class='bx bx-credit-card text-amber-600 mr-3'></i>
                                                <span class="font-mono text-sm bg-gray-100 px-3 py-1 rounded">{{ $account }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Regular Notice Item -->
                        <div class="flex items-start p-4 bg-white border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center font-bold text-sm mr-4">
                                {{ $index + 1 }}
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-800 leading-relaxed
                                    @if(str_contains(strtolower($notice), 'cholera') || str_contains(strtolower($notice), 'health') || str_contains(strtolower($notice), 'sanitizer'))
                                        bg-red-50 border-l-4 border-red-500 pl-4 py-2 rounded-r
                                    @elseif(str_contains(strtolower($notice), 'fee') || str_contains(strtolower($notice), 'payment'))
                                        bg-green-50 border-l-4 border-green-500 pl-4 py-2 rounded-r
                                    @elseif(str_contains(strtolower($notice), 'uniform') || str_contains(strtolower($notice), 'dress'))
                                        bg-blue-50 border-l-4 border-blue-500 pl-4 py-2 rounded-r
                                    @elseif(str_contains(strtolower($notice), 'mass') || str_contains(strtolower($notice), 'offering'))
                                        bg-purple-50 border-l-4 border-purple-500 pl-4 py-2 rounded-r
                                    @endif
                                ">
                                    {{ $notice }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Management Signature -->
            <div class="mt-12 text-right">
                <div class="inline-block bg-primary/10 px-6 py-3 rounded-lg border-l-4 border-primary">
                    <p class="text-primary font-bold text-lg">{{ $bulletin['signature'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="text-center space-y-4 md:space-y-0 md:space-x-4 md:flex md:justify-center mb-12">
        <a href="{{ route('notices.download.term-two-bulletin') }}"
           class="inline-flex items-center bg-primary hover:bg-primary/90 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg">
            <i class='bx bx-download text-xl mr-3'></i>
            Download Notice
        </a>

        <a href="{{ route('notices.index') }}"
           class="inline-flex items-center bg-secondary hover:bg-secondary/90 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg">
            <i class='bx bx-list-ul text-xl mr-3'></i>
            All Notices
        </a>

        <a href="{{ route('contact') }}?subject=Bulletin%20Inquiry"
           class="inline-flex items-center bg-gray-700 hover:bg-gray-800 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl shadow-lg">
            <i class='bx bx-envelope text-xl mr-3'></i>
            Contact School
        </a>
    </div>

    <!-- Quick Info Cards -->
    <div class="grid md:grid-cols-3 gap-8">
        <!-- Key Dates -->
        <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-primary">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                    <i class='bx bx-calendar text-2xl text-primary'></i>
                </div>
                <h3 class="font-bold text-lg text-primary">Important Dates</h3>
            </div>
            <div class="space-y-3 text-sm">
                <div class="flex justify-between p-2 bg-gray-50 rounded">
                    <span class="font-medium">School Closes:</span>
                    <span class="text-red-600 font-semibold">6th August, 2025</span>
                </div>
                <div class="flex justify-between p-2 bg-gray-50 rounded">
                    <span class="font-medium">Open Day:</span>
                    <span class="text-green-600 font-semibold">8th August, 2025</span>
                </div>
                <div class="flex justify-between p-2 bg-gray-50 rounded">
                    <span class="font-medium">Time:</span>
                    <span class="font-medium">08:00 - 15:00 hrs</span>
                </div>
            </div>
        </div>

        <!-- Fee Structure -->
        <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-secondary">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 bg-secondary/10 rounded-full flex items-center justify-center mr-4">
                    <i class='bx bx-money text-2xl text-secondary'></i>
                </div>
                <h3 class="font-bold text-lg text-primary">Fee Structure</h3>
            </div>
            <div class="space-y-3 text-sm">
                <div class="flex justify-between p-2 bg-gray-50 rounded">
                    <span class="font-medium">Preschool:</span>
                    <span class="font-semibold">K1,600</span>
                </div>
                <div class="flex justify-between p-2 bg-gray-50 rounded">
                    <span class="font-medium">Primary:</span>
                    <span class="font-semibold">K1,900</span>
                </div>
                <div class="flex justify-between p-2 bg-gray-50 rounded">
                    <span class="font-medium">Secondary:</span>
                    <span class="font-semibold">K2,500</span>
                </div>
                <div class="flex justify-between p-2 bg-gray-50 rounded">
                    <span class="font-medium">Bus Levy:</span>
                    <span class="font-semibold">K500/month</span>
                </div>
            </div>
        </div>

        <!-- Contact Support -->
        <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-accent">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center mr-4">
                    <i class='bx bx-support text-2xl text-accent'></i>
                </div>
                <h3 class="font-bold text-lg text-primary">Need Help?</h3>
            </div>
            <div class="space-y-3">
                <p class="text-sm text-gray-600 mb-4">Visit the reception desk for assistance or contact us directly.</p>
                <a href="{{ route('contact') }}" class="block text-center bg-accent text-white py-2 px-4 rounded hover:bg-accent/90 transition-colors text-sm font-medium">
                    Contact Reception
                </a>
                <a href="{{ route('portal') }}" class="block text-center bg-gray-600 text-white py-2 px-4 rounded hover:bg-gray-700 transition-colors text-sm font-medium">
                    Parent Portal
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add print functionality
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.key === 'p') {
                e.preventDefault();
                window.print();
            }
        });

        // Smooth scroll for any anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
@endpush
@endsection

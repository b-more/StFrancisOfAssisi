<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'St. Francis of Assisi Private School') }}</title>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#002366',     // Royal blue for school
                        secondary: '#FFD700',   // Gold/yellow for school
                        accent: '#B22234'       // Rich red for accents
                    },
                },
            },
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .transition-all {
            transition: all 0.3s ease-in-out;
        }
        /* Add space for fixed navigation */
        main {
            padding-top: 4rem;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Top Bar with Quick Info -->
    <div class="bg-primary text-white py-2 px-4">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center">
            <div class="flex flex-wrap items-center space-x-4">
                <div class="flex items-center text-sm">
                    <i class='bx bxs-phone text-secondary mr-1'></i>
                    <span>+260 978124541</span>
                </div>
                <div class="flex items-center text-sm">
                    <i class='bx bxs-envelope text-secondary mr-1'></i>
                    <span>info@stfrancisschool.edu.zm</span>
                </div>
                <div class="flex items-center text-sm">
                    <i class='bx bxs-map text-secondary mr-1'></i>
                    <span>123 Education Avenue, Lusaka</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <a href="#" class="text-white hover:text-secondary transition-colors">
                    <i class='bx bxl-facebook text-lg'></i>
                </a>
                <a href="#" class="text-white hover:text-secondary transition-colors">
                    <i class='bx bxl-instagram text-lg'></i>
                </a>
                <a href="#" class="text-white hover:text-secondary transition-colors">
                    <i class='bx bxl-twitter text-lg'></i>
                </a>
                <a href="#" class="text-white hover:text-secondary transition-colors">
                    <i class='bx bxl-youtube text-lg'></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Include Navigation -->
    @include('layouts.navigation')

    <!-- Page Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Include Footer -->
    @include('layouts.footer')

    <!-- WhatsApp Button -->
    <a href="https://wa.me/260978124541" class="fixed bottom-8 right-8 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition-colors z-40">
        <i class='bx bxl-whatsapp text-2xl'></i>
    </a>

    <!-- Scroll to Top Button -->
    <button id="scrollToTop"
            class="fixed bottom-28 right-8 bg-primary text-white p-3 rounded-full shadow-lg hover:bg-primary/90 transition-all hidden z-40">
        <i class='bx bx-up-arrow-alt text-2xl'></i>
    </button>

    <!-- JavaScript -->
    <script>
        // Scroll to Top Button
        const scrollToTop = document.getElementById('scrollToTop');

        if (scrollToTop) {
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    scrollToTop.classList.remove('hidden');
                } else {
                    scrollToTop.classList.add('hidden');
                }
            });

            scrollToTop.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // Auto-hide success notification
        document.addEventListener('DOMContentLoaded', function() {
            const notification = document.getElementById('successNotification');
            if (notification) {
                setTimeout(function() {
                    notification.style.opacity = '0';
                    notification.style.transform = 'translateY(-100%)';
                    setTimeout(function() {
                        notification.style.display = 'none';
                    }, 300);
                }, 5000); // Will hide after 5 seconds
            }
        });
    </script>

    @stack('scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'St. Francis of Assisi') · St. Francis of Assisi Private School</title>
    <meta name="description" content="@yield('description', 'St. Francis of Assisi Private School, Christ-centred education in Chililabombwe, Zambia.')">

    <!-- Styles, locally-compiled Tailwind (custom palette baked in) -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}?v={{ filemtime(public_path('css/tailwind.css')) }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Cormorant Garamond', Georgia, serif; }
        .transition-all { transition: all 0.3s ease-in-out; }
        main { padding-top: 4rem; }

        /* Cloistered-editorial tokens — shared with the static homepage */
        .bg-paper      { background-color: #F5EFE0; }
        .bg-paper-warm { background-color: #FAF6EC; }
        .bg-paper-deep { background-color: #EAE1CB; }
        .border-rule   { border-color: #D8CFB6; }
        .text-muted    { color: #6B6558; }

        /* Signature: arched photo frame */
        .arched { position: relative; border-radius: 240px 240px 8px 8px; overflow: hidden; background: #EAE1CB; }
        .arched::after { content: ''; position: absolute; inset: 0; border: 1px solid rgba(255,215,0,.55); border-radius: inherit; pointer-events: none; }
        .arched.arched-sm { border-radius: 160px 160px 6px 6px; }
        .arched.arched-lg { border-radius: 280px 280px 8px 8px; }
        .arched > img { width: 100%; height: 100%; object-fit: cover; display: block; }

        /* Roman-numeral illuminated section marker */
        .numeral { display: inline-flex; align-items: baseline; gap: .75rem; font-family: 'Cormorant Garamond', Georgia, serif; color: #B08A3E; }
        .numeral .n { font-size: 2.4rem; font-weight: 600; letter-spacing: .04em; line-height: 1; }
        .numeral .r { display: inline-block; width: 3rem; height: 1px; background: #B08A3E; transform: translateY(-.35rem); }
        .numeral.on-dark    { color: #FFD700; }
        .numeral.on-dark .r { background: #FFD700; }

        /* Motto ribbon */
        .ribbon { background: #163959; color: #FFD700; text-align: center; padding: 1rem 1.25rem;
                  font-family: 'Cormorant Garamond', Georgia, serif; font-size: 1.05rem; letter-spacing: .28em; text-transform: uppercase; }
        .ribbon .cross { margin: 0 1.1rem; color: rgba(255,215,0,.8); }
        @media (max-width: 640px) { .ribbon { font-size: .78rem; letter-spacing: .2em; padding: .8rem 1rem; } .ribbon .cross { margin: 0 .5rem; } }

        /* Navy-forward hero band, used on every sub-page */
        .navy-hero { background: #1F4E79; color: #fff; position: relative; overflow: hidden; }
        .navy-hero::before { content: ''; position: absolute; inset: 0; opacity: .05;
            background-image: radial-gradient(circle at 20% 20%, #FFD700 1px, transparent 1px),
                              radial-gradient(circle at 80% 60%, #FFD700 1px, transparent 1px);
            background-size: 90px 90px, 130px 130px; pointer-events: none; }
        .navy-hero > * { position: relative; z-index: 1; }
    </style>
</head>
<body class="bg-paper">
    <!-- Top Bar with Quick Info -->
    <div class="bg-primary text-white py-2 px-4">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center">
            <div class="flex flex-wrap items-center space-x-4">
                <div class="flex items-center text-sm">
                    <i class='bx bxs-phone text-secondary mr-1'></i>
                    <a href="tel:+260972266217">+260 972 266 217</a>
                </div>
                <div class="flex items-center text-sm">
                    <i class='bx bxs-envelope text-secondary mr-1'></i>
                    <a href="mailto:info@stfrancisofassisizm.com">info@stfrancisofassisizm.com</a>
                </div>
                <div class="flex items-center text-sm">
                    <i class='bx bxs-map text-secondary mr-1'></i>
                    <span>1310/4 East Kamenza, Chililabombwe, Zambia</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <a href="https://www.facebook.com/profile.php?id=100086224041919" class="text-white hover:text-secondary transition-colors">
                    <i class='bx bxl-facebook text-lg'></i>
                </a>
                <a href="https://www.instagram.com/stfrancisofassisi/" class="text-white hover:text-secondary transition-colors">
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
    <a href="https://wa.me/260972266217" class="fixed bottom-8 right-8 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition-colors z-40">
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

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,700;12..96,800&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* ============================================================
           Landing-page design tokens — every marketing page inherits
           these via the shared layout, so the whole site now uses one
           system: Bricolage Grotesque display + DM Sans body, navy /
           sun-yellow / red on a light ground.  (added 2026-09-25)
           ============================================================ */
        :root {
            --site-navy: #15315A;    --site-navy-2: #1F4E79;   --site-navy-deep: #0F2440;
            --site-red: #D42B2B;     --site-red-ink: #B8231F;
            --site-sun: #FFC83D;     --site-sun-soft: #FFE7A3; --site-sun-ink: #4F3B00;
            --site-sky: #EAF2FD;     --site-sky-2: #DCE8FB;    --site-ground: #F6F9FD;
            --site-ink: #0F1E33;     --site-body: #3C4B60;     --site-muted: #C9D6E8;
            --site-line: #E6ECF3;
            --site-display: 'Bricolage Grotesque', 'DM Sans', system-ui, sans-serif;
            --site-sans:    'DM Sans', system-ui, -apple-system, 'Segoe UI', sans-serif;
            --site-pad: clamp(20px, 5.5vw, 80px);
            --site-section: clamp(56px, 8vw, 112px);
        }

        body { font-family: var(--site-sans); color: var(--site-ink); }
        /* Retired: Cormorant Garamond. .font-display now uses the new
           Bricolage Grotesque display face so any existing page that
           uses class="font-display" is modernised for free. */
        .font-display { font-family: var(--site-display); font-weight: 800; letter-spacing: -0.02em; }

        .transition-all { transition: all 0.3s ease-in-out; }
        main { padding-top: 4rem; }

        /* Landing-page utility classes — small, reusable, additive.
           Marketing pages progressively adopt these as they're rewritten
           in the new pattern. */
        .site-wrap    { max-width: 1440px; margin: 0 auto; padding-inline: var(--site-pad); }
        .site-section { padding-block: var(--site-section); }
        .site-lead    { font-size: clamp(16.5px, 1.4vw, 19px); line-height: 1.6; color: var(--site-body); margin: 0; }
        .site-h2      { font-family: var(--site-display); font-weight: 800; font-size: clamp(34px, 4.2vw, 56px); line-height: 1.02; letter-spacing: -0.03em; color: var(--site-navy); margin: 0; }
        .site-h3      { font-family: var(--site-display); font-weight: 700; font-size: clamp(22px, 2.2vw, 30px); line-height: 1.1; letter-spacing: -0.015em; color: var(--site-navy); margin: 0; }
        .site-kicker  { font-size: 11px; font-weight: 700; letter-spacing: 0.28em; text-transform: uppercase; color: var(--site-red); }

        .site-btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px;
                    white-space: nowrap; min-height: 56px; padding: 0 28px; border-radius: 999px;
                    font: 700 17px/1 var(--site-sans); text-decoration: none; border: 2px solid transparent;
                    transition: transform .18s, box-shadow .22s, background-color .18s, color .18s, border-color .18s; }
        .site-btn:hover { transform: translateY(-1.5px); }
        .site-btn-red   { background: var(--site-red); color: #fff; }
        .site-btn-red:hover   { background: var(--site-red-ink); color: #fff; box-shadow: 0 14px 32px rgba(212,43,43,.28); }
        .site-btn-sun   { background: var(--site-sun); color: var(--site-navy); font-weight: 800; }
        .site-btn-sun:hover   { background: #ffd666; box-shadow: 0 14px 32px rgba(255,200,61,.35); }
        .site-btn-line  { border-color: var(--site-navy); color: var(--site-navy); background: transparent; }
        .site-btn-line:hover  { background: var(--site-navy); color: #fff; }
        .site-btn-ghost-light { border-color: rgba(255,255,255,.4); color: #fff; }
        .site-btn-ghost-light:hover { background: rgba(255,255,255,.1); color: #fff; }

        .site-pill      { display: inline-flex; align-items: center; gap: 6px; font-size: 15px; font-weight: 700;
                          padding: 8px 16px; border-radius: 999px; }
        .site-pill-sun  { background: var(--site-sun-soft); color: var(--site-sun-ink); }
        .site-pill-sky  { background: var(--site-sky-2);    color: var(--site-navy); }

        .site-card { background: #fff; border: 1px solid var(--site-line); border-radius: 20px;
                     padding: clamp(22px, 2.6vw, 32px); transition: transform .28s cubic-bezier(.2,.8,.2,1), box-shadow .28s ease; }
        .site-card:hover { transform: translateY(-4px); box-shadow: 0 22px 46px rgba(15,30,51,.10); }
        .site-card h3 { margin: 0 0 8px; }

        /* Modernise the legacy signature elements so pages that still
           use them (before we rewrite them) look consistent with the
           new system, not the old serif-editorial one. */
        .arched { border-radius: 32px; }  /* keep the shape name; softer, modern corners */
        .arched::after { border-color: rgba(255,200,61,.6); }
        .ribbon { background: var(--site-navy-deep); color: var(--site-sun); letter-spacing: .18em; font-family: var(--site-display); }
        .navy-hero { background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); }

        /* Roman numeral markers — kept, but they now read as modern
           editorial notation over the Bricolage display face. */
        .numeral { display: inline-flex; align-items: baseline; gap: .75rem; font-family: var(--site-display); color: var(--site-sun-ink); }
        .numeral .n { font-size: 1.4rem; font-weight: 800; letter-spacing: .05em; line-height: 1; text-transform: uppercase; }
        .numeral .r { display: inline-block; width: 2.6rem; height: 2px; background: var(--site-sun); transform: translateY(-.28rem); }
        .numeral.on-dark { color: var(--site-sun); }
        .numeral.on-dark .r { background: var(--site-sun); }

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

        /* -----------------------------------------------------------
           Now-enrolling announcement strip — sits above the top bar
           on every marketing page. Mirrors the homepage's announce.
           ----------------------------------------------------------- */
        .site-announce {
            background: #0F2440; color: #E3EAF4;
            font-size: 14px; font-family: 'Inter', sans-serif;
        }
        .site-announce .row {
            max-width: 80rem; margin: 0 auto; padding: 8px 1rem;
            display: flex; align-items: center; justify-content: space-between;
            gap: 16px; flex-wrap: wrap;
        }
        .site-announce strong { color: #FFC83D; letter-spacing: .02em; }
        .site-announce a { color: #FFC83D; font-weight: 700; text-decoration: none; }
        .site-announce a:hover { color: #fff; }
        .site-announce .contact { display: none; }
        @media (min-width: 720px) {
            .site-announce .contact { display: inline-flex; gap: 22px; align-items: center; white-space: nowrap; color: rgba(255,255,255,0.82); }
            .site-announce .contact a { color: rgba(255,255,255,0.82); font-weight: 400; }
        }

        /* -----------------------------------------------------------
           Motion — reveal on scroll + hover polish. Fully behind
           `prefers-reduced-motion` so no jerky content for anyone
           who has that OS preference turned on.
           ----------------------------------------------------------- */
        @media (prefers-reduced-motion: no-preference) {
            @keyframes site-rise    { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: none; } }
            @keyframes site-glow    { 0%,100% { text-shadow: 0 0 0 rgba(255,200,61,0); }
                                      50%    { text-shadow: 0 0 14px rgba(255,200,61,.55); } }
            @keyframes site-badge   { 0%,100% { box-shadow: 0 0 0 0 rgba(255,200,61,.35); }
                                      50%    { box-shadow: 0 0 0 10px rgba(255,200,61,0); } }

            .site-announce strong { animation: site-glow 3.2s ease-in-out infinite; }

            /* Reveal-on-scroll — auto-applied by the inline script below.
               Each element fades + rises when it scrolls into view. */
            .reveal { opacity: 0; transform: translateY(28px);
                      transition: opacity .75s ease-out var(--stagger, 0s),
                                  transform .75s cubic-bezier(.2,.8,.2,1) var(--stagger, 0s); }
            .reveal.in { opacity: 1; transform: none; }

            /* Roman-numeral gold rule draws in on reveal */
            .numeral .r { transform: scaleX(0); transform-origin: left center;
                          transition: transform .95s cubic-bezier(.2,.8,.2,1) .15s; }
            .reveal.in .numeral .r,
            .reveal.numeral.in .r { transform: scaleX(1); }
            /* Numerals in an already-visible section still show the line */
            :not(.reveal) > .numeral .r { transform: scaleX(1); }

            /* Card hover-lift for the common patterns across the marketing pages */
            .bg-paper-warm.border-l-4, .bg-paper-warm.border-t-4,
            .bg-white.border-l-4, .bg-white.border-t-4,
            .bg-gray-50.border-t-4,
            [class*="hover:shadow-lg"] {
                transition: transform .28s cubic-bezier(.2,.8,.2,1),
                            box-shadow .28s ease, border-color .2s ease;
            }
            .bg-paper-warm.border-l-4:hover, .bg-paper-warm.border-t-4:hover,
            .bg-white.border-l-4:hover, .bg-white.border-t-4:hover,
            .bg-gray-50.border-t-4:hover {
                transform: translateY(-4px);
            }

            /* Every "Apply now" style button gets a physical lift + coloured shadow */
            .bg-secondary, [class*="bg-secondary"] { transition: transform .18s, box-shadow .22s, background-color .18s; }
            .bg-secondary:hover, [class*="bg-secondary"]:hover { transform: translateY(-1.5px); }

            /* Arched photo frames — quiet gold ring shimmer on hover */
            .arched { transition: transform .4s cubic-bezier(.2,.8,.2,1), box-shadow .4s ease; }
            .arched:hover { transform: translateY(-3px); box-shadow: 0 22px 46px rgba(15, 30, 51, .18); }
        }
    </style>
</head>
<body class="bg-paper">
    <!-- Now-enrolling announcement strip — mirrors homepage -->
    <div class="site-announce">
        <div class="row">
            <span><strong>Now enrolling</strong> · Baby Class through Grade 12 · Applications welcome year-round. <a href="/admissions">Begin an application →</a></span>
            <span class="contact">
                <a href="tel:+260972266217">+260 972 266 217</a>
                <span>Plot 1310/4 East Kamenza, Chililabombwe</span>
            </span>
        </div>
    </div>

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
                    <a href="mailto:stfrancisofassisi.sfa@gmail.com">stfrancisofassisi.sfa@gmail.com</a>
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

    <!-- Site-wide reveal-on-scroll (added 2026-09-25).
         Every page gets the same subtle fade-and-rise as elements
         enter the viewport, keyed to the classes the sub-pages already
         use (numeral markers, bordered feature cards, etc.).
         Disabled entirely for visitors with reduced-motion. -->
    <script>
    (function () {
        if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

        var selectors = [
            'section .numeral',
            'section .grid > *',
            'section .arched',
            '.bg-paper-warm.border-l-4', '.bg-paper-warm.border-t-4',
            '.bg-white.border-l-4', '.bg-white.border-t-4',
            '.bg-gray-50.border-t-4',
            'section > h1, section > h2, section > .max-w-7xl > h2',
            'section .max-w-6xl > .grid > *',
            'section .max-w-7xl > .grid > *'
        ].join(',');

        var els = document.querySelectorAll(selectors);
        els.forEach(function (el, i) {
            var parent = el.parentElement;
            var idx = parent ? Array.prototype.indexOf.call(parent.children, el) : 0;
            var stagger = Math.min(idx * 0.06, 0.42);
            el.classList.add('reveal');
            el.style.setProperty('--stagger', stagger + 's');
        });

        if (!('IntersectionObserver' in window)) {
            els.forEach(function (el) { el.classList.add('in'); });
            return;
        }
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });
        els.forEach(function (el) { io.observe(el); });
    })();
    </script>

    @stack('scripts')
</body>
</html>

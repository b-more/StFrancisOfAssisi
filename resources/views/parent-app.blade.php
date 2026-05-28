@extends('layouts.app')

@section('title', 'Parent App')
@section('description', 'Download the St. Francis of Assisi Parent App. View your child\'s homework, attendance, fees, results and notices, all in one place.')

@section('content')
<!-- Hero -->
<section class="bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <p class="text-secondary tracking-widest uppercase text-sm font-semibold mb-3">Parent App</p>
            <h1 class="font-display text-5xl md:text-6xl font-semibold leading-tight mb-5">Your child's school, in your pocket.</h1>
            <p class="text-white/90 text-lg mb-8">
                Homework. Attendance. Fees. Results. Notices. Pay online. Submit assignments. Talk to the school. Free for every St. Francis of Assisi parent.
            </p>
            <div class="flex flex-wrap gap-3">
                <a href="/downloads/SFA-Parent-v1.0.1.apk"
                   class="bg-secondary text-primary px-7 py-3 rounded-md font-semibold hover:bg-yellow-300 transition-all shadow-lg flex items-center gap-2">
                    <i class="bx bxl-android text-2xl"></i>
                    Download for Android
                </a>
                <a href="https://parent.stfrancisofassisizm.com" target="_blank" rel="noopener"
                   class="bg-white/10 backdrop-blur border border-white/40 text-white px-7 py-3 rounded-md font-semibold hover:bg-white/20 transition-all flex items-center gap-2">
                    <i class="bx bx-globe text-2xl"></i>
                    Open in Browser (iOS)
                </a>
            </div>
            <p class="text-xs text-white/70 mt-3">Version 1.0.1, 3.1 MB. Android 7+ supported.</p>
        </div>
        <div class="text-center">
            <img src="/images/parent-app/app-icon.png" alt="SFA Parent App icon"
                 class="mx-auto w-48 md:w-64 rounded-3xl shadow-2xl ring-1 ring-white/20"
                 onerror="this.style.display='none'">
        </div>
    </div>
</section>

<!-- What you can do -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">In the App</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-12">Everything a parent needs, in one place.</h2>
        @php
            $features = [
                ['bxs-user-detail', 'See all your children', 'One login, every child enrolled at the school. Switch between them with a tap.'],
                ['bxs-graduation', 'Real-time results', 'View term assessments and report cards as soon as teachers publish them.'],
                ['bxs-calendar-check', 'Attendance', 'See present, absent, late and sick days. Get notified when your child is marked absent.'],
                ['bxs-credit-card', 'Fee statements', 'Outstanding balance, payment history, term-by-term breakdown.'],
                ['bxs-book-content', 'Homework', 'Tonight\'s homework, due dates, attachment downloads, and photo submission.'],
                ['bxs-bell', 'Push notifications', 'Important notices, fee reminders, and school closures, straight to your phone.'],
                ['bxs-receipt', 'Pay fees online', 'Mobile money, bank transfer, or card. Receipts emailed instantly.'],
                ['bxs-conversation', 'Talk to teachers', 'Send a complaint or enquiry directly to the right office.'],
            ];
        @endphp
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($features as $f)
                <div class="bg-gray-50 p-6 border-t-4 border-primary">
                    <div class="text-primary text-3xl mb-3"><i class="bx {{ $f[0] }}"></i></div>
                    <h3 class="font-display text-lg text-primary font-semibold mb-2">{{ $f[1] }}</h3>
                    <p class="text-sm text-gray-700">{{ $f[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Installation Guide -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Installation</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-10">Get it running in three minutes.</h2>

        <!-- Tabs (CSS-only) -->
        <div class="grid md:grid-cols-2 gap-8">

            <!-- ANDROID -->
            <div class="bg-white shadow-sm">
                <div class="bg-primary text-white px-6 py-4 flex items-center gap-3">
                    <i class="bx bxl-android text-3xl"></i>
                    <div>
                        <h3 class="font-display text-xl font-semibold">Android</h3>
                        <p class="text-xs text-white/70">Phones running Android 7 or newer</p>
                    </div>
                </div>
                <div class="p-6">
                    @php
                        $androidSteps = [
                            ['Tap the download button above', 'The file SFA-Parent-v1.0.1.apk will download to your phone.'],
                            ['Allow installation from your browser', 'When asked, tap "Settings", enable "Allow from this source", then go back.'],
                            ['Open the file', 'Pull down your notification panel and tap the downloaded file, or open it from Files.'],
                            ['Tap Install', 'Confirm the install prompt. The app icon will appear on your home screen.'],
                            ['Sign in', 'Open the app and enter the email and password the school sent you on enrolment.'],
                        ];
                    @endphp
                    <ol class="space-y-4">
                        @foreach($androidSteps as $i => $s)
                            <li class="flex gap-4 items-start">
                                <span class="flex-none w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-semibold text-sm">{{ $i + 1 }}</span>
                                <div>
                                    <p class="font-semibold text-primary">{{ $s[0] }}</p>
                                    <p class="text-sm text-gray-700 mt-1">{{ $s[1] }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                    <a href="/downloads/SFA-Parent-v1.0.1.apk"
                       class="mt-6 block w-full bg-accent text-white text-center py-3 rounded-md font-semibold hover:bg-accent-dark transition shadow">
                        <i class="bx bx-download mr-2"></i>Download APK now
                    </a>
                </div>
            </div>

            <!-- iOS / Browser -->
            <div class="bg-white shadow-sm">
                <div class="bg-primary text-white px-6 py-4 flex items-center gap-3">
                    <i class="bx bxl-apple text-3xl"></i>
                    <div>
                        <h3 class="font-display text-xl font-semibold">iPhone, iPad, or any browser</h3>
                        <p class="text-xs text-white/70">Add to your home screen, no App Store needed</p>
                    </div>
                </div>
                <div class="p-6">
                    @php
                        $iosSteps = [
                            ['Open the app in Safari', 'Tap the link or visit parent.stfrancisofassisizm.com directly.'],
                            ['Tap the Share button', 'It looks like a square with an upward arrow at the bottom of Safari.'],
                            ['Choose "Add to Home Screen"', 'Scroll down the share menu, tap it, then tap "Add" in the top right.'],
                            ['Open it like any app', 'The icon will appear on your home screen. It works offline once signed in.'],
                            ['Sign in', 'Enter the email and password the school sent you on enrolment.'],
                        ];
                    @endphp
                    <ol class="space-y-4">
                        @foreach($iosSteps as $i => $s)
                            <li class="flex gap-4 items-start">
                                <span class="flex-none w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-semibold text-sm">{{ $i + 1 }}</span>
                                <div>
                                    <p class="font-semibold text-primary">{{ $s[0] }}</p>
                                    <p class="text-sm text-gray-700 mt-1">{{ $s[1] }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                    <a href="https://parent.stfrancisofassisizm.com" target="_blank" rel="noopener"
                       class="mt-6 block w-full bg-accent text-white text-center py-3 rounded-md font-semibold hover:bg-accent-dark transition shadow">
                        <i class="bx bx-link-external mr-2"></i>Open the parent portal
                    </a>
                </div>
            </div>
        </div>

        <!-- Troubleshooting -->
        <div class="mt-10 bg-white border-l-4 border-accent p-6 shadow-sm">
            <h3 class="font-display text-xl text-primary font-semibold mb-3"><i class="bx bxs-help-circle mr-2 text-accent"></i>Trouble installing?</h3>
            <ul class="space-y-2 text-gray-700 text-sm">
                <li><strong>Android blocks the install:</strong> Settings, Apps, then your browser, then turn on "Install unknown apps" for that browser.</li>
                <li><strong>You forgot your password:</strong> Tap "Forgot password" on the sign-in screen, or call the school office.</li>
                <li><strong>The download fails:</strong> Try Wi-Fi instead of mobile data. The file is 3.1 MB.</li>
                <li><strong>Still stuck:</strong> Call <a href="tel:+260972266217" class="text-accent hover:underline">+260 972 266 217</a> or email <a href="mailto:info@stfrancisofassisizm.com" class="text-accent hover:underline">info@stfrancisofassisizm.com</a>.</li>
            </ul>
        </div>
    </div>
</section>

<!-- Usage Guide with screenshots -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Using the App</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-12">A quick walkthrough.</h2>

        @php
            $screens = [
                ['screen-01-login.jpg',         'Sign in',           'Use the email and password the school office sent you on enrolment. Tap the eye icon to peek at your password before signing in.'],
                ['screen-02-dashboard.jpg',     'Your dashboard',    'See all your children at a glance. Outstanding fees, attendance percentage, and unread notices appear at the top.'],
                ['screen-03-children.jpg',      'Switch children',   'Tap a child to drill into their world: today\'s homework, this term\'s results, attendance and fees.'],
                ['screen-04-attendance.jpg',    'Attendance',        'A monthly calendar of present, absent, late and sick days. Tap a day to see the teacher\'s remark.'],
                ['screen-05-results.jpg',       'Results',           'End-of-term reports per subject. Compare with the class average. Download the report card as PDF.'],
                ['screen-06-fees.jpg',          'Fees',              'Statement, balance, and history. Tap "Pay" to settle by mobile money, bank transfer, or card.'],
                ['screen-07-homework.jpg',      'Homework',          'See what\'s due tonight. Download attachments. Submit your child\'s answer as a photo or document.'],
                ['screen-08-notifications.jpg', 'Notifications',     'School-wide notices, fee reminders, and emergency closures. Tap to read; long-press to dismiss.'],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($screens as $i => $s)
                <figure class="text-center">
                    <div class="aspect-[9/16] bg-gray-100 rounded-2xl overflow-hidden shadow-sm border-4 border-gray-200 mb-3">
                        <img src="/images/parent-app/{{ $s[0] }}"
                             alt="{{ $s[1] }} screen"
                             class="w-full h-full object-cover"
                             onerror="this.style.display='none'">
                    </div>
                    <p class="font-display text-lg text-primary font-semibold">{{ ($i + 1) }}. {{ $s[1] }}</p>
                    <p class="text-sm text-gray-700 mt-2">{{ $s[2] }}</p>
                </figure>
            @endforeach
        </div>

        <p class="mt-10 text-sm text-gray-500 text-center italic">
            Screenshots above are placeholders. Real app screenshots will be added shortly.
        </p>
    </div>
</section>

<!-- FAQ -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-3">Frequently Asked</p>
        <h2 class="font-display text-3xl md:text-4xl font-semibold text-primary leading-tight mb-10">Common questions.</h2>
        @php
            $faqs = [
                ['Is the app free?', 'Yes, completely free for every parent of a St. Francis of Assisi learner. We just need your email on file at the office.'],
                ['Why is the app not on the Google Play Store?', 'We host the APK directly so you always get the latest version without waiting for store approval. Future versions may also be on the Play Store.'],
                ['Why an APK download? Is it safe?', 'The file is signed and hosted on our own school website. Android shows a security prompt the first time, that is normal for any app installed outside the Play Store.'],
                ['Will it work without internet?', 'Once you have signed in once, the app caches the most recent dashboard, results and homework so you can browse offline. Submitting things needs a connection.'],
                ['What if I have more than one child at the school?', 'One login covers every child registered to your guardian record. Switch between them in the dashboard.'],
                ['I am a teacher. Can I use this app?', 'No, teachers have a separate app. Contact the office or visit our staff portal.'],
                ['Where is my child\'s data stored?', 'On our own school servers. We do not share parent or learner data with any third party. See our <a href="/privacy" class="text-accent hover:underline">privacy policy</a>.'],
            ];
        @endphp
        <div class="space-y-3">
            @foreach($faqs as $f)
                <details class="bg-white border-l-4 border-primary group">
                    <summary class="px-5 py-4 cursor-pointer font-display text-lg text-primary font-semibold flex justify-between items-center">
                        {{ $f[0] }}
                        <i class="bx bx-chevron-down group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="px-5 pb-5 text-gray-700">{!! $f[1] !!}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="py-16 bg-primary text-white text-center">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl md:text-4xl font-semibold mb-3">Ready to install?</h2>
        <p class="text-white/85 mb-7">Three minutes from download to dashboard.</p>
        <div class="flex flex-wrap justify-center gap-3">
            <a href="/downloads/SFA-Parent-v1.0.1.apk"
               class="bg-secondary text-primary px-7 py-3 rounded-md font-semibold hover:bg-yellow-300 transition shadow-lg flex items-center gap-2">
                <i class="bx bxl-android text-2xl"></i>Android APK
            </a>
            <a href="https://parent.stfrancisofassisizm.com" target="_blank" rel="noopener"
               class="bg-white/10 border border-white/40 px-7 py-3 rounded-md font-semibold hover:bg-white/20 transition flex items-center gap-2">
                <i class="bx bx-globe text-2xl"></i>Open in browser
            </a>
        </div>
        <p class="text-xs text-white/70 mt-4">Version 1.0.1, 3.1 MB.</p>
    </div>
</section>
@endsection

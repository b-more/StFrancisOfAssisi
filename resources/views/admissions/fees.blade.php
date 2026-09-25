@extends('layouts.app')

@section('title', 'School Fees')
@section('description', 'School fee policy at St. Francis of Assisi: term-by-term billing, four-month payment window, K200-per-referred-child discount for existing parents.')

@section('content')

{{-- HERO --}}
<section style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color:#fff; position:relative; overflow:hidden;">
    <div style="position:absolute; inset:0; opacity:0.08; background-image: radial-gradient(circle at 15% 20%, var(--site-sun) 1px, transparent 1px), radial-gradient(circle at 80% 70%, var(--site-sun) 1px, transparent 1px); background-size:100px 100px, 140px 140px; pointer-events:none;"></div>
    <div class="site-wrap" style="position:relative; padding-block: clamp(60px, 7vw, 100px);">
        <span class="site-kicker" style="color: var(--site-sun);"><a href="/admissions" style="color:inherit; text-decoration:none;">Admissions</a> · School Fees</span>
        <h1 style="margin: 14px 0 12px; font-family: var(--site-display); font-weight: 800; font-size: clamp(40px, 5.5vw, 76px); line-height: 1.02; letter-spacing: -0.03em; color:#fff;">
            School fees, plainly stated.
        </h1>
        <p class="site-lead" style="color: rgba(255,255,255,0.85); max-width: 55ch;">
            Transparent. Reviewed annually. Term-by-term billing — no surprises.
        </p>
    </div>
</section>

{{-- POLICY CARDS + CTA --}}
<section class="site-section" style="background: var(--site-ground);">
    <div class="site-wrap" style="max-width: 900px;">
        <p style="margin: 0 0 32px; font-size: 17.5px; line-height: 1.7; color: var(--site-body);">
            School fees are reviewed annually and published in our termly Fees Schedule, which is available from the school office on request — or download it directly from <a href="/fee-schedule" style="color: var(--site-navy-2); text-decoration: underline; text-decoration-thickness: 2px; text-underline-offset: 3px;">the Fee Schedule page</a>. Our fees policy is built around three commitments:
        </p>

        <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 40px;">
            <div class="site-card" style="border-left: 4px solid var(--site-navy);">
                <div style="display: flex; align-items: flex-start; gap: 16px;">
                    <div style="flex-shrink: 0; width: 44px; height: 44px; border-radius: 12px; background: var(--site-sky-2); color: var(--site-navy); display: flex; align-items: center; justify-content: center;">
                        <i class="bx bxs-calendar" style="font-size: 22px;"></i>
                    </div>
                    <div>
                        <h3 class="site-h3">Term-by-term billing</h3>
                        <p style="margin: 6px 0 0; color: var(--site-body); font-size: 16px; line-height: 1.55;">Payable before the start of each term. No annual lump-sum surprise.</p>
                    </div>
                </div>
            </div>

            <div class="site-card" style="border-left: 4px solid var(--site-navy);">
                <div style="display: flex; align-items: flex-start; gap: 16px;">
                    <div style="flex-shrink: 0; width: 44px; height: 44px; border-radius: 12px; background: var(--site-sky-2); color: var(--site-navy); display: flex; align-items: center; justify-content: center;">
                        <i class="bx bxs-time" style="font-size: 22px;"></i>
                    </div>
                    <div>
                        <h3 class="site-h3">Four-month payment window</h3>
                        <p style="margin: 6px 0 0; color: var(--site-body); font-size: 16px; line-height: 1.55;">Within each term, after which the school's arrears procedure applies.</p>
                    </div>
                </div>
            </div>

            <div class="site-card" style="border-left: 4px solid var(--site-red); background: linear-gradient(120deg, #FFF7E1 0%, #fff 60%);">
                <div style="display: flex; align-items: flex-start; gap: 16px;">
                    <div style="flex-shrink: 0; width: 44px; height: 44px; border-radius: 12px; background: var(--site-sun); color: var(--site-navy); display: flex; align-items: center; justify-content: center;">
                        <i class="bx bxs-gift" style="font-size: 22px;"></i>
                    </div>
                    <div>
                        <h3 class="site-h3" style="color: var(--site-red-ink);">Referral discount</h3>
                        <p style="margin: 6px 0 0; color: var(--site-body); font-size: 16px; line-height: 1.55;">Existing parents who refer a new family receive a discount of <strong style="color: var(--site-red-ink);">K200 per referred child</strong> on their own child's fees — <strong>no upper limit</strong>.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA — contact accountant --}}
        <div style="background: linear-gradient(120deg, var(--site-navy) 0%, var(--site-navy-2) 100%); color: #fff; border-radius: 24px; padding: 40px 32px; text-align: center;">
            <span class="site-kicker" style="color: var(--site-sun);">Current Fees Schedule</span>
            <h2 style="margin: 12px 0 20px; font-family: var(--site-display); font-weight: 800; font-size: clamp(24px, 3vw, 34px); line-height: 1.15; letter-spacing: -0.02em;">
                Get the current schedule.
            </h2>
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 12px;">
                <a href="/fee-schedule" class="site-btn site-btn-sun">Download the schedule</a>
                <a href="tel:+260972266217" class="site-btn site-btn-ghost-light">Call the Accountant</a>
            </div>
            <p style="margin: 24px 0 0; font-size: 15px; color: rgba(255,255,255,0.8);">
                Or email <a href="mailto:stfrancisofassisi.sfa@gmail.com" style="color: var(--site-sun); text-decoration: none;">stfrancisofassisi.sfa@gmail.com</a>
            </p>
        </div>
    </div>
</section>

@endsection

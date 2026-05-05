<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>How it works – XYZ Homes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./NeueMontreal-Regular.otf" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cream: '#f5f3ec',
                        sand: '#ede9df',
                        orange: '#e07b39',
                        'orange-dark': '#c96b2a',
                        ink: '#1a1a1a',
                        muted: '#6b6b6b',
                        border: '#ddd8ce',
                    },
                    fontFamily: {
                        sans: ['Neue Montreal', 'sans-serif'],
                        display: ['Neue Montreal', 'serif'],
                    },
                }
            }
        }
    </script>
    <style>
        .step-card {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp .5s ease forwards;
        }

        .step-card:nth-child(1) {
            animation-delay: .1s;
        }

        .step-card:nth-child(3) {
            animation-delay: .2s;
        }

        .step-card:nth-child(5) {
            animation-delay: .3s;
        }

        .step-card:nth-child(7) {
            animation-delay: .4s;
        }

        .step-card:nth-child(9) {
            animation-delay: .5s;
        }

        .step-card:nth-child(11) {
            animation-delay: .6s;
        }

        .step-icon-svg {
            width: 22px;
            height: 22px;
            stroke: #1a1a1a;
            fill: none;
            stroke-width: 1.6;
            stroke-linecap: round;
            stroke-linejoin: round;
        }
    </style>
</head>

<body class="bg-cream text-ink">

    <?php include 'includes/navbar.php'; ?>

    <!-- HERO -->
    <section class="bg-[#FCFCF7] flex flex-col items-center w-full  ">
        <div
            class="flex flex-col-reverse items-center justify-start gap-5 px-4 py-10 w-full max-w-[768px] xl:max-w-[1440px] xl:p-20 xl:gap-10">
            <picture>
                <source media="(max-width: 1279px)"
                    srcset="https://cdn.jswonehomes.com/e8vaeucvzyzicq1licwp_ca9bd68b20/e8vaeucvzyzicq1licwp_ca9bd68b20.webp 1x, https://cdn.jswonehomes.com/e8vaeucvzyzicq1licwp_ca9bd68b20/e8vaeucvzyzicq1licwp_ca9bd68b20.webp 2x">
                <source media="(min-width: 1280px)"
                    srcset="https://cdn.jswonehomes.com/ky1otg6bcuwxb0fm2iyd_61c19122ae/ky1otg6bcuwxb0fm2iyd_61c19122ae.webp 1x, https://cdn.jswonehomes.com/ky1otg6bcuwxb0fm2iyd_61c19122ae/ky1otg6bcuwxb0fm2iyd_61c19122ae.webp 2x">
                <img alt="e8vaeucvzyzicq1licwp.webp" loading="lazy" width="480" height="190" decoding="async"
                    class="h-[190px] top-0 left-0 w-full object-cover rounded-lg xl:rounded-xl xl:h-[368px] xl:w-[1280px] xl:basis-1/3"
                    style="color:transparent"
                    src="https://storage.googleapis.com/public-homes-web-media-prod/e8vaeucvzyzicq1licwp_ca9bd68b20/e8vaeucvzyzicq1licwp_ca9bd68b20.webp">
            </picture>
            <div>
                <h1 class="text-center font-display text-3xl md:text-4xl font-semibold text-ink mb-2">
                    How it works</h1>
                <p class="text-center text-base text-muted">
                    Expertly built homes, from concept to completion in approximately 14 months.</p>
            </div>
        </div>
    </section>

    <!-- PROCESS STEPS -->
    <section class="bg-[#F6F5EF] w-full px-6 md:px-12 py-16 md:py-20">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-2">Our building process at glance
            </h2>
            <p class="text-base text-muted">Explore our step-by-step process of building your dream home.</p>
        </div>

        <div class="max-w-6xl mx-auto flex flex-col">

            <div
                class="step-card bg-white rounded-xl px-6 py-5 flex items-start gap-5 border border-border hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                <div
                    class="w-11 h-11 bg-cream rounded-lg flex items-center justify-center flex-shrink-0 border border-border">
                    <svg class="step-icon-svg" viewBox="0 0 24 24">
                        <path d="M17 11h-5m-5 0h.01M3 6l2 2 4-4" />
                        <circle cx="11" cy="11" r="8" />
                        <path d="M21 21l-4.35-4.35" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-base font-semibold text-ink mb-1">Book a meeting</h3>
                    <p class="text-muted leading-relaxed">Schedule a session to learn about us and our process.
                    </p>
                </div>
            </div>

            <div class="ml-[22px] w-px h-7 border-l-2 border-dashed border-[#c5bfb3]"></div>

            <div
                class="step-card bg-white rounded-xl px-6 py-5 flex items-start gap-5 border border-border hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                <div
                    class="w-11 h-11 bg-cream rounded-lg flex items-center justify-center flex-shrink-0 border border-border">
                    <svg class="step-icon-svg" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" />
                        <path d="M21 21l-4.35-4.35" />
                        <path d="M8 11h6M11 8v6" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-base font-semibold text-ink mb-1">Do your research</h3>
                    <p class="text-muted leading-relaxed">Explore reference sites, get a preliminary quote, and
                        review our contracts.</p>
                </div>
            </div>

            <div class="ml-[22px] w-px h-7 border-l-2 border-dashed border-[#c5bfb3]"></div>

            <div
                class="step-card bg-white rounded-xl px-6 py-5 flex items-start gap-5 border border-border hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                <div
                    class="w-11 h-11 bg-cream rounded-lg flex items-center justify-center flex-shrink-0 border border-border">
                    <svg class="step-icon-svg" viewBox="0 0 24 24">
                        <path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-base font-semibold text-ink mb-1">Begin design</h3>
                    <p class="text-muted leading-relaxed">Make the design phase payment to begin crafting your
                        dream home designed by our empanelled architects.</p>
                </div>
            </div>

            <div class="ml-[22px] w-px h-7 border-l-2 border-dashed border-[#c5bfb3]"></div>

            <div
                class="step-card bg-white rounded-xl px-6 py-5 flex items-start gap-5 border border-border hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                <div
                    class="w-11 h-11 bg-cream rounded-lg flex items-center justify-center flex-shrink-0 border border-border">
                    <svg class="step-icon-svg" viewBox="0 0 24 24">
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                        <path d="M8 21h8M12 17v4" />
                        <path d="M6 8h.01M10 8h4" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-base font-semibold text-ink mb-1">Pre-Construction</h3>
                    <p class="text-muted leading-relaxed">Make the pre-construction payment and leave the rest
                        to us – while we finalise designs, conduct soil tests, provide final quotations and project
                        plans, arrange contractor meetings, and complete legal formalities.</p>
                </div>
            </div>

            <div class="ml-[22px] w-px h-7 border-l-2 border-dashed border-[#c5bfb3]"></div>

            <div
                class="step-card bg-white rounded-xl px-6 py-5 flex items-start gap-5 border border-border hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                <div
                    class="w-11 h-11 bg-cream rounded-lg flex items-center justify-center flex-shrink-0 border border-border">
                    <svg class="step-icon-svg" viewBox="0 0 24 24">
                        <rect x="2" y="7" width="20" height="14" rx="2" />
                        <path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" />
                        <path d="M12 12v4M10 14h4" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-base font-semibold text-ink mb-1">Construction</h3>
                    <p class="text-muted leading-relaxed">Track progress through weekly updates, scheduled
                        meetings and detailed reports.</p>
                </div>
            </div>

            <div class="ml-[22px] w-px h-7 border-l-2 border-dashed border-[#c5bfb3]"></div>

            <div
                class="step-card bg-white rounded-xl px-6 py-5 flex items-start gap-5 border border-border hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                <div
                    class="w-11 h-11 bg-cream rounded-lg flex items-center justify-center flex-shrink-0 border border-border">
                    <svg class="step-icon-svg" viewBox="0 0 24 24">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-base font-semibold text-ink mb-1">Handover and Housewarming</h3>
                    <p class="text-muted leading-relaxed">From dream to reality – enjoy a seamless handover with
                        one-year defect liability support, a structural stability certificate and a five-year structural
                        warranty for worry-free ownership.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ===================== CTA / FORM ===================== -->
    <section class="w-full px-6 md:px-12 xl:px-32 py-16 md:py-20 text-center"
        style="background: linear-gradient(160deg, #fdf0e6 0%, #fce4d0 100%);">

        <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-3">You Dream. We Build.</h2>
        <p class="text-base text-muted max-w-xl mx-auto mb-10 leading-relaxed">Ready to build your dream home? Schedule
            a free consultation today and begin the journey of turning your dream into reality.</p>

        <div class="bg-white max-w-3xl mx-auto rounded-2xl p-7 md:p-8 border border-border shadow-md text-left">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div class="relative">
                    <label
                        class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                        Full name
                    </label>
                    <input type="text" id="cta_name" placeholder="Full name"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-300 transition-all placeholder-slate-300" />
                </div>

                <div class="relative">
                    <label
                        class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                        Email
                    </label>
                    <input type="email" id="cta_email" placeholder="Email"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-300 transition-all placeholder-slate-300" />
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div class="relative">
                    <label
                        class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                        Mobile Number
                    </label>
                    <input type="tel" id="cta_mobile" placeholder="Mobile Number"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-300 transition-all placeholder-slate-300" />
                </div>

                <div class="relative flex items-center">
                    <label
                        class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                        Choose City
                    </label>
                    <select id="cta_city"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none bg-white appearance-none cursor-pointer focus:border-orange-300 transition-all">
                        <option>Choose City</option>
                        <option>Hyderabad</option>
                        <option>Bangalore</option>
                        <option>Mumbai</option>
                        <option>Delhi NCR</option>
                        <option>Chennai</option>
                        <option>Kochi</option>
                        <option>Pune</option>
                    </select>
                    <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none flex items-center">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9l6 6 6-6"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                <div class="relative flex items-center">
                    <label
                        class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                        I want to start construction in
                    </label>
                    <select id="cta_timeline"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none bg-white appearance-none cursor-pointer focus:border-orange-300 transition-all">
                        <option>0–3 months</option>
                        <option>3–6 months</option>
                        <option>6–12 months</option>
                        <option>More than 12 months</option>
                    </select>
                    <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none flex items-center">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9l6 6 6-6"></path>
                        </svg>
                    </div>
                </div>

                <div class="flex items-center gap-4 pt-1">
                    <span class="text-[14px] text-slate-700">Do you own a plot of land?</span>
                    <div class="flex items-center gap-4">
                        <label class="flex items-center gap-1.5 text-sm text-slate-700 cursor-pointer">
                            <input type="radio" name="land" value="Yes" class="w-5 h-5 accent-[#ffb380]" /> Yes
                        </label>
                        <label class="flex items-center gap-1.5 text-sm text-slate-700 cursor-pointer">
                            <input type="radio" name="land" value="No" class="w-5 h-5 accent-[#ffb380]" /> No
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-2 mb-5 mt-1">
                <input type="checkbox" id="cta_agree" class="w-4 h-4 accent-orange cursor-pointer" />
                <span class="text-xs text-muted">I agree to <a href="privacy-policy.html"
                        class="text-orange underline">Privacy Policy</a>
                    and <a href="terms-and-conditions.html" class="text-orange underline">Terms &amp;
                        Conditions</a></span>
            </div>

            <div class="text-center">
                <!-- Success message -->
                <div id="ctaSuccess" style="display:none"
                    class="mb-4 px-5 py-3 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm font-medium">
                    ✅ Your meeting has been booked! We'll contact you shortly.
                </div>
                <!-- Error message -->
                <div id="ctaError" style="display:none"
                    class="mb-4 px-5 py-3 bg-red-50 border border-red-200 rounded-xl text-red-600 text-sm font-medium">
                </div>

                <button id="ctaSubmitBtn"
                    onclick="submitBooking('ctaSubmitBtn','ctaSuccess','ctaError','cta_name','cta_email','cta_mobile','cta_city','cta_timeline','land','cta_agree', false)"
                    class="bg-orange text-white font-semibold py-3 px-7 rounded-lg hover:bg-orange-dark transition-colors cursor-pointer border-0">
                    Book a meeting
                </button>

            </div>
        </div>
    </section>

    <?php include 'includes/action-buttons.php'; ?>
    <?php include 'includes/footer.php'; ?>

    <!-- =====================================================
     BOOK A MEETING — POPUP MODAL
     ===================================================== -->

    <!-- ── Overlay ─────────────────────────────────────────── -->
    <div id="bookingModal" class="fixed inset-0 z-[999] flex items-center justify-center px-4"
        style="display:none!important">

        <!-- Backdrop -->
        <div id="modalBackdrop" class="absolute inset-0 bg-black/50 backdrop-blur-sm" onclick="closeBookingModal()">
        </div>

        <!-- Modal panel -->
        <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-2xl mx-auto z-10
                max-h-[90vh] overflow-y-auto" style="animation: modalSlideUp .3s cubic-bezier(.4,0,.2,1) both">

            <!-- Header -->
            <div class="flex items-start justify-between px-7 pt-7 pb-4 border-b border-slate-100">
                <div>
                    <h2 class="font-display text-2xl font-semibold text-ink leading-tight">Book a Meeting</h2>
                    <p class="text-sm text-muted mt-1">Schedule a free consultation with our experts.</p>
                </div>
                <!-- Close button -->
                <button onclick="closeBookingModal()"
                    class="ml-4 mt-0.5 flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center transition-colors cursor-pointer border-0">
                    <svg viewBox="0 0 24 24" class="w-4 h-4 stroke-ink fill-none stroke-2 stroke-linecap-round">
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>
            </div>

            <!-- Form body -->
            <div class="px-7 py-6">

                <!-- Row 1: Name + Email -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                    <div class="relative">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Full name
                        </label>
                        <input type="text" id="modal_name" placeholder="Full name"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-400 transition-all placeholder-slate-300" />
                    </div>
                    <div class="relative">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Email
                        </label>
                        <input type="email" id="modal_email" placeholder="Email"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-400 transition-all placeholder-slate-300" />
                    </div>
                </div>

                <!-- Row 2: Mobile + City -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                    <div class="relative">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Mobile Number
                        </label>
                        <input type="tel" id="modal_mobile" placeholder="Mobile Number"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-400 transition-all placeholder-slate-300" />
                    </div>
                    <div class="relative flex items-center">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Choose City
                        </label>
                        <select id="modal_city"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none bg-white appearance-none cursor-pointer focus:border-orange-400 transition-all">
                            <option>Choose City</option>
                            <option>Hyderabad</option>
                            <option>Bangalore</option>
                            <option>Mumbai</option>
                            <option>Delhi NCR</option>
                            <option>Chennai</option>
                            <option>Kochi</option>
                            <option>Pune</option>
                        </select>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Row 3: Timeline + Land -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                    <div class="relative flex items-center">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            I want to start construction in
                        </label>
                        <select id="modal_timeline"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none bg-white appearance-none cursor-pointer focus:border-orange-400 transition-all">
                            <option>0–3 months</option>
                            <option>3–6 months</option>
                            <option>6–12 months</option>
                            <option>More than 12 months</option>
                        </select>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 pt-1">
                        <span class="text-[14px] text-slate-700 whitespace-nowrap">Do you own a plot?</span>
                        <div class="flex items-center gap-4">
                            <label class="flex items-center gap-1.5 text-sm text-slate-700 cursor-pointer">
                                <input type="radio" name="modal_land" value="Yes" class="w-4 h-4 accent-[#e07b39]" />
                                Yes
                            </label>
                            <label class="flex items-center gap-1.5 text-sm text-slate-700 cursor-pointer">
                                <input type="radio" name="modal_land" value="No" class="w-4 h-4 accent-[#e07b39]" /> No
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Consent -->
                <div class="flex items-center gap-2 mb-6 mt-1">
                    <input type="checkbox" id="modal_agree" class="w-4 h-4 accent-[#e07b39] cursor-pointer" />
                    <span class="text-xs text-muted">I agree to <a href="privacy-policy.html"
                            class="text-[#e07b39] underline">Privacy Policy</a> and <a href="terms-and-conditions.html"
                            class="text-[#e07b39] underline">Terms &amp; Conditions</a></span>
                </div>

                <!-- Submit -->
                <div class="text-center">
                    <!-- Success message (hidden by default) -->
                    <div id="bookingSuccess" style="display:none"
                        class="mb-4 px-5 py-3 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm font-medium">
                        ✅ Your meeting has been booked! We'll contact you shortly.
                    </div>

                    <!-- Error message (hidden by default) -->
                    <div id="bookingError" style="display:none"
                        class="mb-4 px-5 py-3 bg-red-50 border border-red-200 rounded-xl text-red-600 text-sm font-medium">
                    </div>

                    <button id="bookingSubmitBtn" onclick="submitBooking()"
                        class="bg-[#e07b39] text-white font-semibold py-3 px-10 rounded-xl hover:bg-[#c96b2a] transition-colors cursor-pointer border-0 text-sm tracking-wide">
                        Book a Meeting
                    </button>
                </div>

            </div>
        </div>
    </div>




    <script src="script.js?v=2"></script>
</body>

</html>
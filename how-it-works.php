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

    <?php include 'includes/cta-form.php'; ?>
    <?php include 'includes/action-buttons.php'; ?>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/book-meeting-popup.php'; ?>

    <script src="script.js?v=2"></script>

</body>

</html>
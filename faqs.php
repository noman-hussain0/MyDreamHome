<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQs – JSW One Homes</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        /* Category pills */
        .cat-pill {
            border: 1px solid #c8c3b8;
            color: #1a1a1a;
            background: transparent;
            border-radius: 99px;
            padding: 7px 20px;
            font-size: 14px;
            font-family: 'Neue Montreal', sans-serif;
            cursor: pointer;
            transition: background .2s, color .2s, border-color .2s;
            white-space: nowrap;
            letter-spacing: 0.4px;
        }

        .cat-pill:hover {
            border-color: #1a1a1a;
        }

        .cat-pill.active {
            background: #1a1a1a;
            color: #fff;
            border-color: #1a1a1a;
        }

        /* FAQ accordion */
        .faq-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease, opacity .25s ease;
            opacity: 0;
        }

        .faq-body.open {
            max-height: 400px;
            opacity: 1;
        }

        .faq-plus {
            transition: transform .25s ease;
            flex-shrink: 0;
        }

        .faq-row.open .faq-plus {
            transform: rotate(45deg);
        }
    </style>
</head>

<body class="bg-cream text-ink">

    <?php include 'includes/navbar.php'; ?>

    <!-- ===================== HERO — Title + Banner Image ===================== -->
    <section class="bg-[#FCFCF7] flex flex-col items-center w-full  ">
        <div
            class="flex flex-col-reverse items-center justify-start gap-5 px-4 py-10 w-full max-w-[768px] xl:max-w-[1440px] xl:p-20 xl:gap-10">
            <picture>
                <img alt="e8vaeucvzyzicq1licwp.webp" loading="lazy" width="480" height="190" decoding="async"
                    class="h-[190px] top-0 left-0 w-full object-cover rounded-lg xl:rounded-xl xl:h-[368px] xl:w-[1280px] xl:basis-1/3"
                    style="color:transparent"
                    src="https://storage.googleapis.com/public-homes-web-media-prod/FAQ_Mob_8da89e65c5/FAQ_Mob_8da89e65c5.webp">
            </picture>
            <div>
                <h1 class="text-center font-display text-3xl md:text-4xl font-semibold text-ink mb-2">
                    Frequently asked questions</h1>
            </div>
        </div>
    </section>

    <!-- ===================== CATEGORIES + FAQ ACCORDION ===================== -->
    <section class="w-full bg-cream px-6 md:px-12 xl:px-32 py-20">
        <div class="max-w-7xl mx-auto">

            <!-- Heading + filter pills -->
            <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-6">Categories</h2>
            <div class="flex flex-wrap gap-2.5 mb-10">
                <button class="cat-pill active" data-cat="all" onclick="filterFaqs(this)">All</button>
                <button class="cat-pill" data-cat="jsw" onclick="filterFaqs(this)">JSW One Homes</button>
                <button class="cat-pill" data-cat="material" onclick="filterFaqs(this)">Material procurement</button>
                <button class="cat-pill" data-cat="construction" onclick="filterFaqs(this)">Construction</button>
                <button class="cat-pill" data-cat="design" onclick="filterFaqs(this)">Design</button>
            </div>

            <!--
            KEY FIX: Two completely independent flex columns side by side.
            Each column is its own vertical stack — opening a row in column 1
            CANNOT push anything in column 2 because they are separate containers.
        -->
            <div class="flex flex-col lg:flex-row gap-0 lg:gap-16" id="faqGrid">

                <!-- ══ LEFT COLUMN ══════════════════════════════════════════ -->
                <div class="flex-1 min-w-0" id="faqColLeft">

                    <!-- JSW One Homes -->
                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Since how long has JSW been in the
                                    construction business?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">

                                    JSW One Homes has been in the
                                    construction and home-building space for over a decade, backed by the JSW Group's
                                    legacy in steel, cement, and infrastructure. We've delivered thousands of quality
                                    homes across India.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Does JSW One Homes undertake home
                                    designing services?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Yes — we provide end-to-end home
                                    design: architectural planning, structural drawings, 3D visualisations, interior
                                    design consultation, and material selection guidance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Does JSW One Homes undertake any
                                    commercial projects?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">JSW One Homes primarily focuses
                                    on residential construction. Please contact our team directly for commercial
                                    enquiries.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Does JSW One Homes offer any construction
                                    warranties?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Yes — a comprehensive
                                    post-construction warranty covering structural integrity and key installations,
                                    giving you complete peace of mind after handover.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Will I get to choose the materials that
                                    are planned to be used in my project?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Absolutely. Homeowners can
                                    select from a curated range of premium, verified materials. Our team guides you
                                    through the selection at our experience centres.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Can I change any project specifications,
                                    after signing the agreement?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Yes, via a formal change order
                                    process. Our team will assess impact on cost and timeline and present a revised
                                    proposal before proceeding.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Is it mandatory to purchase all materials
                                    through JSW One Homes?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Structural and core materials
                                    must be procured through JSW One Homes to maintain quality and warranty eligibility.
                                    For finishing items you have more flexibility with guidance from our team.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Which material categories does JSW One
                                    Homes support?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Steel, cement, bricks,
                                    aggregates, tiles, sanitaryware, electrical fittings, plumbing, paints, windows,
                                    doors and more — sourced from trusted brand partners.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">How does the selection process work for
                                    tiles, sanitaryware, and other finishes?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">We invite you to our experience
                                    centres where our design team walks you through available options. See and touch
                                    samples before finalising, ensuring you are fully satisfied with every choice.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Material procurement -->
                    <div class="faq-item" data-cat="material">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Will I get to choose the materials that
                                    are planned to be used in my project?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Absolutely. Homeowners can
                                    select from a curated range of premium, verified materials. Our team guides you
                                    through the selection at our experience centres.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="material">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Can I change any project specifications,
                                    after signing the agreement?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Yes, via a formal change order
                                    process. Our team will assess impact on cost and timeline and present a revised
                                    proposal before proceeding.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="material">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Is it mandatory to purchase all materials
                                    through JSW One Homes?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Structural and core materials
                                    must be procured through JSW One Homes to maintain quality and warranty eligibility.
                                    For finishing items you have more flexibility with guidance from our team.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="material">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Which material categories does JSW One
                                    Homes support?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Steel, cement, bricks,
                                    aggregates, tiles, sanitaryware, electrical fittings, plumbing, paints, windows,
                                    doors and more — sourced from trusted brand partners.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="material">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">How does the selection process work for
                                    tiles, sanitaryware, and other finishes?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">We invite you to our experience
                                    centres where our design team walks you through available options. See and touch
                                    samples before finalising, ensuring you are fully satisfied with every choice.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Construction -->
                    <div class="faq-item" data-cat="construction">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">How do you ensure quality assurance and
                                    quality control on our project?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Dedicated quality engineers
                                    conduct stage-wise inspections on-site. All materials are sourced from verified
                                    partners and tested before use. You receive inspection reports at every milestone.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="construction">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Can I visit the construction site during
                                    the project?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Yes — we encourage site visits.
                                    Schedule them with your project manager. You also get real-time progress updates
                                    through our homeowner portal.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Design -->
                    <div class="faq-item" data-cat="design">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">How are the Vastu principles incorporated
                                    during the design stage?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Our architects incorporate Vastu
                                    shastra principles as part of your design brief. Specify your requirements during
                                    the initial consultation and they will be integrated into the layout and
                                    orientation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="design">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">How will an architect be allocated to our
                                    projects?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">After project confirmation, a
                                    dedicated architect from our verified panel is assigned based on your location and
                                    requirements. You can review their profile and portfolio before onboarding.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="design">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">What are exclusions in the design
                                    package?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Exclusions typically include
                                    landscaping beyond the building footprint, custom furniture design, and government
                                    approval fees — though our team can facilitate these as add-ons.</p>
                            </div>
                        </div>
                    </div>

                </div><!-- /faqColLeft -->

                <!-- ══ RIGHT COLUMN ═════════════════════════════════════════ -->
                <div class="flex-1 min-w-0" id="faqColRight">

                    <!-- JSW One Homes -->
                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">How long does it take to construct a
                                    residential project?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Typically 12–18 months depending
                                    on size, design complexity, and site conditions. Your dedicated project manager
                                    keeps you updated at every milestone.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Does JSW One Homes undertake home interior
                                    services?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Yes. Our interior services cover
                                    space planning, furniture selection, false ceilings, lighting design, and complete
                                    finish-out through our network of verified interior professionals.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Does JSW One Homes assist in getting
                                    government approvals &amp; loans?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Yes. We assist with building
                                    permits, RERA registrations, and have tie-ups with leading banks and NBFCs to
                                    facilitate home construction loans.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Does JSW One Homes provide any protection
                                    against delays in completion of the project?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">We have contractual
                                    delay-protection clauses. If delays occur due to reasons attributable to us,
                                    homeowners are compensated per agreed terms. Our project management system is
                                    designed to minimise delays.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">What if there is any increase in material
                                    prices during the course of the project? Will it be absorbed by the
                                    contractor?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Material prices are locked in at
                                    the time of contract signing. Any subsequent price changes for agreed materials are
                                    absorbed by JSW One Homes, protecting you from market fluctuations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">What are the payments process &amp;
                                    controls in place for a project?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Payments are milestone-based,
                                    linked to verified construction progress. You pay only when agreed stages are
                                    completed and inspected — ensuring full transparency and control.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">What are the benefits of procuring
                                    materials through JSW One Homes?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Verified quality, better pricing
                                    through bulk agreements, faster delivery, and seamless on-site coordination —
                                    eliminating delays caused by material shortages.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Which brands are partnered with JSW One
                                    Homes?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Leading Indian and international
                                    brands in steel (JSW Steel), cement, tiles, plumbing, electrical, paint, and more —
                                    all carefully vetted for quality and reliability.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Material procurement -->
                    <div class="faq-item" data-cat="material">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">What if there is any increase in material
                                    prices during the course of the project? Will it be absorbed by the
                                    contractor?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Material prices are locked in at
                                    the time of contract signing. Any subsequent price changes for agreed materials are
                                    absorbed by JSW One Homes, protecting you from market fluctuations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="material">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">What are the payments process &amp;
                                    controls in place for a project?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Payments are milestone-based,
                                    linked to verified construction progress. You pay only when agreed stages are
                                    completed and inspected — ensuring full transparency and control.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="material">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">What are the benefits of procuring
                                    materials through JSW One Homes?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Verified quality, better pricing
                                    through bulk agreements, faster delivery, and seamless on-site coordination —
                                    eliminating delays caused by material shortages.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="material">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Which brands are partnered with JSW One
                                    Homes?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Leading Indian and international
                                    brands in steel (JSW Steel), cement, tiles, plumbing, electrical, paint, and more —
                                    all carefully vetted for quality and reliability.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Construction -->
                    <div class="faq-item" data-cat="construction">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Who supervises the construction on
                                    site?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">A dedicated site engineer and
                                    project manager are assigned to your project. They coordinate with contractors,
                                    track daily progress, and report to you regularly via our app and check-ins.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="construction">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">What happens if there is a defect
                                    discovered post-handover?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Structural defects discovered
                                    within the warranty period are rectified at no extra cost. Raise a request through
                                    our after-sales support team and we will resolve it promptly.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Design -->
                    <div class="faq-item" data-cat="design">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">How are the design revisions considered?
                                    What if the requirements are not fulfilled as offered in packages?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Each package includes a defined
                                    number of revisions. Additional rounds can be purchased if needed. Our team works
                                    closely with you to ensure the final design meets your vision.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="design">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">What are inclusions in the design
                                    package?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Architectural plans, structural
                                    drawings, MEP drawings, 3D visualisations, and material selection guidance.
                                    Additional services can be added as required.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="design">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">What is the medium of meeting with
                                    architect?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Meetings can be in person at our
                                    experience centres, via video call, or through our homeowner app — whichever is most
                                    convenient for you.</p>
                            </div>
                        </div>
                    </div>

                </div><!-- /faqColRight -->

            </div><!-- /faqGrid -->
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
    <script>

        /* ── FAQ accordion ── */
        function toggleFaq(rowEl) {
            const body = rowEl.querySelector('.faq-body');
            const isOpen = rowEl.classList.contains('open');
            document.querySelectorAll('.faq-row.open').forEach(r => {
                r.classList.remove('open');
                r.querySelector('.faq-body').classList.remove('open');
            });
            if (!isOpen) {
                rowEl.classList.add('open');
                body.classList.add('open');
            }
        }

        /* ── Category filter ── */
        function filterFaqs(btn) {
            document.querySelectorAll('.cat-pill').forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            const cat = btn.dataset.cat;
            // close any open accordion
            document.querySelectorAll('.faq-row.open').forEach(r => {
                r.classList.remove('open');
                r.querySelector('.faq-body').classList.remove('open');
            });
            document.querySelectorAll('.faq-item').forEach(item => {
                item.style.display = (cat === 'all' || item.dataset.cat === cat) ? '' : 'none';
            });
        }
    </script>
</body>

</html>
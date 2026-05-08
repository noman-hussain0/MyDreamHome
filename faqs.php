<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="title" content="FAQs - Hyderabad Constructions">
    <meta name="description" content="FAQs - Hyderabad Constructions">
    <meta name="keywords" content="Hyderabad Constructions">

    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="30 days">
    <meta name="author" content="Hyderabad Constructions">

    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link rel="apple-touch-icon" href="/images/favicon.png">

    <meta name="theme-color" content="#c96b2a">
    <meta name="apple-mobile-web-app-status-bar" content="#c96b2a">

    <title>FAQs - Hyderabad Constructions</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/theme-config.js"></script>
</head>

<body class="bg-cream text-ink">

    <?php include 'includes/navbar.php'; ?>

    <section class="bg-[#FCFCF7] flex flex-col items-center w-full  ">
        <div
            class="flex flex-col-reverse items-center justify-start gap-5 px-4 py-10 w-full max-w-[768px] xl:max-w-[1440px] xl:p-20 xl:gap-10">
            <picture>
                <img alt="e8vaeucvzyzicq1licwp.webp" loading="lazy" width="480" height="190" decoding="async"
                    class="h-[190px] top-0 left-0 w-full object-cover rounded-lg xl:rounded-xl xl:h-[368px] xl:w-[1280px] xl:basis-1/3"
                    style="color:transparent"
                    src="assets/images/faqs.jpg">
            </picture>
            <div>
                <h1 class="text-center font-display text-3xl md:text-4xl font-semibold text-ink mb-2">
                    Frequently asked questions</h1>
            </div>
        </div>
    </section>

    <section class="w-full bg-cream px-6 md:px-12 xl:px-32 py-20">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-6">Categories</h2>
            <div class="flex flex-wrap gap-2.5 mb-10">
                <button class="cat-pill active" data-cat="all" onclick="filterFaqs(this)">All</button>
                <button class="cat-pill" data-cat="jsw" onclick="filterFaqs(this)">Hyderabad Constructions</button>
                <button class="cat-pill" data-cat="material" onclick="filterFaqs(this)">Material procurement</button>
                <button class="cat-pill" data-cat="construction" onclick="filterFaqs(this)">Construction</button>
                <button class="cat-pill" data-cat="design" onclick="filterFaqs(this)">Design</button>
            </div>
            <div class="flex flex-col lg:flex-row gap-0 lg:gap-16" id="faqGrid">
                <div class="flex-1 min-w-0" id="faqColLeft">
                    <!-- Hyderabad Constructions -->
                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Since how long has Hyderabad Constructions been in the
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

                                    Hyderabad Constructions has been in the
                                    construction and home-building space for over a decade, backed by the Hyderabad Constructions Group's
                                    legacy in steel, cement, and infrastructure. We've delivered thousands of quality
                                    homes across India.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Does Hyderabad Constructions undertake home
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
                                <span class="text-base text-ink leading-snug">Does Hyderabad Constructions undertake any
                                    commercial projects?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Hyderabad Constructions primarily focuses
                                    on residential construction. Please contact our team directly for commercial
                                    enquiries.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Does Hyderabad Constructions offer any construction
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
                                    through Hyderabad Constructions?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Structural and core materials
                                    must be procured through Hyderabad Constructions to maintain quality and warranty eligibility.
                                    For finishing items you have more flexibility with guidance from our team.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="jsw">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Which material categories does Hyderabad Constructions support?</span>
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
                                    through Hyderabad Constructions?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Structural and core materials
                                    must be procured through Hyderabad Constructions to maintain quality and warranty eligibility.
                                    For finishing items you have more flexibility with guidance from our team.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-cat="material">
                        <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                            <div class="flex items-start justify-between gap-4">
                                <span class="text-base text-ink leading-snug">Which material categories does Hyderabad Constructions support?</span>
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

                </div>

                <div class="flex-1 min-w-0" id="faqColRight">
                    <!-- Hyderabad Constructions -->
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
                                <span class="text-base text-ink leading-snug">Does Hyderabad Constructions undertake home interior
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
                                <span class="text-base text-ink leading-snug">Does Hyderabad Constructions assist in getting
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
                                <span class="text-base text-ink leading-snug">Does Hyderabad Constructions provide any protection
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
                                    absorbed by Hyderabad Constructions, protecting you from market fluctuations.</p>
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
                                    materials through Hyderabad Constructions?</span>
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
                                <span class="text-base text-ink leading-snug">Which brands are partnered with Hyderabad Constructions?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Leading Indian and international
                                    brands in steel, cement, tiles, plumbing, electrical, paint, and more —
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
                                    absorbed by Hyderabad Constructions, protecting you from market fluctuations.</p>
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
                                    materials through Hyderabad Constructions?</span>
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
                                <span class="text-base text-ink leading-snug">Which brands are partnered with Hyderabad Constructions?</span>
                                <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="16" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                </svg>
                            </div>
                            <div class="faq-body">
                                <p class="text-sm text-muted leading-relaxed pt-2 pb-1">Leading Indian and international
                                    brands in steel, cement, tiles, plumbing, electrical, paint, and more —
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

                </div>

            </div>
        </div>
    </section>

    <?php include 'includes/cta-form.php'; ?>
    <?php include 'includes/action-buttons.php'; ?>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/book-meeting-popup.php'; ?>

    <script src="assets/js/script.js"></script>

</body>

</html>
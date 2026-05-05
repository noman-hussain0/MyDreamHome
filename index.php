<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Construction in Hyderabad – JSW One Homes</title>
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
        /* ---- Hero ---- */
        .hero-bg {
            background: linear-gradient(135deg, #fdf6ee 0%, #fce8d5 50%, #f9dfc8 100%);
        }

        /* ---- Package expand/collapse ---- */
        .pkg-feature-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height .3s ease, opacity .2s ease;
            opacity: 0;
        }

        .pkg-feature-body.open {
            max-height: 200px;
            opacity: 1;
        }

        .pkg-chevron {
            transition: transform .25s;
        }

        .pkg-feature-row.open .pkg-chevron {
            transform: rotate(180deg);
        }

        /* ---- Stat card ---- */
        .stat-card {
            transition: transform .2s, box-shadow .2s;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, .08);
        }

        /* ---- Pkg card ---- */
        .pkg-card {
            transition: transform .2s, box-shadow .2s;
        }

        .pkg-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, .1);
        }

        .pkg-premium {
            border: 2px solid #e07b39;
        }

        /* ---- Process card ---- */
        .process-card {
            transition: transform .2s, box-shadow .2s;
        }

        .process-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, .08);
        }

        /* ---- Why icon ---- */
        .why-icon-bg {
            background: #fff8f2;
            border: 1px solid #f0c9a8;
        }



        /* ---- Video ---- */
        .video-wrap {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
        }

        .video-wrap iframe {
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 16px;
        }



        /* ---- Play button ---- */
        /* .play-btn {
            width: 44px;
            height: 44px;
            background: rgba(255, 255, 255, .92);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .18);
            cursor: pointer;
            transition: transform .2s;
        }

        .play-btn:hover {
            transform: scale(1.08);
        } */
    </style>
</head>

<body class="bg-cream text-ink">

    <?php include 'includes/navbar.php'; ?>

    <!-- ===================== HERO ===================== -->
    <section class="hero-bg w-full px-6 md:px-12 xl:px-32 pt-14 pb-14 overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col-reverse lg:flex-row items-center gap-10 lg:gap-16">
            <div class="flex-1 text-center lg:text-left">
                <h1 class="font-display text-4xl md:text-5xl font-semibold text-ink leading-tight mb-4 fade-up">You
                    Dream.<br />We Build.</h1>
                <p class="text-base text-muted max-w-md mx-auto lg:mx-0 mb-7 leading-relaxed fade-up fade-up-delay-1">
                    Build your dream home hassle-free with JSW One Homes.</p>
                <div class="flex flex-wrap gap-3 justify-center lg:justify-start mb-8 fade-up fade-up-delay-2">
                    <div
                        class="stat-card bg-white border border-border rounded-xl px-5 py-3 flex flex-col items-center">
                        <span class="text-2xl font-semibold text-ink">4.9<span
                                class="text-orange text-lg">★</span></span>
                        <span class="text-xs text-muted mt-0.5">Home Stars</span>
                    </div>
                    <div
                        class="stat-card bg-white border border-border rounded-xl px-5 py-3 flex flex-col items-center">
                        <span class="text-2xl font-semibold text-ink">980<span
                                class="text-sm font-normal text-orange">+</span></span>
                        <span class="text-xs text-muted mt-0.5">Homes Delivered</span>
                    </div>
                    <div
                        class="stat-card bg-white border border-border rounded-xl px-5 py-3 flex flex-col items-center">
                        <span class="text-2xl font-semibold text-ink">22<span
                                class="text-sm font-normal text-orange">M+</span></span>
                        <span class="text-xs text-muted mt-0.5">Happy Customers</span>
                    </div>
                </div>
                <div class="fade-up fade-up-delay-3">
                    <button
                        class="bg-orange text-white font-semibold py-3 px-8 rounded-xl hover:bg-orange-dark transition-colors cursor-pointer">Book
                        a meeting</button>
                </div>
            </div>
            <div class="flex-1 w-full sm:w-3/4 lg:w-full fade-up fade-up-delay-2">
                <div class="relative rounded-2xl overflow-hidden shadow-xl" style="aspect-ratio:4/3">
                    <img src="images/home-image.jpeg" alt="Modern home"
                        class="w-full h-full" onerror="this.style.background='#e8ddd0'" />
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHY JSW ONE HOMES ===================== -->
    <section class="w-full bg-white px-6 md:px-12 xl:px-32 py-16 md:py-20">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-12 items-center">
            <div class="flex-1 w-full sm:w-3/4 lg:w-full">
                <div class="relative rounded-2xl overflow-hidden shadow-lg" style="aspect-ratio:4/3;">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&q=80"
                        alt="Family with home app" class="w-full h-full object-cover"
                        onerror="this.style.background='#e8ddd0'" />
                </div>
            </div>
            <div class="flex-1">
                <div class="badge">Why Choose Us</div>
                <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-3">Why JSW One Homes</h2>
                <p class="text-base text-muted mb-8 leading-relaxed">We make building your dream home simple,
                    transparent, and stress-free.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="flex items-start gap-3">
                        <div class="why-icon-bg w-11 h-11 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 stroke-orange fill-none stroke-[1.7]" viewBox="0 0 24 24">
                                <path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-semibold text-ink mb-1">Designed for living</h4>
                            <p class="text-muted leading-relaxed">Spaces designed by empanelled architects tailored to
                                your lifestyle.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="why-icon-bg w-11 h-11 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 stroke-orange fill-none stroke-[1.7]" viewBox="0 0 24 24">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-semibold text-ink mb-1">High quality materials</h4>
                            <p class="text-muted leading-relaxed">JSW Group's construction materials for superior
                                quality &amp; durability.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="why-icon-bg w-11 h-11 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 stroke-orange fill-none stroke-[1.7]" viewBox="0 0 24 24">
                                <rect x="2" y="3" width="20" height="14" rx="2" />
                                <path d="M8 21h8M12 17v4" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-semibold text-ink mb-1">Price transparency</h4>
                            <p class="text-muted leading-relaxed">Our estimates are honest with no hidden charges. 100%
                                transparent.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="why-icon-bg w-11 h-11 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 stroke-orange fill-none stroke-[1.7]" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-semibold text-ink mb-1">On-time delivery</h4>
                            <p class="text-muted leading-relaxed">We Build within committed timelines — every project,
                                every time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PROJECT GALLERY (IMAGE CAROUSEL) ===================== -->
    <section class="w-full bg-[#F6F5EF] px-6 md:px-12 xl:px-32 py-16 md:py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <div class="badge">Portfolio</div>
                <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-2">Our project gallery</h2>
                <p class="text-base text-muted">Discover our portfolio of meticulously crafted dream homes.</p>
            </div>
            <div class="gallery-track" id="galleryTrack">
                <div class="gallery-slide" style="width:85vw;max-width:720px;aspect-ratio:16/9;">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=900&q=80" alt="Project 1"
                        class="w-full h-full object-cover" />
                </div>
                <div class="gallery-slide" style="width:85vw;max-width:720px;aspect-ratio:16/9;">
                    <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=900&q=80" alt="Project 2"
                        class="w-full h-full object-cover" />
                </div>
                <div class="gallery-slide" style="width:85vw;max-width:720px;aspect-ratio:16/9;">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=900&q=80" alt="Project 3"
                        class="w-full h-full object-cover" />
                </div>
                <div class="gallery-slide" style="width:85vw;max-width:720px;aspect-ratio:16/9;">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=900&q=80" alt="Project 4"
                        class="w-full h-full object-cover" />
                </div>
                <div class="gallery-slide" style="width:85vw;max-width:720px;aspect-ratio:16/9;">
                    <img src="https://images.unsplash.com/photo-1523217582562-09d0def993a6?w=900&q=80" alt="Project 5"
                        class="w-full h-full object-cover" />
                </div>
            </div>
            <!-- Gallery controls -->
            <div class="flex items-center justify-between mt-5">
                <div class="flex gap-1.5" id="galleryDots"></div>
                <div class="flex gap-2">
                    <button class="carousel-btn" onclick="stepGallery(-1)"><svg viewBox="0 0 24 24" class="w-4 h-4">
                            <polyline points="15 18 9 12 15 6" />
                        </svg></button>
                    <button class="carousel-btn" onclick="stepGallery(1)"><svg viewBox="0 0 24 24" class="w-4 h-4">
                            <polyline points="9 18 15 12 9 6" />
                        </svg></button>
                </div>
            </div>
            <!-- Quote below gallery -->
            <!-- <div
                class="mt-7 bg-white border border-border rounded-2xl px-6 py-5 flex flex-col md:flex-row md:items-center gap-4">
                <div class="flex-1">
                    <p class="text-muted leading-relaxed italic">"We are very happy, JSW One Homes helped us build. You
                        just have to have money in your hand and they will build your dream home with expert care and
                        honest pricing."</p>
                    <div class="flex items-center gap-2 mt-3">
                        <div
                            class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                            R</div>
                        <div>
                            <p class="text-sm font-semibold text-ink">Ramesh K.</p>
                            <span class="text-orange text-xs">★★★★★</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="text-center mt-6">
                <button
                    class="border border-ink text-ink font-medium px-6 py-2.5 rounded-xl hover:bg-ink hover:text-white transition-colors cursor-pointer">Explore
                    more projects</button>
            </div>
        </div>
    </section>

    <!-- ===================== BUILD YOUR DREAM HOME (VIDEO) ===================== -->
    <section class="w-full px-6 md:px-12 xl:px-32 py-16 md:py-20"
        style="background:linear-gradient(135deg,#fdf0e6 0%,#fce4d0 60%,#f9dfc8 100%);">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-10 items-center">
            <div class="flex-1">
                <div class="badge">Your Home</div>
                <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-3">Build your dream home</h2>
                <p class="text-base text-muted leading-relaxed mb-6">Choose your layout, select a package, and let our
                    expert team handle everything from design to handover.</p>
                <button
                    class="bg-orange text-white font-semibold py-3 px-7 rounded-xl hover:bg-orange-dark transition-colors cursor-pointer">Book
                    a meeting</button>
            </div>
            <div class="flex-1 w-full">
                <div class="video-wrap shadow-xl" style="aspect-ratio:16/9;">
                    <video style="width:100%;height:100%;border-radius:16px;display:block;" controls>
                        <source src="videos/v1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <p class="text-xs text-muted text-center mt-2">Watch how we build your dream home from start to finish
                </p>
            </div>
        </div>
    </section>

    <!-- ===================== PACKAGES ===================== -->
    <section class="w-full bg-white px-6 md:px-12 xl:px-32 py-16 md:py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <div class="badge">Pricing</div>
                <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-2">Packages</h2>
                <p class="text-base text-muted">Discover our trusted packages for your dream home.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 px-0 sm:px-16 lg:px-0">

                <!-- Standard -->
                <div class="pkg-card bg-[#FAFAF7] border border-border rounded-2xl p-6">
                    <div class="text-xs text-muted font-semibold uppercase tracking-widest mb-1">Standard</div>
                    <div class="text-2xl font-semibold text-ink mb-1">₹1,900 <span
                            class="text-sm font-normal text-muted">/ sq.ft</span></div>
                    <p class="text-muted mb-5">Includes the basics with quality assurance</p>
                    <hr class="border-border mb-4" />
                    <div class="space-y-0">
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Design</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">2D floor plans, structural design, MEP
                                    drawings and elevation designs.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Structure</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Standard RCC framed structure with M20 grade
                                    concrete and TMT rebars.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Core installations</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Standard electrical wiring, plumbing and
                                    sanitary installations.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Finishes</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Basic wall tiles in bathrooms and kitchen.
                                    Standard vitrified flooring.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Painting</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Standard interior and exterior emulsion paint
                                    finish.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Fitting &amp; fixtures</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Standard grade doors, windows, grills and
                                    hardware fittings.</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="w-full mt-6 border border-border text-ink font-medium py-2.5 rounded-xl hover:bg-cream transition-colors cursor-pointer">Get
                        started</button>
                </div>

                <!-- Premium -->
                <div class="pkg-card pkg-premium bg-white rounded-2xl p-6 relative shadow-xl">
                    <div
                        class="absolute -top-3 left-1/2 -translate-x-1/2 bg-orange text-white text-[10px] font-bold uppercase tracking-widest px-4 py-1 rounded-full whitespace-nowrap">
                        Most Popular</div>
                    <div class="text-xs text-orange font-semibold uppercase tracking-widest mb-1">Premium</div>
                    <div class="text-2xl font-semibold text-ink mb-1">₹2,500 <span
                            class="text-sm font-normal text-muted">/ sq.ft</span></div>
                    <p class="text-muted mb-5">Enhanced quality with premium materials</p>
                    <hr class="border-border mb-4" />
                    <div class="space-y-0">
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Design</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Full 3D renders + all Standard design
                                    drawings included.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Structure</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Premium RCC with JSW Steel rebars and M25
                                    grade concrete.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Core installations</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Concealed wiring, modular switches, CPVC
                                    plumbing throughout.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Flooring &amp; accessories</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Premium vitrified tiles, granite kitchen
                                    countertops, designer bathroom tiles.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Painting</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Premium washable emulsion for interiors,
                                    weather-proof exterior paint.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Fitting &amp; fixtures</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Premium branded sanitary ware, CP fittings
                                    and hardware throughout.</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="w-full mt-6 bg-orange text-white font-semibold py-2.5 rounded-xl hover:bg-orange-dark transition-colors cursor-pointer">Get
                        started</button>
                </div>

                <!-- Luxury -->
                <div class="pkg-card bg-[#FAFAF7] border border-border rounded-2xl p-6">
                    <div class="text-xs text-muted font-semibold uppercase tracking-widest mb-1">Luxury</div>
                    <div class="text-2xl font-semibold text-ink mb-1">₹3,750 <span
                            class="text-sm font-normal text-muted">/ sq.ft</span></div>
                    <p class="text-muted mb-5">Exceptional quality, exceptional living</p>
                    <hr class="border-border mb-4" />
                    <div class="space-y-0">
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Design</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Full 3D walkthrough video + VR walkthrough +
                                    all Premium design deliverables.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Structure</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Luxury RCC with premium JSW Steel, M30
                                    concrete, earthquake-resistant design.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Core installations</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Smart home wiring, home automation ready,
                                    solar provision, EV charging point.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Flooring &amp; accessories</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Imported marble / engineered wood flooring,
                                    full home interior package included.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Painting</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Luxury texture paint, designer wall panels,
                                    high-end exterior cladding options.</p>
                            </div>
                            <hr class="border-border" />
                        </div>
                        <div class="pkg-feature-row">
                            <button onclick="toggleFeature(this)"
                                class="w-full flex items-center justify-between py-2.5 text-left bg-transparent border-0 cursor-pointer font-sans">
                                <span class="text-base font-semibold text-ink flex items-center gap-2"><span
                                        class="check-icon">✓</span>Bathroom features</span>
                                <svg class="pkg-chevron w-4 h-4 stroke-muted fill-none stroke-2 flex-shrink-0"
                                    viewBox="0 0 24 24">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="pkg-feature-body">
                                <p class="text-muted leading-relaxed pb-2">Luxury branded sanitary ware (TOTO/Kohler),
                                    rain showers, designer vanities.</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="w-full mt-6 border border-border text-ink font-medium py-2.5 rounded-xl hover:bg-cream transition-colors cursor-pointer">Get
                        started</button>
                </div>
            </div>
            <p class="text-center text-xs text-muted mt-6">Prices are approximate and may vary. Contact us for a
                detailed estimate tailored to your project.</p>
        </div>
    </section>

    <!-- ===================== BUILDING PROCESS ===================== -->
    <section class="w-full bg-[#F6F5EF] px-6 md:px-12 xl:px-32 py-16 md:py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <div class="badge">Process</div>
                <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-2">A glimpse into our building
                    process</h2>
                <p class="text-base text-muted">We guide you through every step of the journey to build your dream home.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="process-card bg-white border border-border rounded-2xl p-5">
                    <div
                        class="w-11 h-11 bg-cream rounded-lg flex items-center justify-center border border-border mb-4">
                        <svg class="w-5 h-5"
                            style="stroke:#1a1a1a;fill:none;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round;"
                            viewBox="0 0 24 24">
                            <path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" />
                        </svg>
                    </div>
                    <h3 class="text-base font-semibold text-ink mb-1">Work on plans</h3>
                    <p class="text-muted leading-relaxed">Architects finalise floor plans and elevations based on your
                        requirements and plot dimensions.</p>
                </div>
                <div class="process-card bg-white border border-border rounded-2xl p-5">
                    <div
                        class="w-11 h-11 bg-cream rounded-lg flex items-center justify-center border border-border mb-4">
                        <svg class="w-5 h-5"
                            style="stroke:#1a1a1a;fill:none;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round;"
                            viewBox="0 0 24 24">
                            <rect x="2" y="3" width="20" height="14" rx="2" />
                            <path d="M8 21h8M12 17v4" />
                        </svg>
                    </div>
                    <h3 class="text-base font-semibold text-ink mb-1">Build your dream home</h3>
                    <p class="text-muted leading-relaxed">Construction begins with daily supervision, weekly reports and
                        complete quality assurance.</p>
                </div>
                <div class="process-card bg-white border border-border rounded-2xl p-5">
                    <div
                        class="w-11 h-11 bg-cream rounded-lg flex items-center justify-center border border-border mb-4">
                        <svg class="w-5 h-5"
                            style="stroke:#1a1a1a;fill:none;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round;"
                            viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg>
                    </div>
                    <h3 class="text-base font-semibold text-ink mb-1">Tracks the construction</h3>
                    <p class="text-muted leading-relaxed">Real-time construction updates on the app. Your project
                        manager keeps you informed throughout.</p>
                </div>
                <div class="process-card bg-white border border-border rounded-2xl p-5">
                    <div
                        class="w-11 h-11 bg-cream rounded-lg flex items-center justify-center border border-border mb-4">
                        <svg class="w-5 h-5"
                            style="stroke:#1a1a1a;fill:none;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round;"
                            viewBox="0 0 24 24">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                    </div>
                    <h3 class="text-base font-semibold text-ink mb-1">Move in to your home</h3>
                    <p class="text-muted leading-relaxed">Seamless handover with structural warranty, defect liability
                        period and full documentation.</p>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="#"
                    class="text-orange font-semibold underline underline-offset-2 hover:text-orange-dark transition-colors">Learn
                    more →</a>
            </div>
        </div>
    </section>

    <!-- ===================== TESTIMONIALS (SHARED CAROUSEL) ===================== -->
    <section class="w-full bg-white px-6 md:px-12 xl:px-32 py-16 md:py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <div class="badge">Reviews</div>
                <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-2">Happy customers, real stories
                </h2>
                <p class="text-base text-muted">Real reviews from homeowners who built with JSW One Homes.</p>
            </div>
            <div class="carousel-track" id="testimonialsTrack">
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">

                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?w=400&q=80"
                            alt="Suresh M" class="w-full h-full object-cover opacity-70" onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">
                            <!-- <div class="play-btn"><svg class="w-5 h-5 fill-orange" viewBox="0 0 24 24">
                                    <polygon points="5 3 19 12 5 21 5 3" />
                                </svg></div> -->
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"We built our home in 14 months with complete
                            transparency. The quality is outstanding!"</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                S</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Suresh M.</p>
                                <p class="text-xs text-muted">Hyderabad</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">
                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?w=400&q=80" alt="Priya R"
                            class="w-full h-full object-cover opacity-70" onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"JSW One Homes delivered on every promise. The app
                            tracking was incredibly helpful."</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                P</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Priya R.</p>
                                <p class="text-xs text-muted">Bangalore</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">
                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80" alt="Anil K"
                            class="w-full h-full object-cover opacity-70" onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"From the very first meeting to housewarming, the
                            experience was seamless. Highly recommend!"</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                A</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Anil K.</p>
                                <p class="text-xs text-muted">Chennai</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">
                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80" alt="Anil K"
                            class="w-full h-full object-cover opacity-70" onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"From the very first meeting to housewarming, the
                            experience was seamless. Highly recommend!"</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                A</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Anil K.</p>
                                <p class="text-xs text-muted">Chennai</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">
                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1540569014015-19a7be504e3a?w=400&q=80" alt="Vijay S"
                            class="w-full h-full object-cover opacity-70" onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"The quality of materials and finishing far exceeded
                            expectations. Worth every rupee!"</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                V</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Vijay S.</p>
                                <p class="text-xs text-muted">Mumbai</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">
                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80" alt="Meera T"
                            class="w-full h-full object-cover opacity-70" onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"Our dream home is now a reality thanks to the
                            dedicated team at JSW One Homes. Incredible!"</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                M</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Meera T.</p>
                                <p class="text-xs text-muted">Kochi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flex items-center justify-end mt-5">
                <!-- <div class="flex gap-1.5" id="tDots"></div> -->
                <div class="flex gap-2">
                    <button class="carousel-btn" onclick="stepCarousel('testimonialsTrack','tDots',-1)"><svg
                            viewBox="0 0 24 24" class="w-4 h-4">
                            <polyline points="15 18 9 12 15 6" />
                        </svg></button>
                    <button class="carousel-btn" onclick="stepCarousel('testimonialsTrack','tDots',1)"><svg
                            viewBox="0 0 24 24" class="w-4 h-4">
                            <polyline points="9 18 15 12 9 6" />
                        </svg></button>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EXPERIENCE CENTRES (SAME CAROUSEL) ===================== -->
    <section class="w-full bg-[#F6F5EF] px-6 md:px-12 xl:px-32 py-16 md:py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <div class="badge">Locations</div>
                <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-2">Our experience centres</h2>
                <p class="text-base text-muted">Visit us in person to explore options and begin your home-building
                    journey.</p>
            </div>
            <div class="carousel-track" id="centresTrack">
                <div class="carousel-slide w-72 centre-card bg-white border border-border rounded-2xl overflow-hidden">
                    <div class="h-40 overflow-hidden"><img
                            src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=500&q=80" alt="Kochi"
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                            onerror="this.style.background='#e0d8cc'" /></div>
                    <div class="p-4">
                        <h4 class="text-base font-semibold text-ink mb-1">Kochi Centre</h4>
                        <p class="text-muted mb-1">Ground Floor, Oberon Mall, NH-47, Edappally, Kochi – 682024</p>
                        <p class="text-muted mb-3">Mon–Sat: 10am – 6pm</p>
                        <a href="#" class="text-orange font-semibold hover:underline">Explore →</a>
                    </div>
                </div>
                <div class="carousel-slide w-72 centre-card bg-white border border-border rounded-2xl overflow-hidden">
                    <div class="h-40 overflow-hidden"><img
                            src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=500&q=80"
                            alt="Bengaluru 1"
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                            onerror="this.style.background='#e0d8cc'" /></div>
                    <div class="p-4">
                        <h4 class="text-base font-semibold text-ink mb-1">Bengaluru/Devarc–1</h4>
                        <p class="text-muted mb-1">No. 12, 3rd Floor, Devarc Mall, Old Madras Rd, Bangalore – 560016</p>
                        <p class="text-muted mb-3">Mon–Sat: 10am – 6pm</p>
                        <a href="#" class="text-orange font-semibold hover:underline">Explore →</a>
                    </div>
                </div>
                <div class="carousel-slide w-72 centre-card bg-white border border-border rounded-2xl overflow-hidden">
                    <div class="h-40 overflow-hidden"><img
                            src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=500&q=80"
                            alt="Bengaluru 2"
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                            onerror="this.style.background='#e0d8cc'" /></div>
                    <div class="p-4">
                        <h4 class="text-base font-semibold text-ink mb-1">Bengaluru/Devarc–2</h4>
                        <p class="text-muted mb-1">No. 31, 1st Floor, Total Mall, Sarjapur Rd, Bengaluru – 560035</p>
                        <p class="text-muted mb-3">Mon–Sat: 10am – 6pm</p>
                        <a href="#" class="text-orange font-semibold hover:underline">Explore →</a>
                    </div>
                </div>
                <div class="carousel-slide w-72 centre-card bg-white border border-border rounded-2xl overflow-hidden">
                    <div class="h-40 overflow-hidden"><img
                            src="https://images.unsplash.com/photo-1519999482648-25049ddd37b1?w=500&q=80"
                            alt="Hyderabad"
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                            onerror="this.style.background='#e0d8cc'" /></div>
                    <div class="p-4">
                        <h4 class="text-base font-semibold text-ink mb-1">Hyderabad</h4>
                        <p class="text-muted mb-1">Rd. No. 2, Banjara Hills, Hyderabad – 500034</p>
                        <p class="text-muted mb-3">Mon–Sat: 10am – 6pm</p>
                        <a href="#" class="text-orange font-semibold hover:underline">Explore →</a>
                    </div>
                </div>
                <div class="carousel-slide w-72 centre-card bg-white border border-border rounded-2xl overflow-hidden">
                    <div class="h-40 overflow-hidden"><img
                            src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=500&q=80" alt="Chennai"
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                            onerror="this.style.background='#e0d8cc'" /></div>
                    <div class="p-4">
                        <h4 class="text-base font-semibold text-ink mb-1">Chennai</h4>
                        <p class="text-muted mb-1">No. 5, Ground Floor, Phoenix Marketcity, Velachery, Chennai – 600042
                        </p>
                        <p class="text-muted mb-3">Mon–Sat: 10am – 6pm</p>
                        <a href="#" class="text-orange font-semibold hover:underline">Explore →</a>
                    </div>
                </div>
                <div class="carousel-slide w-72 centre-card bg-white border border-border rounded-2xl overflow-hidden">
                    <div class="h-40 overflow-hidden"><img
                            src="https://images.unsplash.com/photo-1519999482648-25049ddd37b1?w=500&q=80"
                            alt="Hyderabad"
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                            onerror="this.style.background='#e0d8cc'" /></div>
                    <div class="p-4">
                        <h4 class="text-base font-semibold text-ink mb-1">Hyderabad</h4>
                        <p class="text-muted mb-1">Rd. No. 2, Banjara Hills, Hyderabad – 500034</p>
                        <p class="text-muted mb-3">Mon–Sat: 10am – 6pm</p>
                        <a href="#" class="text-orange font-semibold hover:underline">Explore →</a>
                    </div>
                </div>
                <div class="carousel-slide w-72 centre-card bg-white border border-border rounded-2xl overflow-hidden">
                    <div class="h-40 overflow-hidden"><img
                            src="https://images.unsplash.com/photo-1519999482648-25049ddd37b1?w=500&q=80"
                            alt="Hyderabad"
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                            onerror="this.style.background='#e0d8cc'" /></div>
                    <div class="p-4">
                        <h4 class="text-base font-semibold text-ink mb-1">Hyderabad</h4>
                        <p class="text-muted mb-1">Rd. No. 2, Banjara Hills, Hyderabad – 500034</p>
                        <p class="text-muted mb-3">Mon–Sat: 10am – 6pm</p>
                        <a href="#" class="text-orange font-semibold hover:underline">Explore →</a>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end mt-5">

                <!-- <div class="flex gap-1.5" id="cDots"></div> -->
                <div class="flex gap-2">
                    <button class="carousel-btn" onclick="stepCarousel('centresTrack','cDots',-1)"><svg
                            viewBox="0 0 24 24" class="w-4 h-4">
                            <polyline points="15 18 9 12 15 6" />
                        </svg></button>
                    <button class="carousel-btn" onclick="stepCarousel('centresTrack','cDots',1)"><svg
                            viewBox="0 0 24 24" class="w-4 h-4">
                            <polyline points="9 18 15 12 9 6" />
                        </svg></button>
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
    <script>

        /* ---- Package feature expand/collapse ---- */
        function toggleFeature(btn) {
            const row = btn.closest('.pkg-feature-row');
            const body = row.querySelector('.pkg-feature-body');
            const isOpen = row.classList.contains('open');
            row.classList.toggle('open', !isOpen);
            body.classList.toggle('open', !isOpen);
        }

    </script>
</body>

</html>
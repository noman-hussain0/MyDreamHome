<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Join as Architect – JSW One Homes</title>
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
        /* ---- Why cards hover ---- */
        .why-card {
            transition: box-shadow .25s, transform .25s;
        }

        .why-card:hover {
            box-shadow: 0 8px 28px rgba(0, 0, 0, .1);
            transform: translateY(-2px);
        }








        /* ---- Form focus ---- */
        input:focus,
        select:focus,
        textarea:focus {
            border-color: #e07b39 !important;
            outline: none;
        }
    </style>
</head>

<body class="bg-cream text-ink">

    <?php include 'includes/navbar.php'; ?>

    <!-- ===================== HERO ===================== -->
    <!-- <section class="bg-cream w-full px-6 lg:px-16 pt-14 pb-0 overflow-hidden"> -->
    <section class="bg-cream w-full px-6 lg:px-12 xl:px-32 py-16">
        <!-- <div class="max-w-7xl mx-auto flex flex-col-reverse lg:flex-row items-center gap-10 lg:gap-16 pb-0 lg:pb-0"> -->

        <div class="max-w-7xl mx-auto flex flex-col-reverse lg:flex-row items-center gap-10 lg:gap-14">
            <!-- Left -->
            <div class="flex-1 text-center lg:text-left ">

                <h1
                    class="font-display text-4xl md:text-5xl lg:text-[3.6rem] font-semibold text-ink leading-tight mb-5">
                    Join us as an<br />Architect
                </h1>
                <p class="text-muted max-w-md mx-auto lg:mx-0 mb-8 leading-relaxed">
                    Be a part of our thriving community of over 100+ exceptional design partners across India.
                </p>
                <a href="#join-form"
                    class="inline-block bg-orange text-white font-semibold py-3.5 px-10 rounded-lg hover:bg-orange-dark transition-colors cursor-pointer w-full max-w-[360px] text-center">
                    Join Now
                </a>
            </div>
            <!-- Right — video -->
            <!-- <div class="flex-1 w-full">
                <div class="rounded-2xl overflow-hidden shadow-2xl" style="aspect-ratio:4/3;">
                    <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                        <source src="./join_as_architect.mp4" type="video/mp4" />
                        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800&q=80"
                            alt="Architect at work" class="w-full h-full object-cover" />
                    </video>
                </div>
            </div> -->
            <!-- Right — image -->
            <div class="flex-1 flex justify-end">
                <div class="w-full max-w-[580px] h-[310px] rounded-2xl overflow-hidden shadow-sm">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800&q=80"
                        alt="Architect at work" alt="Modern House" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== STATS BAR ===================== -->
    <!-- <section class="w-full bg-cream border-t border-border px-6 lg:px-16 py-12"> -->
    <section class="w-full bg-[#f0e8d8] border-t border-border px-6 lg:px-12 xl:px-32 py-12">

        <div class="max-w-7xl mx-auto grid grid-cols-1 grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">
            <div class="flex flex-col items-center gap-1.5 w-full">
                <span class="font-display text-4xl font-semibold text-ink">100<span
                        class="text-orange text-2xl">+</span></span>
                <span class="text-muted">Empanelled architects</span>
            </div>
            <div class="flex flex-col items-center gap-1.5 w-full">
                <span class="font-display text-4xl font-semibold text-ink">250<span
                        class="text-orange text-2xl">+</span></span>
                <span class="text-muted">Ongoing designs</span>
            </div>
            <div class="flex flex-col items-center gap-1.5 w-full">
                <span class="font-display text-4xl font-semibold text-ink">1000<span
                        class="text-orange text-2xl">+</span></span>
                <span class="text-muted">Designs delivered</span>
            </div>
            <div class="flex flex-col items-center gap-1.5 w-full">
                <span class="font-display text-4xl font-semibold text-ink">100<span
                        class="text-orange text-2xl">+</span></span>
                <span class="text-muted">Projects delivered</span>
            </div>
        </div>
    </section>

    <!-- ===================== WHY JSW ONE HOMES ===================== -->
    <section class="w-full bg-white px-6 lg:px-12 xl:px-32 py-16 lg:py-20">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-12 lg:gap-16 items-center">
            <!-- Image -->
            <div class="flex-1 flex">
                <div class="w-full max-w-[580px] h-[310px] rounded-2xl overflow-hidden shadow-sm">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=700&q=80"
                        alt="Architect at work" class="w-full h-full object-cover"
                        onerror="this.style.background='#e8ddd0';this.src=''" />
                </div>
            </div>
            <!-- Content -->
            <div class="flex-1">

                <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-3">Why JSW One Homes</h2>
                <p class="text-base text-muted mb-8 leading-relaxed">Be part of a network where architects grow,
                    collaborate, and craft homes with passion and purpose.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="why-card bg-cream border border-border rounded-xl p-5">
                        <h4 class="font-semibold text-ink mb-1.5">Strong brand association</h4>
                        <p class="text-muted leading-relaxed">Elevate your work with the global presence of JSW.
                        </p>
                    </div>
                    <div class="why-card bg-cream border border-border rounded-xl p-5">
                        <h4 class="font-semibold text-ink mb-1.5">Steady project pipeline</h4>
                        <p class="text-muted leading-relaxed">Consistent project flow to grow your career.</p>
                    </div>
                    <div class="why-card bg-cream border border-border rounded-xl p-5">
                        <h4 class="font-semibold text-ink mb-1.5">Culture that inspires</h4>
                        <p class="text-muted leading-relaxed">Building more than homes – we help build each
                            other up.</p>
                    </div>
                    <div class="why-card bg-cream border border-border rounded-xl p-5">
                        <h4 class="font-semibold text-ink mb-1.5">Diverse, landmark projects</h4>
                        <p class="text-muted leading-relaxed">Build homes that stand the test of time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TESTIMONIALS CAROUSEL ===================== -->
    <section class="w-full bg-white px-6 md:px-12 xl:px-32 py-16 md:py-20">
        <div class="max-w-7xl mx-auto">

            <!-- Header -->
            <div class="text-center mb-10">

                <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-2">Trusted by Architects,
                    nationwide</h2>
                <p class="text-base text-muted">Helping architects turn blueprints into projects with trust, technology,
                    and consistency.</p>
            </div>

            <!-- Carousel track — same class as home page -->
            <div class="carousel-track" id="archTestimonialsTrack">

                <!-- Card 1 -->
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">
                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80"
                            alt="Ar. Venkat" class="w-full h-full object-cover opacity-70" onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">
                            <!-- <div class="play-btn">
                                <svg class="w-5 h-5 fill-orange" viewBox="0 0 24 24">
                                    <polygon points="5 3 19 12 5 21 5 3" />
                                </svg>
                            </div> -->
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"Partnering with JSW One Homes brought steady project
                            flow, wider reach, and stronger client trust under the JSW brand."</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                V</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Ar. Venkat</p>
                                <p class="text-xs text-muted">Nirmanika Studio, Hyderabad</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">
                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80"
                            alt="Ar. Aswid Varma" class="w-full h-full object-cover opacity-70"
                            onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"Great working with JSW One Homes: ensured cash
                            flows, SOP's, balanced ROI. PM tool enables easy data sharing &amp; transparency."</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                A</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Ar. Aswid Varma</p>
                                <p class="text-xs text-muted">Uni Atelier, Vizag</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">
                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80"
                            alt="Ar. Jeshna Parveen" class="w-full h-full object-cover opacity-70"
                            onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"Reliable, efficient, and highly supportive. It has
                            brought consistent project opportunities and significantly enhanced our operational
                            efficiency."</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                J</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Ar. Jeshna Parveen</p>
                                <p class="text-xs text-muted">Coimbatore</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">
                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80"
                            alt="Ar. Rajesh Kumar" class="w-full h-full object-cover opacity-70"
                            onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"JSW One Homes gave me access to quality clients and
                            seamless project management. It's truly a game changer for independent architects."</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                R</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Ar. Rajesh Kumar</p>
                                <p class="text-xs text-muted">Chennai</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">
                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1540569014015-19a7be504e3a?w=400&q=80"
                            alt="Ar. Sneha Patil" class="w-full h-full object-cover opacity-70"
                            onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"The support system at JSW One Homes is unmatched.
                            From lead generation to project handover, everything is streamlined and professional."</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                S</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Ar. Sneha Patil</p>
                                <p class="text-xs text-muted">Pune</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="carousel-slide w-72 bg-[#F6F5EF] border border-border rounded-2xl overflow-hidden">
                    <div class="relative h-40 overflow-hidden bg-sand">
                        <img src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?w=400&q=80"
                            alt="Ar. Meera Nair" class="w-full h-full object-cover opacity-70"
                            onerror="this.remove()" />
                        <div class="absolute inset-0 flex items-center justify-center">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex mb-2"><span class="text-orange">★★★★★</span></div>
                        <p class="text-muted leading-relaxed mb-3">"The platform gives complete control over project
                            timelines and budgets. I've grown my practice significantly since joining."</p>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-orange flex items-center justify-center text-white text-xs font-bold">
                                M</div>
                            <div>
                                <p class="text-sm font-semibold text-ink">Ar. Meera Nair</p>
                                <p class="text-xs text-muted">Kochi</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Prev / Next buttons — identical to home page -->
            <div class="flex items-center justify-end mt-5">
                <div class="flex gap-2">
                    <button class="carousel-btn" onclick="stepCarousel('archTestimonialsTrack','',  -1)">
                        <svg viewBox="0 0 24 24" class="w-4 h-4">
                            <polyline points="15 18 9 12 15 6" />
                        </svg>
                    </button>
                    <button class="carousel-btn" onclick="stepCarousel('archTestimonialsTrack','', 1)">
                        <svg viewBox="0 0 24 24" class="w-4 h-4">
                            <polyline points="9 18 15 12 9 6" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- ===================== 3 STEPS ===================== -->
    <section class="bg-[#F6F5EF] flex flex-col items-center w-full py-16 xl:py-24" id="process-section">
        <div class="flex flex-col items-center gap-12 px-4 w-full max-w-[1440px]">

            <div class="flex flex-col items-center text-center">
                <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink">
                    3 simple steps to join us
                </h2>
            </div>

            <div class="relative w-full max-w-[450px] xl:max-w-[1100px] mx-auto px-4">

                <div class="absolute 
                left-[40px] top-10 bottom-10 border-l-2 
                xl:left-[16.6%] xl:right-[16.6%] xl:top-[30px] xl:bottom-auto xl:border-l-0 xl:border-t-2 
                border-[#DADADA] border-dashed z-0">
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-3 gap-12 xl:gap-0 relative z-10">

                    <div
                        class="flex flex-row xl:flex-col items-start xl:items-center text-left xl:text-center gap-6 w-full">
                        <div class="flex-shrink-0 w-12 xl:w-full flex justify-center py-1">
                            <div class="bg-[#F6F5EF] px-2 xl:px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    viewBox="0 0 256 256" class="w-12 h-12 xl:w-[60px] xl:h-[60px]">
                                    <path
                                        d="M88,96a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H96A8,8,0,0,1,88,96Zm8,40h64a8,8,0,0,0,0-16H96a8,8,0,0,0,0,16Zm32,16H96a8,8,0,0,0,0,16h32a8,8,0,0,0,0-16ZM224,48V156.69A15.86,15.86,0,0,1,219.31,168L168,219.31A15.86,15.86,0,0,1,156.69,224H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32H208A16,16,0,0,1,224,48ZM48,208H152V160a8,8,0,0,1,8-8h48V48H48Zm120-40v28.7L196.69,168Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="font-semibold text-[#030712] text-lg">Submit details</h3>
                            <p class="text-gray-500 leading-relaxed max-w-[280px] xl:mx-auto">
                                Fill out the form with your professional information. Our team will review it.
                            </p>
                        </div>
                    </div>

                    <div
                        class="flex flex-row xl:flex-col items-start xl:items-center text-left xl:text-center gap-6 w-full">
                        <div class="flex-shrink-0 w-12 xl:w-full flex justify-center py-1">
                            <div class="bg-[#F6F5EF] px-2 xl:px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    viewBox="0 0 256 256" class="w-12 h-12 xl:w-[60px] xl:h-[60px]">
                                    <path
                                        d="M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16Zm8,200a8,8,0,0,1-8,8H80a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96a8,8,0,0,1,8,8ZM149.66,90.34a8,8,0,0,1,0,11.32l-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L112,116.69l26.34-26.35A8,8,0,0,1,149.66,90.34Zm0,56a8,8,0,0,1,0,11.32l-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L112,172.69l26.34-26.35A8,8,0,0,1,149.66,146.34Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="font-semibold text-[#030712] text-lg">Get verified</h3>
                            <p class="text-gray-500 leading-relaxed max-w-[280px] xl:mx-auto">
                                We review your work history and credentials through a transparent process.
                            </p>
                        </div>
                    </div>

                    <div
                        class="flex flex-row xl:flex-col items-start xl:items-center text-left xl:text-center gap-6 w-full">
                        <div class="flex-shrink-0 w-12 xl:w-full flex justify-center py-1">
                            <div class="bg-[#F6F5EF] px-2 xl:px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    viewBox="0 0 256 256" class="w-12 h-12 xl:w-[60px] xl:h-[60px]">
                                    <path
                                        d="M254.3,107.91,228.78,56.85a16,16,0,0,0-21.47-7.15L182.44,62.13,130.05,48.27a8.14,8.14,0,0,0-4.1,0L73.56,62.13,48.69,49.7a16,16,0,0,0-21.47,7.15L1.7,107.9a16,16,0,0,0,7.15,21.47l27,13.51,55.49,39.63a8.06,8.06,0,0,0,2.71,1.25l64,16a8,8,0,0,0,7.6-2.1l55.07-55.08,26.42-13.21a16,16,0,0,0,7.15-21.46Zm-54.89,33.37L165,113.72a8,8,0,0,0-10.68.61C136.51,132.27,116.66,130,104,122L147.24,80h31.81l27.21,54.41ZM41.53,64,62,74.22,36.43,125.27,16,115.06Zm116,119.13L99.42,168.61l-49.2-35.14,28-56L128,64.28l9.8,2.59-45,43.68-.08.09a16,16,0,0,0,2.72,24.81c20.56,13.13,45.37,11,64.91-5L188,152.66Zm62-57.87-25.52-51L214.47,64,240,115.06Zm-87.75,92.67a8,8,0,0,1-7.75,6.06,8.13,8.13,0,0,1-1.95-.24L80.41,213.33a7.89,7.89,0,0,1-2.71-1.25L51.35,193.26a8,8,0,0,1,9.3-13l25.11,17.94L126,208.24A8,8,0,0,1,131.82,217.94Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="font-semibold text-[#030712] text-lg">Join our network</h3>
                            <p class="text-gray-500 leading-relaxed max-w-[280px] xl:mx-auto">
                                Once verified, you become a trusted partner and gain access to new opportunities.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ===================== JOIN FORM ===================== -->
    <section id="join-form" class="w-full px-6 md:px-12 xl:px-32 py-16 md:py-20"
        style="background: linear-gradient(160deg, #fdf0e6 0%, #fce4d0 100%);">

        <div class="text-center mb-10">
            <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-2">Join us now</h2>
            <p class="text-base text-muted max-w-md mx-auto leading-relaxed">Collaborate, grow, and shape the future
                of homebuilding with JSW One Homes.</p>
        </div>

        <div class="bg-white max-w-3xl mx-auto rounded-2xl p-7 md:p-8 border border-border shadow-md text-left">
            <form id="architectForm" class="flex flex-col">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    <div class="relative">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Full name
                        </label>
                        <input id="archName" type="text" placeholder="Full name"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-300 transition-all placeholder-slate-300" />
                    </div>
                    <div class="relative">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Email
                        </label>
                        <input id="archEmail" type="email" placeholder="Email"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-300 transition-all placeholder-slate-300" />
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    <div class="relative">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Mobile Number
                        </label>
                        <input id="archPhone" type="tel" placeholder="Mobile Number"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-300 transition-all placeholder-slate-300" />
                    </div>
                    <div class="relative flex items-center">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Choose City
                        </label>
                        <select id="archCity"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none bg-white appearance-none cursor-pointer focus:border-orange-300 transition-all">
                            <option>Choose City</option>
                            <option>Bellary</option>
                            <option>Bengaluru</option>
                            <option>Hyderabad</option>
                            <option>Coimbatore</option>
                            <option>Hubli</option>
                            <option>Indore</option>
                            <option>Kochi</option>
                            <option>Other</option>
                        </select>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none flex items-center">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="relative">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Tell us about your professional experience
                        </label>
                        <textarea id="archExperience" placeholder="Tell us about your professional experience" rows="4"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-300 transition-all resize-none placeholder-slate-300"></textarea>
                    </div>
                </div>

                <!-- COA Radio -->
                <div class="flex items-center gap-4 flex-wrap mb-6">
                    <span class="text-[14px] text-slate-700">Registered with COA?</span>
                    <div class="flex items-center gap-4">
                        <label class="flex items-center gap-1.5 text-sm text-slate-700 cursor-pointer">
                            <input type="radio" name="coa" value="yes" class="w-5 h-5 accent-[#ffb380]" /> Yes
                        </label>
                        <label class="flex items-center gap-1.5 text-sm text-slate-700 cursor-pointer">
                            <input type="radio" name="coa" value="no" class="w-5 h-5 accent-[#ffb380]" /> No
                        </label>
                    </div>
                </div>

                <!-- Agree -->
                <div class="flex items-center gap-2 mb-5">
                    <input type="checkbox" id="archAgree" class="w-4 h-4 accent-orange cursor-pointer flex-shrink-0" />
                    <span class="text-xs text-muted">I agree to <a href="#" class="text-orange underline">Privacy
                            Policy</a> and <a href="#" class="text-orange underline">Terms &amp;
                            Conditions</a></span>
                </div>

                <div id="archFormStatus" class="text-center mb-2">
                    <!-- Success message -->
                    <div id="archSuccess" style="display:none"
                        class="mb-4 px-5 py-3 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm font-medium">
                        ✅ Your application has been submitted! We'll be in touch soon.
                    </div>
                    <!-- Error message -->
                    <div id="archError" style="display:none"
                        class="mb-4 px-5 py-3 bg-red-50 border border-red-200 rounded-xl text-red-600 text-sm font-medium">
                    </div>
                </div>

                <div class="text-center">
                    <button id="archSubmitBtn" type="button" onclick="submitArchitect()"
                        class="bg-orange text-white font-semibold py-3 px-16 rounded-lg hover:bg-orange-dark hover:-translate-y-0.5 hover:shadow-md transition-all cursor-pointer border-0">
                        Submit
                    </button>
                </div>

            </form>
        </div>
    </section>

    <!-- ===================== FAQ ===================== -->
    <section class="w-full bg-cream px-6 md:px-12 xl:px-32 py-16 md:py-20" id="faqs">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-10 text-center">Frequently asked
                questions</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-x-16">
                <!-- Col 1 -->
                <div>
                    <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base text-ink leading-snug">Since how long has JSW been in the
                                construction business?</span>
                            <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                        </div>
                        <div class="faq-body pt-3">
                            <p class="text-sm text-muted leading-relaxed">JSW One Homes has been in the
                                construction
                                business for over a decade, with a strong presence across major cities in India,
                                building thousands of quality homes.</p>
                        </div>
                    </div>
                    <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base text-ink leading-snug">Does JSW One Homes undertake home
                                designing services?</span>
                            <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                        </div>
                        <div class="faq-body pt-3">
                            <p class="text-sm text-muted leading-relaxed">Yes, JSW One Homes offers complete
                                home design
                                services, from architectural planning and interior design to material selection and
                                landscape design.</p>
                        </div>
                    </div>
                    <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base text-ink leading-snug">Does JSW One Homes undertake any
                                commercial projects?</span>
                            <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                        </div>
                        <div class="faq-body pt-3">
                            <p class="text-sm text-muted leading-relaxed">JSW One Homes primarily focuses on residential
                                construction. For commercial projects, please contact our team to discuss specific
                                requirements.</p>
                        </div>
                    </div>
                    <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base text-ink leading-snug">Will I get to choose the materials that are
                                planned to be
                                used in my project?</span>
                            <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                        </div>
                        <div class="faq-body pt-3">
                            <p class="text-sm text-muted leading-relaxed">Absolutely. Homeowners can select from a
                                curated range of premium, verified materials. Our team guides you through the selection
                                process at our experience centres.</p>
                        </div>
                    </div>
                    <div class="faq-row border-b border-border  py-5 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base text-ink leading-snug">Which brands are partnered with JSW One
                                Homes?</span>
                            <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                        </div>
                        <div class="faq-body pt-3">
                            <p class="text-sm text-muted leading-relaxed">JSW One Homes partners with leading brands in
                                steel, cement, tiles, plumbing, electrical fittings, and more — all carefully vetted for
                                quality and reliability.</p>
                        </div>
                    </div>
                </div>

                <!-- Col 2 -->
                <div>
                    <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base text-ink leading-snug">How long does it take to construct a
                                residential
                                project?</span>
                            <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                        </div>
                        <div class="faq-body pt-3">
                            <p class="text-sm text-muted leading-relaxed">Typically, a residential project takes 12–18
                                months depending on the size, design complexity, and site conditions. Our project
                                managers keep you updated throughout.</p>
                        </div>
                    </div>
                    <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base text-ink leading-snug">What are inclusions in the design
                                package?</span>
                            <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                        </div>
                        <div class="faq-body pt-3">
                            <p class="text-sm text-muted leading-relaxed">The design package includes architectural
                                plans, structural drawings, 3D visualisations, interior design consultation, and
                                material selection guidance.</p>
                        </div>
                    </div>
                    <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base text-ink leading-snug">Does JSW One Homes offer any construction
                                warranties?</span>
                            <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                        </div>
                        <div class="faq-body pt-3">
                            <p class="text-sm text-muted leading-relaxed">Yes, we offer a comprehensive
                                post-construction warranty covering structural integrity and key installations, giving
                                you complete peace of mind after handover.</p>
                        </div>
                    </div>
                    <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base text-ink leading-snug">What are the payments process &amp; controls
                                in place for a
                                project?</span>
                            <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                        </div>
                        <div class="faq-body pt-3">
                            <p class="text-sm text-muted leading-relaxed">Payments are milestone-based and linked to
                                verified construction progress. You pay only when agreed stages are completed, ensuring
                                full transparency and control.</p>
                        </div>
                    </div>
                    <div class="faq-row border-b border-border py-5 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base text-ink leading-snug">How do you ensure quality assurance and
                                quality control on
                                our project?</span>
                            <svg class="faq-plus w-6 h-6 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="#888"
                                stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                        </div>
                        <div class="faq-body pt-3">
                            <p class="text-sm text-muted leading-relaxed">We deploy dedicated quality engineers on-site
                                who conduct stage-wise inspections. All materials are sourced from verified brand
                                partners and tested before use.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View more -->
            <div class="text-center mt-10">
                <a href="faqs.html">
                    <button
                        class="border border-ink text-ink font-medium py-3 px-10 rounded-xl hover:bg-ink hover:text-white transition-colors cursor-pointer bg-transparent">
                        View more
                    </button>
                </a>
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


        /* =============================================
           JOIN FORM
           ============================================= */
        document.getElementById('architectForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const name = document.getElementById('archName').value.trim();
            const email = document.getElementById('archEmail').value.trim();
            const phone = document.getElementById('archPhone').value.trim();
            const city = document.getElementById('archCity').value;
            const agreed = document.getElementById('archAgree').checked;
            const status = document.getElementById('archFormStatus');
            const btn = document.getElementById('archSubmitBtn');

            if (!name || !email || !phone || !city) {
                status.textContent = 'Please fill in all required fields.';
                status.className = 'text-center text-sm min-h-[18px] text-red-500';
                return;
            }
            if (!agreed) {
                status.textContent = 'Please agree to the Privacy Policy and Terms & Conditions.';
                status.className = 'text-center text-sm min-h-[18px] text-red-500';
                return;
            }

            btn.disabled = true;
            btn.textContent = 'Submitting...';
            await new Promise(r => setTimeout(r, 1200));
            status.textContent = '✅ Application submitted! We will get back to you within 48 hours.';
            status.className = 'text-center text-sm min-h-[18px] text-green-600';
            this.reset();
            btn.disabled = false;
            btn.textContent = 'Submit';
            setTimeout(() => { status.textContent = ''; status.className = 'text-center text-sm min-h-[18px]'; }, 7000);
        });
    </script>
</body>

</html>
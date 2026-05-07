<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us – JSW One Homes</title>
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

</head>

<body class="bg-cream text-ink">

    <?php include 'includes/navbar.php'; ?>

    <!-- ===================== HERO – GET IN TOUCH ===================== -->
    <!--
    FIX: Changed xl: breakpoints → lg: breakpoints throughout
    so the two-column side-by-side layout kicks in at 1024px
    (matching the navbar and all other sections on this site)
    instead of 1280px which was causing stacking on 1210px screens.
-->
    <section class="w-full bg-[#FCFCF7] px-6 lg:px-12 xl:px-32 py-16">
        <div class="max-w-7xl mx-auto flex flex-col-reverse lg:flex-row items-center gap-10 lg:gap-14">

            <!-- LEFT: text content -->
            <div class="flex-1 max-w-[480px] flex flex-col items-start">
                <h1 class="font-display text-4xl md:text-5xl font-semibold text-ink leading-tight mb-4 fade-up">
                    Get in touch with us
                </h1>
                <p class="text-base text-muted max-w-md mx-auto lg:mx-0 mb-7 leading-relaxed fade-up fade-up-delay-1">
                    If you have questions or need assistance, we're here to help. Contact us today and our team will
                    provide the support you need.
                </p>

                <!-- Action buttons -->
                <div class="flex flex-col w-full gap-3 mb-8">
                    <a href="#book-meeting" class="w-full max-w-[450px]">
                        <button
                            class="flex items-center justify-between w-full bg-[#FAF0DC] border border-[#e8ddd0] hover:border-orange transition-all p-4 md:p-5 rounded-xl group cursor-pointer">
                            <span class="text-ink md:text-base font-medium">Book a meeting</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                viewBox="0 0 256 256"
                                class="text-[#464646] group-hover:text-orange transition-colors flex-shrink-0">
                                <path
                                    d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z">
                                </path>
                            </svg>
                        </button>
                    </a>
                    <a href="#faqs" class="w-full max-w-[450px]">
                        <button
                            class="flex items-center justify-between w-full bg-[#FAF0DC] border border-[#e8ddd0] hover:border-orange transition-all p-4 md:p-5 rounded-xl group cursor-pointer">
                            <span class="text-ink md:text-base font-medium">Read frequently asked
                                questions</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                viewBox="0 0 256 256"
                                class="text-[#464646] group-hover:text-orange transition-colors flex-shrink-0">
                                <path
                                    d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z">
                                </path>
                            </svg>
                        </button>
                    </a>
                </div>

                <!-- Email / Phone -->
                <div class="flex flex-col sm:flex-row items-start gap-6 sm:gap-10 w-full pt-6 border-t border-border">
                    <a href="mailto:abbas@hyderabadconstructions.in" class="group">
                        <p class="text-[#70737A] text-xs uppercase tracking-widest font-bold mb-1">Email us</p>
                        <p class="text-ink text-sm md:text-base font-medium group-hover:text-orange transition-colors">
                            abbas@hyderabadconstructions.in</p>
                    </a>
                    <a href="tel:+919703879886" class="group">
                        <p class="text-[#70737A] text-xs uppercase tracking-widest font-bold mb-1">Call us</p>
                        <p class="text-ink text-sm md:text-base font-medium group-hover:text-orange transition-colors">
                            +91 9703879886</p>
                        <p class="text-muted text-xs mt-1">Mon-Sat, 10 AM to 6 PM</p>
                    </a>
                </div>
            </div>

            <!-- RIGHT: image -->
            <div class="flex-1 flex justify-end">
                <div class="w-full max-w-[580px] h-[410px] rounded-2xl overflow-hidden shadow-sm">
                    <!-- <div class="w-full max-w-[560px] rounded-2xl overflow-hidden shadow-sm"> -->
                    <picture>
                        <source media="(max-width: 1023px)"
                            srcset="https://cdn.jswonehomes.com/About_us_Mob_42e2eb828c/About_us_Mob_42e2eb828c.webp">
                        <source media="(min-width: 1024px)"
                            srcset="https://cdn.jswonehomes.com/contactwebplaptop1_0420347806/contactwebplaptop1_0420347806.webp">
                        <img alt="Get in touch" loading="lazy" class="w-full h-full object-cover"
                            src="https://storage.googleapis.com/public-homes-web-media-prod/About_us_Mob_42e2eb828c/About_us_Mob_42e2eb828c.webp"
                            onerror="this.parentElement.style.background='#ede9df'">
                    </picture>
                </div>
            </div>

        </div>
    </section>


    <!-- ===================== ANY QUERIES FORM ===================== -->
    <section class="w-full bg-[#F6F5EF] px-6 md:px-12 xl:px-32 py-16 md:py-20" id="book-meeting">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="font-display text-3xl md:text-4xl font-semibold text-ink mb-3">Any queries?</h2>
                <p class="text-base text-muted max-w-xl mx-auto leading-relaxed">If you have questions or need
                    assistance, we're here to help. Contact us today and our team will provide the support you need.</p>
            </div>

            <div class="bg-white max-w-3xl mx-auto rounded-2xl p-7 md:p-8 border border-border shadow-md text-left">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    <div class="relative">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Full name
                        </label>
                        <input type="text" id="con_name" placeholder="Full name"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-300 transition-all placeholder-slate-300" />
                    </div>

                    <div class="relative">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Email
                        </label>
                        <input type="email" id="con_email" placeholder="Email"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-300 transition-all placeholder-slate-300" />
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    <div class="relative">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Mobile Number
                        </label>
                        <input type="tel" id="con_mobile" placeholder="Mobile Number"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-300 transition-all placeholder-slate-300" />
                    </div>

                    <div class="relative flex items-center">
                        <label
                            class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                            Choose Type
                        </label>
                        <select id="con_type"
                            class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none bg-white appearance-none cursor-pointer focus:border-orange-300 transition-all">
                            <option>Choose Type</option>
                            <option>General Questions About Our Services</option>
                            <option>Construction Query</option>
                            <option>Package & Pricing</option>
                            <option>Site Visit Request</option>
                            <option>After-sales Support</option>
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

                <div class="relative mb-6">
                    <label
                        class="absolute -top-2.5 left-3 bg-white px-1 text-[12px] font-medium text-slate-400 z-10 pointer-events-none">
                        Your message
                    </label>
                    <textarea rows="4" id="con_message" placeholder="Your message"
                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-orange-300 transition-all resize-none placeholder-slate-300"></textarea>
                </div>

                <div class="flex items-center gap-2 mb-5 mt-1">
                    <input type="checkbox" id="whatsapp" class="w-4 h-4 accent-orange cursor-pointer" />
                    <label for="whatsapp" class="text-xs text-muted cursor-pointer">I agree to receive WhatsApp
                        notifications for communication purposes.</label>
                </div>

                <div class="text-center">
                    <!-- Success message -->
                    <div id="conSuccess" style="display:none"
                        class="mb-4 px-5 py-3 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm font-medium">
                        ✅ Your enquiry has been submitted! We'll get back to you shortly.
                    </div>
                    <!-- Error message -->
                    <div id="conError" style="display:none"
                        class="mb-4 px-5 py-3 bg-red-50 border border-red-200 rounded-xl text-red-600 text-sm font-medium">
                    </div>

                    <button id="conSubmitBtn" onclick="submitContact()"
                        class="bg-orange text-white font-semibold py-3 px-7 rounded-lg hover:bg-orange-dark transition-colors cursor-pointer border-0">
                        Send enquiry
                    </button>
                </div>
            </div>
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

    <?php include 'includes/cta-form.php'; ?>
    <?php include 'includes/action-buttons.php'; ?>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/book-meeting-popup.php'; ?>

    <script src="script.js?v=2"></script>

</body>

</html>
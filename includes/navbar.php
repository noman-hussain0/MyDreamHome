<!-- ===================== NAV ===================== -->
<nav
    class="bg-[#FCFCF7] sticky top-0 z-50 px-6 min-[1201px]:px-32 h-20 flex items-center justify-between border-b border-border">

    <div class="flex items-center gap-2 flex-shrink-0">
        <a href="index.php" class="block">
            <img src="images/logo.jpeg" alt="Hyderabad Constructions Logo" class="h-12 w-auto object-contain">
        </a>
    </div>

    <div class="hidden min-[1201px]:flex items-center gap-7 lg:gap-9">
        <a href="projects.php" class="text-ink hover:text-orange transition-colors">Our projects</a>
        <a href="how-it-works.php" class="text-ink hover:text-orange transition-colors">How it works</a>
        <a href="#" class="text-ink hover:text-orange transition-colors">Testimonials</a>
        <a href="#" class="text-ink hover:text-orange transition-colors">Cost estimator</a>
        <div class="relative" id="navMore">
            <button onclick="toggleMore(event)"
                class="flex items-center gap-1 text-ink hover:text-orange transition-colors bg-transparent border-0 cursor-pointer p-0 font-sans">
                More
                <svg id="moreChevron" viewBox="0 0 24 24"
                    class="w-3.5 h-3.5 stroke-current fill-none stroke-2 transition-transform duration-200">
                    <polyline points="6 9 12 15 18 9" />
                </svg>
            </button>
            <div id="dropdownMenu"
                class="hidden absolute top-[calc(100%+14px)] left-1/2 -translate-x-1/2 bg-white border border-border rounded-xl shadow-lg min-w-[200px] py-2 z-50">
                <a href="about-us.php"
                    class="flex items-center gap-2.5 px-4 py-2.5 text-ink hover:bg-cream hover:text-orange transition-colors">About
                    us</a>
                <a href="join-as-architect.php"
                    class="flex items-center gap-2.5 px-4 py-2.5 text-ink hover:bg-cream hover:text-orange transition-colors">Join
                    as Architect</a>
                <a href="faqs.php"
                    class="flex items-center gap-2.5 px-4 py-2.5 text-ink hover:bg-cream hover:text-orange transition-colors">FAQs</a>
                <a href="contact-us.php"
                    class="flex items-center gap-2.5 px-4 py-2.5 text-ink hover:bg-cream hover:text-orange transition-colors">Contact
                    us</a>
            </div>
        </div>
    </div>

    <div class="hidden min-[1201px]:flex items-center gap-2.5">
        <button onclick="openBookingModal()"
            class="bg-orange border border-orange text-white px-5 py-1.5 rounded-xl hover:bg-orange-dark transition-colors cursor-pointer">Book
            a meeting</button>
    </div>

    <button id="hamburger" onclick="toggleMobileNav()"
        class="min-[1201px]:hidden flex flex-col justify-center items-start gap-[5px] w-9 h-9 bg-transparent border-0 cursor-pointer p-1 rounded-md hover:bg-cream transition-colors">
        <span class="bar bar-1"></span><span class="bar bar-2"></span><span class="bar bar-3"></span>
    </button>
</nav>

<!-- Mobile Drawer -->

<div id="mobileNav"
    class="min-[1201px]:hidden fixed top-20 left-0 right-0 bottom-0 bg-white z-40 overflow-y-auto border-t border-border">
    <div class="py-4 pb-10">
        <a href="#"
            class="flex items-center justify-between px-6 py-4 text-base font-medium text-ink border-b border-border hover:bg-cream hover:text-orange transition-colors">Our
            projects <svg viewBox="0 0 24 24" class="w-4 h-4 stroke-muted fill-none stroke-2">
                <polyline points="9 18 15 12 9 6" />
            </svg></a>
        <a href="how-it-works.php"
            class="flex items-center justify-between px-6 py-4 text-base font-medium text-ink border-b border-border hover:bg-cream hover:text-orange transition-colors">How
            it works <svg viewBox="0 0 24 24" class="w-4 h-4 stroke-muted fill-none stroke-2">
                <polyline points="9 18 15 12 9 6" />
            </svg></a>
        <a href="#"
            class="flex items-center justify-between px-6 py-4 text-base font-medium text-ink border-b border-border hover:bg-cream hover:text-orange transition-colors">Testimonials
            <svg viewBox="0 0 24 24" class="w-4 h-4 stroke-muted fill-none stroke-2">
                <polyline points="9 18 15 12 9 6" />
            </svg></a>
        <a href="#"
            class="flex items-center justify-between px-6 py-4 text-base font-medium text-ink border-b border-border hover:bg-cream hover:text-orange transition-colors">Cost
            estimator <svg viewBox="0 0 24 24" class="w-4 h-4 stroke-muted fill-none stroke-2">
                <polyline points="9 18 15 12 9 6" />
            </svg></a>

        <a href="about-us.php"
            class="flex items-center justify-between px-6 py-4 text-base font-medium text-ink border-b border-border hover:bg-cream hover:text-orange transition-colors">About
            us <svg viewBox="0 0 24 24" class="w-4 h-4 stroke-muted fill-none stroke-2">
                <polyline points="9 18 15 12 9 6" />
            </svg></a>
        <a href="join-as-architect.php"
            class="flex items-center justify-between px-6 py-4 text-base font-medium text-ink border-b border-border hover:bg-cream hover:text-orange transition-colors">
            Join as Architect <svg viewBox="0 0 24 24" class="w-4 h-4 stroke-muted fill-none stroke-2">
                <polyline points="9 18 15 12 9 6" />
            </svg></a>
        <a href="faqs.php"
            class="flex items-center justify-between px-6 py-4 text-base font-medium text-ink border-b border-border hover:bg-cream hover:text-orange transition-colors">FAQs
            <svg viewBox="0 0 24 24" class="w-4 h-4 stroke-muted fill-none stroke-2">
                <polyline points="9 18 15 12 9 6" />
            </svg></a>
        <a href="contact-us.php"
            class="flex items-center justify-between px-6 py-4 text-base font-medium text-ink border-b border-border hover:bg-cream hover:text-orange transition-colors">Contact
            us <svg viewBox="0 0 24 24" class="w-4 h-4 stroke-muted fill-none stroke-2">
                <polyline points="9 18 15 12 9 6" />
            </svg></a>

        <div class="px-6 pt-5 flex flex-col gap-3">
            <!-- <button class="w-full border border-orange text-orange py-2.5 rounded-xl font-medium">Login</button> -->
            <button onclick="openBookingModal()"
                class="w-full bg-orange text-white py-2.5 rounded-xl font-medium hover:bg-orange-dark transition-colors">Book
                a meeting</button>
        </div>
    </div>
</div>
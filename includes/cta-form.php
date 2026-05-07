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
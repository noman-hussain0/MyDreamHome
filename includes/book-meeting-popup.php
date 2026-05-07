<!-- ===================== BOOK A MEETING POPUP ===================== -->
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
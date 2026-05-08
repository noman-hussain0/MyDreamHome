/* =============================================================
   Covers: Navbar, Mobile Nav, Carousels, FAQ, Packages,
           Modals, Form Submissions
   ============================================================= */

/* =============================================
   NAVIGATION
   ============================================= */

function toggleMore(e) {
    e.stopPropagation();
    const menu = document.getElementById('dropdownMenu');
    const chevron = document.getElementById('moreChevron');
    if (!menu || !chevron) return;

    const isHidden = menu.classList.contains('hidden');
    menu.classList.toggle('hidden', !isHidden);
    
    if (isHidden) {
        menu.classList.add('dropdown-open');
        chevron.style.transform = 'rotate(180deg)';
    } else {
        chevron.style.transform = '';
    }
}

// Close dropdown when clicking outside
document.addEventListener('click', () => {
    const menu = document.getElementById('dropdownMenu');
    const chevron = document.getElementById('moreChevron');
    if (menu) menu.classList.add('hidden');
    if (chevron) chevron.style.transform = '';
});

function toggleMobileNav() {
    const nav = document.getElementById('mobileNav');
    const burger = document.getElementById('hamburger');
    if (!nav || !burger) return;

    const isOpen = nav.classList.toggle('open');
    burger.classList.toggle('active', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
}

/* =============================================
   CAROUSELS
   ============================================= */

// Shared Carousel Engine
function goCarousel(trackId, dotsId, idx) {
    const track = document.getElementById(trackId);
    if (!track) return;

    const slides = track.querySelectorAll('.carousel-slide');
    if (!slides[idx]) return;

    const gap = 16;
    const slideWidth = slides[0].offsetWidth + gap;
    const maxScroll = track.scrollWidth - track.clientWidth;
    const targetScroll = idx * slideWidth;

    track.scrollTo({
        left: Math.min(targetScroll, maxScroll),
        behavior: 'smooth'
    });
}

function stepCarousel(trackId, dotsId, dir) {
    const track = document.getElementById(trackId);
    if (!track) return;

    const current = getActiveIdx(track);
    let next = current + dir;

    const slides = track.querySelectorAll('.carousel-slide');
    if (next < 0) next = 0;
    if (next >= slides.length) next = slides.length - 1;

    goCarousel(trackId, dotsId, next);
}

function getActiveIdx(trackEl) {
    const scrollLeft = trackEl.scrollLeft;
    const gap = 16;
    const slide = trackEl.querySelector('.carousel-slide');
    if (!slide) return 0;

    const slideWidth = slide.offsetWidth + gap;
    return Math.round(scrollLeft / slideWidth);
}

// Gallery Carousel (Specific)
function goGallery(idx) {
    const track = document.getElementById('galleryTrack');
    if (!track) return;

    const slides = track.querySelectorAll('.gallery-slide');
    if (!slides[idx]) return;

    track.scrollTo({
        left: slides[idx].offsetLeft - track.offsetLeft,
        behavior: 'smooth'
    });

    // Update dots
    const dotsContainer = document.getElementById('galleryDots');
    if (dotsContainer) {
        dotsContainer.querySelectorAll('.dot').forEach((dot, i) => {
            dot.classList.toggle('active', i === idx);
        });
    }
}

function stepGallery(dir) {
    const track = document.getElementById('galleryTrack');
    if (!track) return;

    const slides = track.querySelectorAll('.gallery-slide');
    if (!slides.length) return;

    let closest = 0, minDist = Infinity;
    const trackRect = track.getBoundingClientRect();

    slides.forEach((slide, i) => {
        const dist = Math.abs(slide.getBoundingClientRect().left - trackRect.left);
        if (dist < minDist) {
            minDist = dist;
            closest = i;
        }
    });

    const next = Math.max(0, Math.min(slides.length - 1, closest + dir));
    goGallery(next);
}

/* =============================================
   ACCORDIONS & EXPANDABLES
   ============================================= */

// FAQ Accordion
function toggleFaq(row) {
    const body = row.querySelector('.faq-body');
    if (!body) return;

    const isOpen = row.classList.contains('open');

    // Close all other FAQs
    document.querySelectorAll('.faq-row.open').forEach(r => {
        r.classList.remove('open');
        const b = r.querySelector('.faq-body');
        if (b) b.classList.remove('open');
    });

    if (!isOpen) {
        row.classList.add('open');
        body.classList.add('open');
    }
}

function filterFaqs(btn) {
    // Update active category pill
    document.querySelectorAll('.cat-pill').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');

    const cat = btn.dataset.cat;

    // Close open accordion
    document.querySelectorAll('.faq-row.open').forEach(r => {
        r.classList.remove('open');
        const body = r.querySelector('.faq-body');
        if (body) body.classList.remove('open');
    });

    // Filter FAQ items
    document.querySelectorAll('.faq-item').forEach(item => {
        item.style.display = (cat === 'all' || item.dataset.cat === cat) ? '' : 'none';
    });
}

// Package Features Expand/Collapse
function toggleFeature(btn) {
    const row = btn.closest('.pkg-feature-row');
    if (!row) return;

    const body = row.querySelector('.pkg-feature-body');
    if (!body) return;

    const isOpen = row.classList.contains('open');
    row.classList.toggle('open', !isOpen);
    body.classList.toggle('open', !isOpen);
}

/* =============================================
   MODALS
   ============================================= */

function openBookingModal() {
    const modal = document.getElementById('bookingModal');
    if (!modal) return;

    modal.style.display = 'flex';
    document.body.classList.add('modal-open');

    // Close mobile nav if open
    const mobileNav = document.getElementById('mobileNav');
    const burger = document.getElementById('hamburger');
    if (mobileNav?.classList.contains('open')) {
        mobileNav.classList.remove('open');
        if (burger) burger.classList.remove('active');
        document.body.style.overflow = '';
    }
}

function closeBookingModal() {
    const modal = document.getElementById('bookingModal');
    if (!modal) return;

    modal.style.display = 'none';
    document.body.classList.remove('modal-open');
}

// Close modal with Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeBookingModal();
});

/* =============================================
   FORM SUBMISSIONS
   ============================================= */

// Booking Form (Used by Modal + CTA Form)
async function submitBooking(config = {}) {
    const {
        btnId = 'bookingSubmitBtn',
        successId = 'bookingSuccess',
        errorId = 'bookingError',
        nameId = 'modal_name',
        emailId = 'modal_email',
        mobileId = 'modal_mobile',
        cityId = 'modal_city',
        timelineId = 'modal_timeline',
        radioName = 'modal_land',
        agreeId = 'modal_agree',
        isModal = true
    } = config;

    const btn = document.getElementById(btnId);
    const successEl = document.getElementById(successId);
    const errorEl = document.getElementById(errorId);

    if (!btn || !successEl || !errorEl) return;

    successEl.style.display = 'none';
    errorEl.style.display = 'none';

    const full_name = document.getElementById(nameId)?.value.trim() || '';
    const email = document.getElementById(emailId)?.value.trim() || '';
    const mobile = document.getElementById(mobileId)?.value.trim() || '';
    const city = document.getElementById(cityId)?.value || '';
    const timeline = document.getElementById(timelineId)?.value || '';
    const owns_plot = document.querySelector(`input[name="${radioName}"]:checked`)?.value || '';
    const agreed_terms = document.getElementById(agreeId)?.checked || false;

    if (!full_name || !email || !mobile || city === 'Choose City') {
        errorEl.textContent = 'Please fill in all required fields.';
        errorEl.style.display = 'block';
        return;
    }
    if (!agreed_terms) {
        errorEl.textContent = 'Please agree to the Privacy Policy and Terms.';
        errorEl.style.display = 'block';
        return;
    }

    btn.disabled = true;
    btn.textContent = 'Submitting…';

    try {
        const res = await fetch('../../backend/submit_booking.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ full_name, email, mobile, city, timeline, owns_plot, agreed_terms })
        });

        const result = await res.json();

        if (result.success) {
            successEl.style.display = 'block';
            btn.style.display = 'none';

            setTimeout(() => {
                resetBookingForm(nameId, emailId, mobileId, cityId, timelineId, radioName, agreeId, isModal);
                successEl.style.display = 'none';
                btn.style.display = '';
                btn.disabled = false;
                btn.textContent = 'Book a Meeting';

                if (isModal) closeBookingModal();
            }, 3000);
        } else {
            errorEl.textContent = result.message || 'Something went wrong. Please try again.';
            errorEl.style.display = 'block';
            btn.disabled = false;
            btn.textContent = 'Book a Meeting';
        }
    } catch (err) {
        errorEl.textContent = 'Could not connect to server. Make sure XAMPP is running.';
        errorEl.style.display = 'block';
        btn.disabled = false;
        btn.textContent = 'Book a Meeting';
    }
}

// Helper to reset booking form fields
function resetBookingForm(nameId, emailId, mobileId, cityId, timelineId, radioName, agreeId, isModal) {
    const fields = {
        [nameId]: '',
        [emailId]: '',
        [mobileId]: '',
        [cityId]: 'Choose City',
        [timelineId]: '0–3 months'
    };

    Object.entries(fields).forEach(([id, val]) => {
        const el = document.getElementById(id);
        if (el) el.value = val;
    });

    document.getElementById(agreeId).checked = false;

    const radios = document.querySelectorAll(`input[name="${radioName}"]`);
    radios.forEach(r => r.checked = false);
}

// Join as Architect Form
async function submitArchitect() {
    const btn = document.getElementById('archSubmitBtn');
    const successEl = document.getElementById('archSuccess');
    const errorEl = document.getElementById('archError');

    if (!btn || !successEl || !errorEl) return;

    successEl.style.display = 'none';
    errorEl.style.display = 'none';

    const full_name = document.getElementById('archName').value.trim();
    const email = document.getElementById('archEmail').value.trim();
    const mobile = document.getElementById('archPhone').value.trim();
    const city = document.getElementById('archCity').value;
    const experience = document.getElementById('archExperience').value.trim();
    const coa_registered = document.querySelector('input[name="coa"]:checked')?.value || '';
    const agreed_terms = document.getElementById('archAgree').checked;

    if (!full_name || !email || !mobile || city === 'Choose City') {
        errorEl.textContent = 'Please fill in all required fields.';
        errorEl.style.display = 'block';
        return;
    }
    if (!agreed_terms) {
        errorEl.textContent = 'Please agree to the Privacy Policy and Terms.';
        errorEl.style.display = 'block';
        return;
    }

    btn.disabled = true;
    btn.textContent = 'Submitting…';

    try {
        const res = await fetch('../../backend/submit_architect.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ full_name, email, mobile, city, experience, coa_registered, agreed_terms })
        });

        const result = await res.json();

        if (result.success) {
            successEl.style.display = 'block';
            btn.style.display = 'none';

            setTimeout(() => {
                // Reset form
                document.getElementById('archName').value = '';
                document.getElementById('archEmail').value = '';
                document.getElementById('archPhone').value = '';
                document.getElementById('archCity').value = 'Choose City';
                document.getElementById('archExperience').value = '';
                document.getElementById('archAgree').checked = false;
                document.querySelectorAll('input[name="coa"]').forEach(r => r.checked = false);

                successEl.style.display = 'none';
                btn.style.display = '';
                btn.disabled = false;
                btn.textContent = 'Submit';
            }, 3000);
        } else {
            errorEl.textContent = result.message || 'Something went wrong. Please try again.';
            errorEl.style.display = 'block';
            btn.disabled = false;
            btn.textContent = 'Submit';
        }
    } catch (err) {
        errorEl.textContent = 'Could not connect to server. Make sure XAMPP is running.';
        errorEl.style.display = 'block';
        btn.disabled = false;
        btn.textContent = 'Submit';
    }
}

// Contact Page Form
async function submitContact() {
    const btn = document.getElementById('conSubmitBtn');
    const successEl = document.getElementById('conSuccess');
    const errorEl = document.getElementById('conError');

    if (!btn || !successEl || !errorEl) return;

    successEl.style.display = 'none';
    errorEl.style.display = 'none';

    const full_name = document.getElementById('con_name').value.trim();
    const email = document.getElementById('con_email').value.trim();
    const mobile = document.getElementById('con_mobile').value.trim();
    const query_type = document.getElementById('con_type').value;
    const message = document.getElementById('con_message').value.trim();
    const whatsapp_optin = document.getElementById('whatsapp').checked;

    if (!full_name || !email || !mobile) {
        errorEl.textContent = 'Please fill in all required fields.';
        errorEl.style.display = 'block';
        return;
    }

    btn.disabled = true;
    btn.textContent = 'Sending…';

    try {
        const res = await fetch('../../backend/submit_contact.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ full_name, email, mobile, query_type, message, whatsapp_optin })
        });

        const result = await res.json();

        if (result.success) {
            successEl.style.display = 'block';
            btn.style.display = 'none';

            setTimeout(() => {
                // Reset form
                document.getElementById('con_name').value = '';
                document.getElementById('con_email').value = '';
                document.getElementById('con_mobile').value = '';
                document.getElementById('con_type').value = 'Choose Type';
                document.getElementById('con_message').value = '';
                document.getElementById('whatsapp').checked = false;

                successEl.style.display = 'none';
                btn.style.display = '';
                btn.disabled = false;
                btn.textContent = 'Send enquiry';
            }, 3000);
        } else {
            errorEl.textContent = result.message || 'Something went wrong. Please try again.';
            errorEl.style.display = 'block';
            btn.disabled = false;
            btn.textContent = 'Send enquiry';
        }
    } catch (err) {
        errorEl.textContent = 'Could not connect to server. Make sure XAMPP is running.';
        errorEl.style.display = 'block';
        btn.disabled = false;
        btn.textContent = 'Send enquiry';
    }
}
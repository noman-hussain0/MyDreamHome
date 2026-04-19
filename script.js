/* =============================================================
   script.js — Shared JavaScript for JSW One Homes
   Covers: Navbar dropdown, Mobile nav, Carousel engine,
           Gallery carousel, FAQ accordion, Package expand/collapse
   ============================================================= */


/* =============================================
   NAVBAR
   ============================================= */

function toggleMore(e) {
    e.stopPropagation();
    const menu = document.getElementById('dropdownMenu');
    const chevron = document.getElementById('moreChevron');
    const isHidden = menu.classList.contains('hidden');
    menu.classList.toggle('hidden', !isHidden);
    if (isHidden) menu.classList.add('dropdown-open');
    chevron.style.transform = isHidden ? 'rotate(180deg)' : '';
}

document.addEventListener('click', () => {
    const menu = document.getElementById('dropdownMenu');
    const chevron = document.getElementById('moreChevron');
    if (menu) menu.classList.add('hidden');
    if (chevron) chevron.style.transform = '';
});

function toggleMobileNav() {
    const nav = document.getElementById('mobileNav');
    const burger = document.getElementById('hamburger');
    const isOpen = nav.classList.toggle('open');
    burger.classList.toggle('active', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
}


/* =============================================
   SHARED CAROUSEL ENGINE
   ============================================= */

function goCarousel(trackId, dotsId, idx) {
    const track = document.getElementById(trackId);
    const slides = track.querySelectorAll('.carousel-slide');
    if (!slides[idx]) return;

    // Calculate the gap (Tailwind's gap-4 is 16px)
    const gap = 16;
    const slideWidth = slides[0].offsetWidth + gap;

    // Check if the target index exceeds the maximum possible scroll
    const maxScroll = track.scrollWidth - track.clientWidth;
    const targetScroll = idx * slideWidth;

    track.scrollTo({
        left: Math.min(targetScroll, maxScroll),
        behavior: 'smooth'
    });

    // Update the dots immediately for better UX
    //syncDots(dotsId, idx, slides.length);
}

function stepCarousel(trackId, dotsId, dir) {
    const track = document.getElementById(trackId);
    const slides = track.querySelectorAll('.carousel-slide');

    // Use the index calculated by the scroll position
    const current = getActiveIdx(track);
    let next = current + dir;

    // Boundary checks
    if (next < 0) next = 0;
    if (next >= slides.length) next = slides.length - 1;

    goCarousel(trackId, dotsId, next);
}

function getActiveIdx(trackEl) {
    const scrollLeft = trackEl.scrollLeft;
    const gap = 16;
    const slideWidth = trackEl.querySelector('.carousel-slide').offsetWidth + gap;

    // Math.round ensures that even if the scroll is off by a pixel, 
    // it snaps to the closest dot.
    return Math.round(scrollLeft / slideWidth);
}



/* =============================================
   GALLERY CAROUSEL
   ============================================= */

/* ---- Gallery carousel ---- */

function goGallery(idx) {
    const track = document.getElementById('galleryTrack');
    const slides = track.querySelectorAll('.gallery-slide');
    if (!slides[idx]) return;
    track.scrollTo({ left: slides[idx].offsetLeft - track.offsetLeft, behavior: 'smooth' });
    document.getElementById('galleryDots').querySelectorAll('.dot').forEach((d, i) => d.classList.toggle('active', i === idx));
}

function stepGallery(dir) {
    const track = document.getElementById('galleryTrack');
    if (!track) return;
    const slides = track.querySelectorAll('.gallery-slide');
    let closest = 0, minDist = Infinity;
    slides.forEach((s, i) => {
        const dist = Math.abs(s.getBoundingClientRect().left - track.getBoundingClientRect().left);
        if (dist < minDist) { minDist = dist; closest = i; }
    });
    const next = Math.max(0, Math.min(slides.length - 1, closest + dir));
    goGallery(next);
}


/* FAQ accordion */
function toggleFaq(row) {
    const body = row.querySelector('.faq-body');
    const isOpen = row.classList.contains('open');
    // close all others
    document.querySelectorAll('.faq-row.open').forEach(r => {
        r.classList.remove('open');
        r.querySelector('.faq-body').classList.remove('open');
    });
    if (!isOpen) {
        row.classList.add('open');
        body.classList.add('open');
    }
}

/* =============================================
   BOOK A MEETING MODAL
   ============================================= */

function openBookingModal() {
    const modal = document.getElementById('bookingModal');
    if (!modal) return;
    modal.style.removeProperty('display');          // clear inline display:none
    modal.style.display = 'flex';
    document.body.classList.add('modal-open');

    // Close mobile nav if it's open
    const mobileNav = document.getElementById('mobileNav');
    const burger = document.getElementById('hamburger');
    if (mobileNav && mobileNav.classList.contains('open')) {
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

// Close on Escape key
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeBookingModal();
});

/* =============================================
   BOOKING FORM SUBMIT both popup + CTA Form
   ============================================= */

async function submitBooking(
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
) {
    const btn = document.getElementById(btnId);
    const successEl = document.getElementById(successId);
    const errorEl = document.getElementById(errorId);

    successEl.style.display = 'none';
    errorEl.style.display = 'none';

    const full_name = document.getElementById(nameId).value.trim();
    const email = document.getElementById(emailId).value.trim();
    const mobile = document.getElementById(mobileId).value.trim();
    const city = document.getElementById(cityId).value;
    const timeline = document.getElementById(timelineId).value;
    const owns_plot = document.querySelector(`input[name="${radioName}"]:checked`)?.value || '';
    const agreed_terms = document.getElementById(agreeId).checked;

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
        const res = await fetch('submit_booking.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ full_name, email, mobile, city, timeline, owns_plot, agreed_terms })
        });

        const result = await res.json();

        if (result.success) {
            successEl.style.display = 'block';
            btn.style.display = 'none';

            setTimeout(() => {
                successEl.style.display = 'none';
                btn.style.display = '';
                btn.disabled = false;
                btn.textContent = 'Book a Meeting';

                if (isModal) {
                    document.getElementById('modal_name').value = '';
                    document.getElementById('modal_email').value = '';
                    document.getElementById('modal_mobile').value = '';
                    document.getElementById('modal_city').value = 'Choose City';
                    document.getElementById('modal_timeline').value = '0–3 months';
                    document.getElementById('modal_agree').checked = false;
                    const modalRadios = document.querySelectorAll('input[name="modal_land"]');
                    modalRadios.forEach(r => r.checked = false);
                    closeBookingModal();
                } else {
                    // Reset CTA form fields
                    document.getElementById(nameId).value = '';
                    document.getElementById(emailId).value = '';
                    document.getElementById(mobileId).value = '';
                    document.getElementById(cityId).value = 'Choose City';
                    document.getElementById(agreeId).checked = false;
                    // Reset radio buttons
                    const ctaRadios = document.querySelectorAll(`input[name="${radioName}"]`);
                    ctaRadios.forEach(r => r.checked = false);
                }
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


/* =============================================
   JOIN AS ARCHITECT FORM SUBMIT
   ============================================= */

async function submitArchitect() {
    const btn = document.getElementById('archSubmitBtn');
    const successEl = document.getElementById('archSuccess');
    const errorEl = document.getElementById('archError');

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
        const res = await fetch('submit_architect.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ full_name, email, mobile, city, experience, coa_registered, agreed_terms })
        });

        const result = await res.json();

        if (result.success) {
            successEl.style.display = 'block';
            btn.style.display = 'none';

            setTimeout(() => {
                successEl.style.display = 'none';
                btn.style.display = '';
                btn.disabled = false;
                btn.textContent = 'Submit';
                // Reset fields
                document.getElementById('archName').value = '';
                document.getElementById('archEmail').value = '';
                document.getElementById('archPhone').value = '';
                document.getElementById('archCity').value = 'Choose City';
                document.getElementById('archExperience').value = '';
                document.getElementById('archAgree').checked = false;
                // ADD THESE TWO LINES:
                const coaRadios = document.querySelectorAll('input[name="coa"]');
                coaRadios.forEach(r => r.checked = false);
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



/* =============================================
   CONTACT PAGE QUERY FORM
   ============================================= */

async function submitContact() {
    const btn = document.getElementById('conSubmitBtn');
    const successEl = document.getElementById('conSuccess');
    const errorEl = document.getElementById('conError');

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
        const res = await fetch('submit_contact.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ full_name, email, mobile, query_type, message, whatsapp_optin })
        });

        const result = await res.json();

        if (result.success) {
            successEl.style.display = 'block';
            btn.style.display = 'none';

            setTimeout(() => {
                successEl.style.display = 'none';
                btn.style.display = '';
                btn.disabled = false;
                btn.textContent = 'Send enquiry';
                // Reset fields
                document.getElementById('con_name').value = '';
                document.getElementById('con_email').value = '';
                document.getElementById('con_mobile').value = '';
                document.getElementById('con_type').value = 'Choose Type';
                document.getElementById('con_message').value = '';
                document.getElementById('whatsapp').checked = false;
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
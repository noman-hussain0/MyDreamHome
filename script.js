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
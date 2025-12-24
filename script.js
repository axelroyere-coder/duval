// ========================================
// MOBILE MENU TOGGLE
// ========================================

const navMenu = document.getElementById('nav-menu');
const navToggle = document.getElementById('nav-toggle');
const navClose = document.getElementById('nav-close');
const navLinks = document.querySelectorAll('.nav__link');

// Show menu
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show');
    });
}

// Hide menu
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show');
    });
}

// Close menu when clicking on nav links
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('show');
    });
});

// ========================================
// ACTIVE NAVIGATION LINK
// ========================================

const sections = document.querySelectorAll('section[id]');

function scrollActive() {
    const scrollY = window.pageYOffset;

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 100;
        const sectionId = current.getAttribute('id');
        const navLink = document.querySelector(`.nav__link[href="#${sectionId}"]`);

        if (navLink) {
            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                navLink.classList.add('active');
            } else {
                navLink.classList.remove('active');
            }
        }
    });
}

window.addEventListener('scroll', scrollActive);

// ========================================
// HEADER SCROLL EFFECT
// ========================================

const header = document.getElementById('header');

function scrollHeader() {
    if (window.scrollY >= 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
}

window.addEventListener('scroll', scrollHeader);

// ========================================
// BACK TO TOP BUTTON
// ========================================

const backToTop = document.getElementById('back-to-top');

function scrollToTop() {
    const scrollY = window.pageYOffset;

    if (scrollY >= 400) {
        backToTop.classList.add('visible');
    } else {
        backToTop.classList.remove('visible');
    }
}

window.addEventListener('scroll', scrollToTop);

// ========================================
// SMOOTH SCROLLING FOR ANCHOR LINKS
// ========================================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));

        if (target) {
            const headerHeight = header.offsetHeight;
            const targetPosition = target.offsetTop - headerHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// ========================================
// CONTACT FORM HANDLING
// ========================================

const contactForm = document.getElementById('contact-form');
const formSuccess = document.getElementById('form-success');
const formError = document.getElementById('form-error');

if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form data
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);

        // Validate form
        if (validateForm(data)) {
            // Simulate form submission
            // In production, you would send this to a server
            submitForm(data);
        } else {
            showMessage('error');
        }
    });
}

function validateForm(data) {
    // Check required fields
    if (!data.name || !data.email || !data.phone || !data.service || !data.message) {
        return false;
    }

    // Validate email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(data.email)) {
        return false;
    }

    // Validate phone format (French phone number)
    const phoneRegex = /^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/;
    if (!phoneRegex.test(data.phone)) {
        return false;
    }

    // Check RGPD consent
    if (!data.rgpd) {
        return false;
    }

    return true;
}

function submitForm(data) {
    // Show loading state
    const submitButton = contactForm.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    submitButton.textContent = 'Envoi en cours...';
    submitButton.disabled = true;

    // Simulate API call
    setTimeout(() => {
        // In production, replace this with actual API call
        console.log('Form data:', data);

        // Reset form
        contactForm.reset();

        // Show success message
        showMessage('success');

        // Reset button
        submitButton.textContent = originalText;
        submitButton.disabled = false;

        // Hide success message after 5 seconds
        setTimeout(() => {
            hideMessage('success');
        }, 5000);
    }, 1500);
}

function showMessage(type) {
    if (type === 'success') {
        formSuccess.style.display = 'block';
        formError.style.display = 'none';

        // Scroll to message
        formSuccess.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    } else {
        formSuccess.style.display = 'none';
        formError.style.display = 'block';

        // Scroll to message
        formError.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
}

function hideMessage(type) {
    if (type === 'success') {
        formSuccess.style.display = 'none';
    } else {
        formError.style.display = 'none';
    }
}

// ========================================
// SCROLL REVEAL ANIMATIONS
// ========================================

const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements for animation
const animateElements = document.querySelectorAll('.service__card, .realisation__card, .stat__item, .contact__card');

animateElements.forEach(element => {
    element.style.opacity = '0';
    element.style.transform = 'translateY(30px)';
    element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(element);
});

// ========================================
// PHONE NUMBER FORMATTING
// ========================================

const phoneInput = document.getElementById('phone');

if (phoneInput) {
    phoneInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\s/g, '');

        // Format as French phone number: 01 23 45 67 89
        if (value.length > 0) {
            value = value.match(/.{1,2}/g)?.join(' ') || value;
        }

        e.target.value = value.substring(0, 14); // Max length with spaces
    });
}

// ========================================
// FORM FIELD VALIDATION FEEDBACK
// ========================================

const formInputs = document.querySelectorAll('.form__input');

formInputs.forEach(input => {
    input.addEventListener('blur', function() {
        if (this.value.trim() !== '') {
            if (this.validity.valid) {
                this.style.borderColor = '#10b981';
            } else {
                this.style.borderColor = '#ef4444';
            }
        } else if (this.hasAttribute('required')) {
            this.style.borderColor = '#ef4444';
        }
    });

    input.addEventListener('focus', function() {
        this.style.borderColor = '#f59e0b';
    });
});

// ========================================
// PREVENT FORM RESUBMISSION
// ========================================

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

// ========================================
// LOADING OPTIMIZATION
// ========================================

// Lazy load images when implemented
document.addEventListener('DOMContentLoaded', function() {
    // Add loaded class to body for CSS animations
    document.body.classList.add('loaded');
});

// ========================================
// PERFORMANCE: Debounce scroll events
// ========================================

function debounce(func, wait = 10, immediate = true) {
    let timeout;
    return function() {
        const context = this;
        const args = arguments;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

// Apply debounce to scroll events
window.addEventListener('scroll', debounce(function() {
    scrollActive();
    scrollHeader();
    scrollToTop();
}, 10));

// ========================================
// ACCESSIBILITY: Focus trap for mobile menu
// ========================================

function trapFocus(element) {
    const focusableElements = element.querySelectorAll(
        'a[href], button, textarea, input, select'
    );
    const firstFocusable = focusableElements[0];
    const lastFocusable = focusableElements[focusableElements.length - 1];

    element.addEventListener('keydown', function(e) {
        const isTabPressed = e.key === 'Tab';

        if (!isTabPressed) return;

        if (e.shiftKey) {
            if (document.activeElement === firstFocusable) {
                lastFocusable.focus();
                e.preventDefault();
            }
        } else {
            if (document.activeElement === lastFocusable) {
                firstFocusable.focus();
                e.preventDefault();
            }
        }
    });
}

if (navMenu) {
    trapFocus(navMenu);
}

// ========================================
// CONSOLE LOG (Remove in production)
// ========================================

console.log('%c🏠 Duval Couverture 27', 'font-size: 20px; font-weight: bold; color: #f59e0b;');
console.log('%cSite web développé avec ❤️', 'font-size: 14px; color: #1e3a8a;');

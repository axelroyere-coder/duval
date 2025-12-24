// ==========================================
// DUVAL COUVERTURE - JavaScript
// Modern & Interactive
// ==========================================

'use strict';

// ==========================================
// MOBILE MENU TOGGLE
// ==========================================

const navMenu = document.getElementById('nav-menu');
const navToggle = document.getElementById('nav-toggle');
const navLinks = document.querySelectorAll('.nav-link');

if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });
}

// Close menu when clicking on nav links
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
    });
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
        navMenu.classList.remove('active');
    }
});

// ==========================================
// NAVBAR SCROLL EFFECT
// ==========================================

const navbar = document.getElementById('navbar');

function handleScroll() {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
}

window.addEventListener('scroll', handleScroll);

// ==========================================
// SMOOTH SCROLL
// ==========================================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');

        // Skip if href is just "#"
        if (href === '#') {
            e.preventDefault();
            return;
        }

        const target = document.querySelector(href);

        if (target) {
            e.preventDefault();
            const headerHeight = navbar ? navbar.offsetHeight : 80;
            const targetPosition = target.offsetTop - headerHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// ==========================================
// CONTACT FORM HANDLING
// ==========================================

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
    if (!phoneRegex.test(data.phone.replace(/\s/g, ''))) {
        return false;
    }

    // Check RGPD consent
    if (!data.rgpd) {
        return false;
    }

    return true;
}

function submitForm(data) {
    const submitButton = contactForm.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;

    // Show loading state
    submitButton.textContent = 'Envoi en cours...';
    submitButton.disabled = true;

    // Simulate API call (replace with actual backend endpoint)
    setTimeout(() => {
        // In production, send data to server
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
        if (formSuccess) {
            formSuccess.style.display = 'block';
            formSuccess.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
        if (formError) {
            formError.style.display = 'none';
        }
    } else {
        if (formError) {
            formError.style.display = 'block';
            formError.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
        if (formSuccess) {
            formSuccess.style.display = 'none';
        }
    }
}

function hideMessage(type) {
    if (type === 'success' && formSuccess) {
        formSuccess.style.display = 'none';
    } else if (formError) {
        formError.style.display = 'none';
    }
}

// ==========================================
// PHONE NUMBER FORMATTING
// ==========================================

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

// ==========================================
// FORM VALIDATION FEEDBACK
// ==========================================

const formInputs = document.querySelectorAll('.form-input, .form-textarea, .form-select');

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
        this.style.borderColor = '#6366f1';
    });
});

// ==========================================
// SCROLL ANIMATIONS
// ==========================================

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

// Observe cards for animation
const animateElements = document.querySelectorAll('.card, .stat-item');

animateElements.forEach(element => {
    element.style.opacity = '0';
    element.style.transform = 'translateY(30px)';
    element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(element);
});

// ==========================================
// ACTIVE NAV LINK
// ==========================================

function setActiveNavLink() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';

    navLinks.forEach(link => {
        const linkHref = link.getAttribute('href');

        if (linkHref === currentPage ||
            (currentPage === '' && linkHref === 'index.html') ||
            (currentPage === 'index.html' && linkHref === 'index.html')) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Set active link on page load
setActiveNavLink();

// ==========================================
// PREVENT FORM RESUBMISSION
// ==========================================

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

// ==========================================
// PERFORMANCE: Debounce
// ==========================================

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

// Apply debounce to scroll event
window.addEventListener('scroll', debounce(handleScroll, 10));

// ==========================================
// ACCESSIBILITY: ESC key to close menu
// ==========================================

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
    }
});

// ==========================================
// PAGE LOAD ANIMATIONS
// ==========================================

window.addEventListener('load', () => {
    document.body.classList.add('loaded');
});

// ==========================================
// CONSOLE MESSAGE
// ==========================================

console.log('%c🏠 Duval Couverture 27', 'font-size: 20px; font-weight: bold; color: #6366f1;');
console.log('%cSite web moderne et professionnel', 'font-size: 14px; color: #4b5563;');
console.log('%cDéveloppé avec soin ✨', 'font-size: 12px; color: #9ca3af;');

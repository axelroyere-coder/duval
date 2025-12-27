/**
 * Duval Couverture - Main JavaScript
 *
 * @package Duval_Theme
 * @version 1.0.0
 */

(function() {
    'use strict';

    /**
     * Init - Point d'entrée principal
     */
    function init() {
        initMobileMenu();
        initSmoothScroll();
        initScrollAnimations();
        initChatbot();
        initFormValidation();
        initActiveNavLinks();
    }

    /**
     * Menu mobile - Toggle
     */
    function initMobileMenu() {
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (!menuToggle || !mobileMenu) return;

        // Toggle menu
        menuToggle.addEventListener('click', function() {
            const isHidden = mobileMenu.classList.contains('hidden');

            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
                // Animation d'entrée
                setTimeout(() => {
                    mobileMenu.classList.add('animate-fade-in');
                }, 10);
            } else {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('animate-fade-in');
                document.body.classList.remove('overflow-hidden');
            }
        });

        // Fermer le menu quand on clique sur un lien
        const menuLinks = mobileMenu.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('animate-fade-in');
                document.body.classList.remove('overflow-hidden');
            });
        });

        // Fermer le menu avec la touche Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('animate-fade-in');
                document.body.classList.remove('overflow-hidden');
            }
        });
    }

    /**
     * Smooth scroll pour les ancres
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');

                // Ignorer # seul ou #!
                if (href === '#' || href === '#!') {
                    return;
                }

                const target = document.querySelector(href);

                if (target) {
                    e.preventDefault();

                    const offsetTop = target.offsetTop - 100; // 100px de marge

                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Animations au scroll - Intersection Observer
     */
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(30px)';

                    setTimeout(() => {
                        entry.target.style.transition = 'all 0.8s ease-out';
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 100);

                    // Désactiver l'observation après l'animation
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observer tous les éléments avec la classe .animate-on-scroll
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    }

    /**
     * Chatbot - Simple toggle (à personnaliser selon vos besoins)
     */
    function initChatbot() {
        const chatbotBubble = document.getElementById('chatbot-bubble');

        if (!chatbotBubble) return;

        const button = chatbotBubble.querySelector('button');

        if (button) {
            button.addEventListener('click', function() {
                // Ici vous pouvez intégrer votre solution de chatbot
                // Par exemple : Crisp, Tawk.to, Intercom, etc.

                // Pour l'instant, redirection vers le formulaire de contact
                window.location.href = duvalTheme.homeUrl + 'contact/';

                // OU ouvrir un widget de chat si vous en avez un :
                // if (window.$crisp) {
                //     window.$crisp.push(['do', 'chat:open']);
                // }
            });
        }
    }

    /**
     * Validation de formulaire basique
     */
    function initFormValidation() {
        const forms = document.querySelectorAll('form');

        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                let isValid = true;
                const requiredFields = form.querySelectorAll('[required]');

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('border-red-500');

                        // Retirer la classe d'erreur quand l'utilisateur commence à taper
                        field.addEventListener('input', function() {
                            this.classList.remove('border-red-500');
                        }, { once: true });
                    }
                });

                // Validation email
                const emailFields = form.querySelectorAll('input[type="email"]');
                emailFields.forEach(field => {
                    if (field.value && !isValidEmail(field.value)) {
                        isValid = false;
                        field.classList.add('border-red-500');

                        field.addEventListener('input', function() {
                            this.classList.remove('border-red-500');
                        }, { once: true });
                    }
                });

                if (!isValid) {
                    e.preventDefault();

                    // Scroll vers le premier champ en erreur
                    const firstError = form.querySelector('.border-red-500');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstError.focus();
                    }
                }
            });
        });
    }

    /**
     * Helper - Validation email
     */
    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    /**
     * Mettre en surbrillance le lien actif dans la navigation
     */
    function initActiveNavLinks() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('nav a');

        navLinks.forEach(link => {
            const linkPath = new URL(link.href).pathname;

            if (linkPath === currentPath) {
                link.classList.add('text-blue-400');
                link.parentElement?.classList.add('active');
            }
        });
    }

    /**
     * Effet parallax subtil sur le hero (optionnel)
     */
    function initParallax() {
        const heroSection = document.querySelector('section[class*="hero"]');

        if (!heroSection) return;

        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxElements = heroSection.querySelectorAll('[data-parallax]');

            parallaxElements.forEach(el => {
                const speed = el.dataset.parallax || 0.5;
                const yPos = -(scrolled * speed);
                el.style.transform = `translateY(${yPos}px)`;
            });
        });
    }

    /**
     * Détecter le scroll et ajouter une classe au header (optionnel)
     */
    function initScrollHeader() {
        let lastScroll = 0;
        const header = document.querySelector('nav.floating-nav');

        if (!header) return;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        });
    }

    /**
     * Compteur animé pour les statistiques (optionnel)
     */
    function initCounterAnimation() {
        const counters = document.querySelectorAll('[data-count]');

        if (counters.length === 0) return;

        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.dataset.count);
                    const duration = 2000; // 2 secondes
                    const increment = target / (duration / 16); // 60 FPS
                    let current = 0;

                    const updateCounter = () => {
                        current += increment;
                        if (current < target) {
                            counter.textContent = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    };

                    updateCounter();
                    observer.unobserve(counter);
                }
            });
        }, observerOptions);

        counters.forEach(counter => observer.observe(counter));
    }

    /**
     * Lancer l'initialisation quand le DOM est prêt
     */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Exposer certaines fonctions globalement si nécessaire
    window.duvalThemeJS = {
        init: init,
        initParallax: initParallax,
        initCounterAnimation: initCounterAnimation
    };

})();

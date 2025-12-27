<?php
/**
 * Footer Flottant et Arrondi
 *
 * @package Duval_Theme
 */

$contact = duval_get_contact_info();
?>

</main><!-- Fin du contenu principal -->

<!--
═══════════════════════════════════════════════════════════
FOOTER FLOTTANT - Carte arrondie qui ne touche pas les bords
Design glassmorphism ultra-moderne
═══════════════════════════════════════════════════════════
-->
<footer class="relative mt-32 mb-8 px-4 lg:px-8">
    <div class="container mx-auto max-w-7xl">

        <!-- Carte footer flottante -->
        <div class="relative rounded-3xl backdrop-blur-2xl bg-slate-800/40 border border-slate-700/50 shadow-2xl overflow-hidden glass-effect">

            <!-- Effet de lueur en arrière-plan -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-transparent to-purple-500/5 pointer-events-none"></div>

            <!-- Contenu du footer -->
            <div class="relative z-10 px-8 py-12 lg:px-16 lg:py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                    <!-- Colonne 1 : À propos -->
                    <div class="space-y-6">
                        <div class="logo-footer">
                            <img src="<?php echo esc_url($contact['logo']); ?>"
                                 alt="<?php echo esc_attr($contact['company_name']); ?>"
                                 class="h-16 w-auto object-contain">
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Expert en couverture, zinguerie et rénovation de toiture dans l'Eure.
                            Votre artisan de confiance depuis plus de 15 ans.
                        </p>
                        <!-- Réseaux sociaux (si applicable) -->
                        <div class="flex items-center gap-4">
                            <a href="#" class="group flex items-center justify-center w-10 h-10 rounded-xl bg-slate-700/50 text-slate-400 hover:text-white hover:bg-blue-500 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="group flex items-center justify-center w-10 h-10 rounded-xl bg-slate-700/50 text-slate-400 hover:text-white hover:bg-blue-400 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Colonne 2 : Services -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-bold text-white uppercase tracking-wider">Services</h3>
                        <ul class="space-y-3 text-sm">
                            <li>
                                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2 group">
                                    <span class="w-1 h-1 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Couverture
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2 group">
                                    <span class="w-1 h-1 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Zinguerie
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2 group">
                                    <span class="w-1 h-1 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Pose Velux
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2 group">
                                    <span class="w-1 h-1 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Rénovation
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Colonne 3 : Contact -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-bold text-white uppercase tracking-wider">Contact</h3>
                        <ul class="space-y-4 text-sm">
                            <li class="flex items-start gap-3 text-slate-400">
                                <svg class="w-5 h-5 mt-0.5 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span><?php echo esc_html($contact['address']); ?><br><?php echo esc_html($contact['city']); ?></span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                                <a href="tel:<?php echo esc_attr($contact['phone_link']); ?>" class="text-slate-400 hover:text-blue-400 transition-colors font-medium">
                                    <?php echo esc_html($contact['phone']); ?>
                                </a>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <a href="mailto:<?php echo esc_attr($contact['email']); ?>" class="text-slate-400 hover:text-blue-400 transition-colors break-all">
                                    <?php echo esc_html($contact['email']); ?>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Colonne 4 : Horaires / CTA -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-bold text-white uppercase tracking-wider">Horaires</h3>
                        <ul class="space-y-2 text-sm text-slate-400">
                            <li class="flex justify-between">
                                <span>Lundi - Vendredi</span>
                                <span class="font-medium text-slate-300">8h - 18h</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Samedi</span>
                                <span class="font-medium text-slate-300">9h - 12h</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Dimanche</span>
                                <span class="font-medium text-red-400">Fermé</span>
                            </li>
                        </ul>

                        <div class="pt-4">
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                               class="inline-flex items-center justify-center gap-2 w-full px-6 py-3 rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold text-sm transition-all shadow-lg hover:shadow-blue-500/50">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Devis Gratuit
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Séparateur -->
                <div class="mt-12 mb-8 h-px bg-gradient-to-r from-transparent via-slate-700/50 to-transparent"></div>

                <!-- Copyright et mentions légales -->
                <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-slate-500">
                    <p>
                        &copy; <?php echo date('Y'); ?> <span class="text-slate-400 font-medium"><?php echo esc_html($contact['company_name']); ?></span>.
                        Tous droits réservés.
                    </p>
                    <div class="flex items-center gap-6">
                        <a href="<?php echo esc_url(home_url('/mentions-legales/')); ?>" class="hover:text-blue-400 transition-colors">
                            Mentions Légales
                        </a>
                        <a href="<?php echo esc_url(home_url('/politique-de-confidentialite/')); ?>" class="hover:text-blue-400 transition-colors">
                            Confidentialité
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Scripts JavaScript -->
<script>
// Menu mobile toggle
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        });

        // Fermer le menu quand on clique sur un lien
        const menuLinks = mobileMenu.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            });
        });
    }

    // Smooth scroll pour les ancres
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '#!') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // Animation au scroll (fade in)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
});
</script>

<?php wp_footer(); ?>
</body>
</html>

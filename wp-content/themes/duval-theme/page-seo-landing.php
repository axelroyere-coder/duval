<?php
/**
 * Template Name: SEO Landing (Ville)
 *
 * Template pour les pages locales de référencement
 * Utilisation : Créer une page WordPress et sélectionner ce template
 * Variables personnalisées recommandées :
 * - ville: Nom de la ville (ex: "Évreux")
 * - code_postal: Code postal (ex: "27000")
 *
 * @package Duval_Theme
 */

get_header();
$contact = duval_get_contact_info();

// Récupérer les champs personnalisés (à configurer dans l'admin WordPress)
$ville = get_post_meta(get_the_ID(), 'ville', true) ?: 'votre ville';
$code_postal = get_post_meta(get_the_ID(), 'code_postal', true) ?: '';
?>

<!--
═══════════════════════════════════════════════════════════
HERO LOCAL - SEO Optimisé pour la ville
═══════════════════════════════════════════════════════════
-->
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 to-slate-900">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(#3b82f6 1px, transparent 1px), linear-gradient(90deg, #3b82f6 1px, transparent 1px); background-size: 50px 50px;"></div>
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 lg:px-12 text-center">

        <!-- Badge géolocalisé -->
        <div class="inline-flex items-center gap-2 px-6 py-2 mb-8 rounded-full backdrop-blur-xl bg-slate-800/50 border border-slate-700/50 text-sm font-medium text-slate-300 shadow-lg glass-effect">
            <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Intervention à <span class="text-white font-bold"><?php echo esc_html($ville); ?></span>
        </div>

        <!-- Titre H1 optimisé SEO -->
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight">
            Couvreur à <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent"><?php echo esc_html($ville); ?></span>
            <?php if ($code_postal): ?>
            <span class="block text-3xl md:text-5xl mt-2 text-slate-400"><?php echo esc_html($code_postal); ?></span>
            <?php endif; ?>
        </h1>

        <!-- Description -->
        <p class="max-w-3xl mx-auto text-xl md:text-2xl text-slate-400 mb-12 leading-relaxed">
            Expert en couverture, zinguerie et rénovation de toiture à <?php echo esc_html($ville); ?>.
            <span class="text-slate-300 font-medium">Devis gratuit</span> et intervention rapide dans toute la région.
        </p>

        <!-- CTA -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>"
               class="group px-10 py-5 rounded-2xl bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold text-lg shadow-2xl hover:shadow-blue-500/50 transition-all glow-effect">
                <span class="flex items-center gap-2">
                    Devis Gratuit à <?php echo esc_html($ville); ?>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </span>
            </a>

            <a href="tel:<?php echo esc_attr($contact['phone_link']); ?>"
               class="px-10 py-5 rounded-2xl backdrop-blur-xl bg-slate-800/50 border border-slate-700/50 text-white font-bold text-lg hover:bg-slate-800/70 transition-all shadow-lg">
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    <?php echo esc_html($contact['phone']); ?>
                </span>
            </a>
        </div>

    </div>
</section>

<!--
═══════════════════════════════════════════════════════════
SERVICES LOCAUX - Cards
═══════════════════════════════════════════════════════════
-->
<section class="py-32 px-6 lg:px-12 bg-slate-900">
    <div class="container mx-auto max-w-7xl">

        <!-- Titre section -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                Nos services à <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent"><?php echo esc_html($ville); ?></span>
            </h2>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                Artisan couvreur professionnel intervenant rapidement à <?php echo esc_html($ville); ?> et ses environs.
            </p>
        </div>

        <!-- Grille services -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Service 1 -->
            <div class="group relative rounded-2xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 p-8 hover:bg-slate-800/60 hover:border-blue-500/50 transition-all shadow-lg hover:shadow-blue-500/20">
                <div class="inline-flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-blue-500/20 text-blue-400 group-hover:bg-blue-500/30 transition-all">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-black text-white mb-3">Couverture</h3>
                <p class="text-slate-400 mb-4 leading-relaxed">
                    Pose et rénovation de toiture à <?php echo esc_html($ville); ?>. Tous matériaux.
                </p>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="inline-flex items-center gap-2 text-blue-400 font-medium group-hover:gap-3 transition-all">
                    En savoir plus
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>

            <!-- Service 2 -->
            <div class="group relative rounded-2xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 p-8 hover:bg-slate-800/60 hover:border-purple-500/50 transition-all shadow-lg hover:shadow-purple-500/20">
                <div class="inline-flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-purple-500/20 text-purple-400 group-hover:bg-purple-500/30 transition-all">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-black text-white mb-3">Zinguerie</h3>
                <p class="text-slate-400 mb-4 leading-relaxed">
                    Gouttières, chéneaux et évacuation des eaux pluviales.
                </p>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="inline-flex items-center gap-2 text-purple-400 font-medium group-hover:gap-3 transition-all">
                    En savoir plus
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>

            <!-- Service 3 -->
            <div class="group relative rounded-2xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 p-8 hover:bg-slate-800/60 hover:border-cyan-500/50 transition-all shadow-lg hover:shadow-cyan-500/20">
                <div class="inline-flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-cyan-500/20 text-cyan-400 group-hover:bg-cyan-500/30 transition-all">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-black text-white mb-3">Pose Velux</h3>
                <p class="text-slate-400 mb-4 leading-relaxed">
                    Installation de fenêtres de toit pour plus de lumière.
                </p>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="inline-flex items-center gap-2 text-cyan-400 font-medium group-hover:gap-3 transition-all">
                    En savoir plus
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>

            <!-- Service 4 -->
            <div class="group relative rounded-2xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 p-8 hover:bg-slate-800/60 hover:border-emerald-500/50 transition-all shadow-lg hover:shadow-emerald-500/20">
                <div class="inline-flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-emerald-500/20 text-emerald-400 group-hover:bg-emerald-500/30 transition-all">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-black text-white mb-3">Rénovation</h3>
                <p class="text-slate-400 mb-4 leading-relaxed">
                    Diagnostic et rénovation complète de votre toiture.
                </p>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="inline-flex items-center gap-2 text-emerald-400 font-medium group-hover:gap-3 transition-all">
                    En savoir plus
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>

        </div>

    </div>
</section>

<!--
═══════════════════════════════════════════════════════════
POURQUOI NOUS CHOISIR - Local
═══════════════════════════════════════════════════════════
-->
<section class="py-32 px-6 lg:px-12 bg-gradient-to-br from-slate-950 to-slate-900 relative overflow-hidden">

    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #3b82f6 1px, transparent 1px); background-size: 30px 30px;"></div>
    </div>

    <div class="relative z-10 container mx-auto max-w-7xl">

        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                Pourquoi choisir Duval Couverture à <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent"><?php echo esc_html($ville); ?> ?</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="text-center p-8 rounded-2xl backdrop-blur-xl bg-slate-800/30 border border-slate-700/50">
                <div class="inline-flex items-center justify-center w-16 h-16 mb-6 rounded-2xl bg-blue-500/20 text-blue-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Intervention Rapide</h3>
                <p class="text-slate-400 leading-relaxed">
                    Basé à Damville, nous intervenons rapidement à <?php echo esc_html($ville); ?> et dans toute la région.
                </p>
            </div>

            <div class="text-center p-8 rounded-2xl backdrop-blur-xl bg-slate-800/30 border border-slate-700/50">
                <div class="inline-flex items-center justify-center w-16 h-16 mb-6 rounded-2xl bg-purple-500/20 text-purple-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Qualité Garantie</h3>
                <p class="text-slate-400 leading-relaxed">
                    Plus de 15 ans d'expérience. Travail soigné avec matériaux de qualité professionnelle.
                </p>
            </div>

            <div class="text-center p-8 rounded-2xl backdrop-blur-xl bg-slate-800/30 border border-slate-700/50">
                <div class="inline-flex items-center justify-center w-16 h-16 mb-6 rounded-2xl bg-cyan-500/20 text-cyan-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Devis Gratuit</h3>
                <p class="text-slate-400 leading-relaxed">
                    Demandez votre devis gratuit et sans engagement. Réponse sous 24h maximum.
                </p>
            </div>

        </div>

    </div>
</section>

<!--
═══════════════════════════════════════════════════════════
CTA FINAL - Local
═══════════════════════════════════════════════════════════
-->
<section class="py-32 px-6 lg:px-12 bg-slate-900">
    <div class="container mx-auto max-w-5xl">
        <div class="relative rounded-3xl overflow-hidden backdrop-blur-2xl bg-slate-800/50 border border-slate-700/50 shadow-2xl p-12 lg:p-20 text-center">

            <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(#3b82f6 1px, transparent 1px), linear-gradient(90deg, #3b82f6 1px, transparent 1px); background-size: 30px 30px;"></div>

            <div class="relative z-10">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-6">
                    Un projet de toiture<br>
                    <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">à <?php echo esc_html($ville); ?> ?</span>
                </h2>
                <p class="text-xl text-slate-400 mb-12 max-w-2xl mx-auto">
                    Contactez-nous dès maintenant pour un devis gratuit et personnalisé. Notre équipe d'experts est à votre service.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                       class="inline-flex items-center gap-2 px-10 py-5 rounded-2xl bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold text-lg shadow-2xl hover:shadow-blue-500/50 transition-all glow-effect">
                        Demander un devis
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>

                    <a href="tel:<?php echo esc_attr($contact['phone_link']); ?>"
                       class="inline-flex items-center gap-2 px-10 py-5 rounded-2xl backdrop-blur-xl bg-slate-800/50 border-2 border-slate-700/50 text-white font-bold text-lg hover:bg-slate-800/70 hover:border-blue-500/50 transition-all">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <?php echo esc_html($contact['phone']); ?>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>

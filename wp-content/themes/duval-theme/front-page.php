<?php
/**
 * Page d'accueil - Design ultra-moderne Tech/IA
 *
 * @package Duval_Theme
 */

get_header();
$contact = duval_get_contact_info();
?>

<!--
═══════════════════════════════════════════════════════════
HERO SECTION - Immersive et minimaliste
═══════════════════════════════════════════════════════════
-->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">

    <!-- Background avec effet de grille futuriste -->
    <div class="absolute inset-0 bg-slate-900">
        <!-- Grille de lignes tech -->
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(#3b82f6 1px, transparent 1px), linear-gradient(90deg, #3b82f6 1px, transparent 1px); background-size: 50px 50px;"></div>

        <!-- Gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-transparent to-purple-500/10"></div>

        <!-- Effet de halo lumineux -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
    </div>

    <!-- Contenu hero -->
    <div class="relative z-10 container mx-auto px-6 lg:px-12 text-center">

        <!-- Badge "Tech Artisan" -->
        <div class="inline-flex items-center gap-2 px-6 py-2 mb-8 rounded-full backdrop-blur-xl bg-slate-800/50 border border-slate-700/50 text-sm font-medium text-slate-300 shadow-lg glass-effect animate-on-scroll">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
            </span>
            Votre artisan couvreur nouvelle génération
        </div>

        <!-- Titre principal -->
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-6 leading-tight animate-on-scroll">
            <span class="block">L'Excellence en</span>
            <span class="block bg-gradient-to-r from-blue-400 via-blue-500 to-purple-500 bg-clip-text text-transparent">
                Couverture
            </span>
        </h1>

        <!-- Sous-titre -->
        <p class="max-w-2xl mx-auto text-xl md:text-2xl text-slate-400 mb-12 leading-relaxed animate-on-scroll">
            Expertise artisanale rencontrée avec innovation technique.
            <span class="text-slate-300 font-medium">15 ans d'expérience</span> au service de votre toiture.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16 animate-on-scroll">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>"
               class="group relative px-8 py-4 rounded-2xl bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold text-lg shadow-2xl hover:shadow-blue-500/50 transition-all glow-effect overflow-hidden">
                <span class="relative z-10 flex items-center gap-2">
                    Devis Gratuit
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </span>
            </a>

            <a href="tel:<?php echo esc_attr($contact['phone_link']); ?>"
               class="group px-8 py-4 rounded-2xl backdrop-blur-xl bg-slate-800/50 border border-slate-700/50 text-white font-bold text-lg hover:bg-slate-800/70 transition-all shadow-lg">
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    <?php echo esc_html($contact['phone']); ?>
                </span>
            </a>
        </div>

        <!-- Stats - Glassmorphism cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto animate-on-scroll">
            <div class="px-6 py-8 rounded-2xl backdrop-blur-xl bg-slate-800/30 border border-slate-700/50 shadow-lg glass-effect">
                <div class="text-4xl font-black text-blue-400 mb-2">15+</div>
                <div class="text-slate-300 font-medium">Années d'expérience</div>
            </div>
            <div class="px-6 py-8 rounded-2xl backdrop-blur-xl bg-slate-800/30 border border-slate-700/50 shadow-lg glass-effect">
                <div class="text-4xl font-black text-blue-400 mb-2">500+</div>
                <div class="text-slate-300 font-medium">Projets réalisés</div>
            </div>
            <div class="px-6 py-8 rounded-2xl backdrop-blur-xl bg-slate-800/30 border border-slate-700/50 shadow-lg glass-effect">
                <div class="text-4xl font-black text-blue-400 mb-2">100%</div>
                <div class="text-slate-300 font-medium">Clients satisfaits</div>
            </div>
        </div>

    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>

</section>

<!--
═══════════════════════════════════════════════════════════
SERVICES - Bento Box Grid (Asymétrique & Moderne)
═══════════════════════════════════════════════════════════
-->
<section class="py-32 px-6 lg:px-12 bg-slate-900 relative overflow-hidden">

    <!-- Background effect -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #3b82f6 1px, transparent 1px); background-size: 30px 30px;"></div>
    </div>

    <div class="relative z-10 container mx-auto max-w-7xl">

        <!-- Section header -->
        <div class="text-center mb-20">
            <span class="inline-block px-6 py-2 mb-6 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-sm font-bold uppercase tracking-wider">
                Nos Services
            </span>
            <h2 class="text-4xl md:text-6xl font-black text-white mb-6">
                Une expertise <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">complète</span>
            </h2>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                De la couverture traditionnelle aux installations modernes, nous maîtrisons tous les aspects de votre toiture.
            </p>
        </div>

        <!-- Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 animate-on-scroll">

            <!-- Service 1 - Large card (span 2 colonnes en desktop) -->
            <div class="lg:col-span-2 group relative rounded-3xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 shadow-2xl hover:shadow-blue-500/20 transition-all duration-500">
                <!-- [IMAGE A CHANGER] -->
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-transparent group-hover:from-blue-500/30 transition-all duration-500"></div>
                <img src="https://images.unsplash.com/photo-1632778149955-e80f8ceca2e8?w=800&h=600&fit=crop"
                     alt="Couverture toiture"
                     class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-all duration-500">

                <div class="relative z-10 p-10 h-full flex flex-col justify-end min-h-[400px]">
                    <div class="inline-flex items-center justify-center w-16 h-16 mb-6 rounded-2xl bg-blue-500/20 backdrop-blur-xl border border-blue-500/30">
                        <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-black text-white mb-3">Couverture</h3>
                    <p class="text-slate-300 text-lg mb-6 leading-relaxed">
                        Pose, rénovation et entretien de tous types de toitures. Tuiles, ardoises, zinc, nos couvreurs maîtrisent tous les matériaux.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="inline-flex items-center gap-2 text-blue-400 font-bold group-hover:gap-4 transition-all">
                        En savoir plus
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service 2 - Regular card -->
            <div class="group relative rounded-3xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 shadow-2xl hover:shadow-purple-500/20 transition-all duration-500">
                <!-- [IMAGE A CHANGER] -->
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-transparent group-hover:from-purple-500/30 transition-all duration-500"></div>
                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600&h=600&fit=crop"
                     alt="Zinguerie"
                     class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-all duration-500">

                <div class="relative z-10 p-8 h-full flex flex-col justify-end min-h-[400px]">
                    <div class="inline-flex items-center justify-center w-14 h-14 mb-4 rounded-xl bg-purple-500/20 backdrop-blur-xl border border-purple-500/30">
                        <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-2">Zinguerie</h3>
                    <p class="text-slate-300 mb-4">
                        Gouttières, chéneaux, noues. Installation et réparation de tous systèmes d'évacuation d'eau.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="inline-flex items-center gap-2 text-purple-400 font-bold group-hover:gap-4 transition-all">
                        En savoir plus
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service 3 - Regular card -->
            <div class="group relative rounded-3xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 shadow-2xl hover:shadow-cyan-500/20 transition-all duration-500">
                <!-- [IMAGE A CHANGER] -->
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 to-transparent group-hover:from-cyan-500/30 transition-all duration-500"></div>
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&h=600&fit=crop"
                     alt="Pose Velux"
                     class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-all duration-500">

                <div class="relative z-10 p-8 h-full flex flex-col justify-end min-h-[400px]">
                    <div class="inline-flex items-center justify-center w-14 h-14 mb-4 rounded-xl bg-cyan-500/20 backdrop-blur-xl border border-cyan-500/30">
                        <svg class="w-7 h-7 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-2">Pose Velux</h3>
                    <p class="text-slate-300 mb-4">
                        Installation de fenêtres de toit pour plus de lumière naturelle dans vos combles.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="inline-flex items-center gap-2 text-cyan-400 font-bold group-hover:gap-4 transition-all">
                        En savoir plus
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service 4 - Large card (span 2 colonnes) -->
            <div class="lg:col-span-2 group relative rounded-3xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 shadow-2xl hover:shadow-emerald-500/20 transition-all duration-500">
                <!-- [IMAGE A CHANGER] -->
                <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 to-transparent group-hover:from-emerald-500/30 transition-all duration-500"></div>
                <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?w=800&h=600&fit=crop"
                     alt="Rénovation toiture"
                     class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-all duration-500">

                <div class="relative z-10 p-10 h-full flex flex-col justify-end min-h-[400px]">
                    <div class="inline-flex items-center justify-center w-16 h-16 mb-6 rounded-2xl bg-emerald-500/20 backdrop-blur-xl border border-emerald-500/30">
                        <svg class="w-8 h-8 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-black text-white mb-3">Rénovation</h3>
                    <p class="text-slate-300 text-lg mb-6 leading-relaxed">
                        Donnez une seconde vie à votre toiture. Diagnostic, réparation, et mise aux normes de votre couverture existante.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="inline-flex items-center gap-2 text-emerald-400 font-bold group-hover:gap-4 transition-all">
                        En savoir plus
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!--
═══════════════════════════════════════════════════════════
ZONE D'INTERVENTION - Glassmorphism
═══════════════════════════════════════════════════════════
-->
<section class="py-32 px-6 lg:px-12 bg-gradient-to-br from-slate-950 to-slate-900 relative overflow-hidden">

    <!-- Background decoratif -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-1/4 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl"></div>
    </div>

    <div class="relative z-10 container mx-auto max-w-6xl">

        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                Intervention dans <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">l'Eure</span>
            </h2>
            <p class="text-xl text-slate-400">
                Basé à <span class="text-slate-300 font-medium">Damville</span>, nous intervenons rapidement dans toute la région.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <?php
            $villes = ['Évreux', 'Damville', 'Verneuil-sur-Avre', 'Breteuil', 'Conches-en-Ouche', 'L\'Aigle', 'Bernay', 'Pont-Audemer'];
            foreach ($villes as $ville) :
            ?>
            <div class="px-6 py-4 rounded-xl backdrop-blur-xl bg-slate-800/30 border border-slate-700/50 text-center text-slate-300 font-medium hover:bg-slate-800/50 hover:border-blue-500/50 transition-all">
                <?php echo esc_html($ville); ?>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <p class="text-slate-400 text-lg">
                Et bien plus encore... <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="text-blue-400 hover:text-blue-300 font-medium underline">Contactez-nous</a> pour confirmer.
            </p>
        </div>

    </div>
</section>

<!--
═══════════════════════════════════════════════════════════
CTA FINAL - Devis gratuit
═══════════════════════════════════════════════════════════
-->
<section class="py-32 px-6 lg:px-12 bg-slate-900 relative overflow-hidden">

    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-transparent to-purple-500/10"></div>

    <div class="relative z-10 container mx-auto max-w-5xl">

        <div class="relative rounded-3xl overflow-hidden backdrop-blur-2xl bg-slate-800/50 border border-slate-700/50 shadow-2xl p-12 lg:p-20 text-center">

            <!-- Effet de grille de fond -->
            <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(#3b82f6 1px, transparent 1px), linear-gradient(90deg, #3b82f6 1px, transparent 1px); background-size: 30px 30px;"></div>

            <div class="relative z-10">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-6">
                    Prêt à démarrer<br>
                    <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">votre projet ?</span>
                </h2>
                <p class="text-xl text-slate-400 mb-12 max-w-2xl mx-auto">
                    Obtenez un devis gratuit et personnalisé en moins de 24h. Notre équipe d'experts est à votre écoute.
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
                        Appeler maintenant
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>

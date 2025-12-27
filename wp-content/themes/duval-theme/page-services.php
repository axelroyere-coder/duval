<?php
/**
 * Template Name: Page Services
 *
 * @package Duval_Theme
 */

get_header();
$contact = duval_get_contact_info();
?>

<!--
═══════════════════════════════════════════════════════════
HERO - Services
═══════════════════════════════════════════════════════════
-->
<section class="relative py-32 px-6 lg:px-12 overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 to-slate-900">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(#3b82f6 1px, transparent 1px), linear-gradient(90deg, #3b82f6 1px, transparent 1px); background-size: 50px 50px;"></div>
        <div class="absolute top-1/3 left-1/3 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/3 right-1/3 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 container mx-auto max-w-7xl text-center">
        <span class="inline-block px-6 py-2 mb-6 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-sm font-bold uppercase tracking-wider">
            Nos Services
        </span>
        <h1 class="text-5xl md:text-7xl font-black text-white mb-6">
            Une expertise <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">complète</span>
        </h1>
        <p class="text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed">
            De la couverture traditionnelle à la pose de fenêtres de toit, nous maîtrisons tous les aspects de votre toiture avec un savoir-faire artisanal et des techniques modernes.
        </p>
    </div>
</section>

<!--
═══════════════════════════════════════════════════════════
SERVICES DÉTAILLÉS - Grille alternée
═══════════════════════════════════════════════════════════
-->
<section class="py-32 px-6 lg:px-12 bg-slate-900 relative overflow-hidden">

    <div class="container mx-auto max-w-7xl space-y-32">

        <!-- Service 1 : Couverture -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 animate-on-scroll">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-sm font-bold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Service phare
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">Couverture</h2>
                <p class="text-xl text-slate-400 mb-8 leading-relaxed">
                    Expert en pose et rénovation de toitures, nous travaillons avec tous types de matériaux : tuiles mécaniques, tuiles plates, ardoises naturelles ou synthétiques, zinc, bac acier.
                </p>

                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Pose de toiture neuve</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Réfection complète</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Réparation de fuites</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Isolation et étanchéité</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                   class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold shadow-lg hover:shadow-blue-500/50 transition-all">
                    Demander un devis
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>

            <div class="order-1 lg:order-2 animate-on-scroll">
                <!-- [IMAGE A CHANGER] -->
                <div class="relative rounded-3xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 shadow-2xl aspect-square">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-transparent"></div>
                    <img src="https://images.unsplash.com/photo-1632778149955-e80f8ceca2e8?w=800&h=800&fit=crop"
                         alt="Couverture toiture"
                         class="w-full h-full object-cover opacity-80">
                </div>
            </div>
        </div>

        <!-- Service 2 : Zinguerie -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <!-- [IMAGE A CHANGER] -->
                <div class="relative rounded-3xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 shadow-2xl aspect-square">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-transparent"></div>
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&h=800&fit=crop"
                         alt="Zinguerie"
                         class="w-full h-full object-cover opacity-80">
                </div>
            </div>

            <div class="animate-on-scroll">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-400 text-sm font-bold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                    Expertise technique
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">Zinguerie</h2>
                <p class="text-xl text-slate-400 mb-8 leading-relaxed">
                    La zinguerie est essentielle pour la protection et l'étanchéité de votre toiture. Nous réalisons tous types de travaux de zinguerie avec précision et durabilité.
                </p>

                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-purple-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Gouttières et chéneaux</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-purple-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Noues et solins</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-purple-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Habillage de cheminées</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-purple-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Évacuation d'eaux pluviales</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                   class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-bold shadow-lg hover:shadow-purple-500/50 transition-all">
                    Demander un devis
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Service 3 : Pose Velux -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 animate-on-scroll">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-sm font-bold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    Confort & Lumière
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">Pose Velux</h2>
                <p class="text-xl text-slate-400 mb-8 leading-relaxed">
                    Apportez de la lumière naturelle à vos combles ! Installation de fenêtres de toit Velux pour transformer vos espaces sous toiture en pièces à vivre lumineuses.
                </p>

                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Installation Velux standard ou électrique</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Pose sur tous types de toiture</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Raccordement et étanchéité parfaite</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Volets roulants et stores</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                   class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-gradient-to-r from-cyan-500 to-cyan-600 hover:from-cyan-600 hover:to-cyan-700 text-white font-bold shadow-lg hover:shadow-cyan-500/50 transition-all">
                    Demander un devis
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>

            <div class="order-1 lg:order-2 animate-on-scroll">
                <!-- [IMAGE A CHANGER] -->
                <div class="relative rounded-3xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 shadow-2xl aspect-square">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 to-transparent"></div>
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&h=800&fit=crop"
                         alt="Pose Velux"
                         class="w-full h-full object-cover opacity-80">
                </div>
            </div>
        </div>

        <!-- Service 4 : Rénovation -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <!-- [IMAGE A CHANGER] -->
                <div class="relative rounded-3xl overflow-hidden backdrop-blur-xl bg-slate-800/40 border border-slate-700/50 shadow-2xl aspect-square">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 to-transparent"></div>
                    <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?w=800&h=800&fit=crop"
                         alt="Rénovation toiture"
                         class="w-full h-full object-cover opacity-80">
                </div>
            </div>

            <div class="animate-on-scroll">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-sm font-bold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                    Remise à neuf
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">Rénovation</h2>
                <p class="text-xl text-slate-400 mb-8 leading-relaxed">
                    Votre toiture mérite une seconde jeunesse. Nous réalisons un diagnostic complet et proposons des solutions adaptées pour rénover votre couverture.
                </p>

                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Diagnostic et expertise gratuite</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Remplacement de tuiles cassées</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Traitement et nettoyage</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-300">
                        <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Mise aux normes</span>
                    </li>
                </ul>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                   class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-600 hover:to-emerald-700 text-white font-bold shadow-lg hover:shadow-emerald-500/50 transition-all">
                    Demander un devis
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>

    </div>
</section>

<!--
═══════════════════════════════════════════════════════════
CTA - Urgence
═══════════════════════════════════════════════════════════
-->
<section class="py-24 px-6 lg:px-12 bg-gradient-to-br from-red-500/10 to-orange-500/10 relative overflow-hidden">
    <div class="container mx-auto max-w-5xl text-center">
        <div class="relative rounded-3xl overflow-hidden backdrop-blur-2xl bg-slate-800/50 border-2 border-red-500/30 shadow-2xl p-12 lg:p-16">
            <div class="absolute inset-0 bg-gradient-to-br from-red-500/10 to-transparent"></div>

            <div class="relative z-10">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-red-500/20 border border-red-500/30 text-red-400 text-sm font-bold">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                    </span>
                    Urgence 24/7
                </div>

                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Une urgence toiture ?
                </h2>
                <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto">
                    Fuite, tuiles envolées, dégâts suite à intempéries ? Nous intervenons rapidement pour sécuriser votre habitation.
                </p>

                <a href="tel:<?php echo esc_attr($contact['phone_link']); ?>"
                   class="inline-flex items-center gap-2 px-10 py-5 rounded-2xl bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-bold text-lg shadow-2xl hover:shadow-red-500/50 transition-all glow-effect">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    Appeler <?php echo esc_html($contact['phone']); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

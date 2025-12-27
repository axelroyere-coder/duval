<?php
/**
 * Template Name: Page Contact
 *
 * @package Duval_Theme
 */

get_header();
$contact = duval_get_contact_info();
?>

<!--
═══════════════════════════════════════════════════════════
HERO - Contact
═══════════════════════════════════════════════════════════
-->
<section class="relative py-32 px-6 lg:px-12 overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 to-slate-900">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(#3b82f6 1px, transparent 1px), linear-gradient(90deg, #3b82f6 1px, transparent 1px); background-size: 50px 50px;"></div>
        <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 container mx-auto max-w-7xl">

        <!-- Titre -->
        <div class="text-center mb-20">
            <span class="inline-block px-6 py-2 mb-6 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-sm font-bold uppercase tracking-wider">
                Contactez-nous
            </span>
            <h1 class="text-5xl md:text-7xl font-black text-white mb-6">
                Discutons de <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">votre projet</span>
            </h1>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                Notre équipe d'experts est à votre écoute pour répondre à toutes vos questions et établir un devis gratuit.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">

            <!--
            ═══════════════════════════════════════════════════════════
            FORMULAIRE - Glassmorphism (3 colonnes)
            ═══════════════════════════════════════════════════════════
            -->
            <div class="lg:col-span-3">
                <div class="relative rounded-3xl overflow-hidden backdrop-blur-2xl bg-slate-800/40 border border-slate-700/50 shadow-2xl p-8 lg:p-12 glass-effect">

                    <!-- Effet de grille -->
                    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle, #3b82f6 1px, transparent 1px); background-size: 30px 30px;"></div>

                    <div class="relative z-10">
                        <h2 class="text-3xl font-black text-white mb-8">Demande de devis gratuit</h2>

                        <!-- Formulaire avec action FormSubmit -->
                        <form action="https://formsubmit.co/<?php echo esc_attr($contact['email']); ?>"
                              method="POST"
                              class="space-y-6">

                            <!-- FormSubmit configuration -->
                            <input type="hidden" name="_subject" value="Nouveau message depuis Duval Couverture">
                            <input type="hidden" name="_captcha" value="false">
                            <input type="hidden" name="_template" value="table">
                            <input type="hidden" name="_next" value="<?php echo esc_url(home_url('/merci/')); ?>">

                            <!-- Nom -->
                            <div class="form-group">
                                <label for="nom" class="block text-sm font-bold text-slate-300 mb-2 uppercase tracking-wider">
                                    Nom complet *
                                </label>
                                <input type="text"
                                       id="nom"
                                       name="nom"
                                       required
                                       class="w-full px-5 py-4 rounded-xl bg-slate-900/50 border border-slate-700/50 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all backdrop-blur-xl"
                                       placeholder="Jean Dupont">
                            </div>

                            <!-- Email & Téléphone -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label for="email" class="block text-sm font-bold text-slate-300 mb-2 uppercase tracking-wider">
                                        Email *
                                    </label>
                                    <input type="email"
                                           id="email"
                                           name="email"
                                           required
                                           class="w-full px-5 py-4 rounded-xl bg-slate-900/50 border border-slate-700/50 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all backdrop-blur-xl"
                                           placeholder="jean@exemple.fr">
                                </div>

                                <div class="form-group">
                                    <label for="telephone" class="block text-sm font-bold text-slate-300 mb-2 uppercase tracking-wider">
                                        Téléphone *
                                    </label>
                                    <input type="tel"
                                           id="telephone"
                                           name="telephone"
                                           required
                                           class="w-full px-5 py-4 rounded-xl bg-slate-900/50 border border-slate-700/50 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all backdrop-blur-xl"
                                           placeholder="06 12 34 56 78">
                                </div>
                            </div>

                            <!-- Ville -->
                            <div class="form-group">
                                <label for="ville" class="block text-sm font-bold text-slate-300 mb-2 uppercase tracking-wider">
                                    Ville
                                </label>
                                <input type="text"
                                       id="ville"
                                       name="ville"
                                       class="w-full px-5 py-4 rounded-xl bg-slate-900/50 border border-slate-700/50 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all backdrop-blur-xl"
                                       placeholder="Damville">
                            </div>

                            <!-- Type de prestation -->
                            <div class="form-group">
                                <label for="service" class="block text-sm font-bold text-slate-300 mb-2 uppercase tracking-wider">
                                    Type de prestation
                                </label>
                                <select id="service"
                                        name="service"
                                        class="w-full px-5 py-4 rounded-xl bg-slate-900/50 border border-slate-700/50 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all backdrop-blur-xl">
                                    <option value="">-- Sélectionnez --</option>
                                    <option value="Couverture">Couverture</option>
                                    <option value="Zinguerie">Zinguerie</option>
                                    <option value="Pose Velux">Pose Velux</option>
                                    <option value="Rénovation">Rénovation</option>
                                    <option value="Urgence">Urgence / Dépannage</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>

                            <!-- Message -->
                            <div class="form-group">
                                <label for="message" class="block text-sm font-bold text-slate-300 mb-2 uppercase tracking-wider">
                                    Votre message *
                                </label>
                                <textarea id="message"
                                          name="message"
                                          rows="6"
                                          required
                                          class="w-full px-5 py-4 rounded-xl bg-slate-900/50 border border-slate-700/50 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all backdrop-blur-xl resize-none"
                                          placeholder="Décrivez votre projet en quelques lignes..."></textarea>
                            </div>

                            <!-- Checkbox RGPD -->
                            <div class="flex items-start gap-3">
                                <input type="checkbox"
                                       id="rgpd"
                                       name="rgpd"
                                       required
                                       class="mt-1 w-5 h-5 rounded border-slate-700 bg-slate-900/50 text-blue-500 focus:ring-2 focus:ring-blue-500">
                                <label for="rgpd" class="text-sm text-slate-400">
                                    J'accepte que mes données soient utilisées pour traiter ma demande de contact. <a href="<?php echo esc_url(home_url('/politique-de-confidentialite/')); ?>" class="text-blue-400 hover:text-blue-300 underline">Politique de confidentialité</a>
                                </label>
                            </div>

                            <!-- Bouton submit -->
                            <button type="submit"
                                    class="w-full group relative px-8 py-5 rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold text-lg shadow-2xl hover:shadow-blue-500/50 transition-all glow-effect overflow-hidden">
                                <span class="relative z-10 flex items-center justify-center gap-2">
                                    Envoyer ma demande
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </span>
                            </button>

                        </form>
                    </div>

                </div>
            </div>

            <!--
            ═══════════════════════════════════════════════════════════
            INFOS DE CONTACT - Sidebar (2 colonnes)
            ═══════════════════════════════════════════════════════════
            -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Téléphone -->
                <div class="relative rounded-3xl overflow-hidden backdrop-blur-2xl bg-gradient-to-br from-blue-500/20 to-blue-600/10 border border-blue-500/30 shadow-2xl p-8 glass-effect group hover:from-blue-500/30 hover:to-blue-600/20 transition-all">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-transparent"></div>
                    <div class="relative z-10">
                        <div class="inline-flex items-center justify-center w-14 h-14 mb-4 rounded-xl bg-blue-500/30 backdrop-blur-xl border border-blue-400/30">
                            <svg class="w-7 h-7 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-white mb-2">Appelez-nous</h3>
                        <p class="text-slate-300 mb-4">Du lundi au samedi</p>
                        <a href="tel:<?php echo esc_attr($contact['phone_link']); ?>" class="text-2xl font-bold text-blue-400 hover:text-blue-300 transition-colors">
                            <?php echo esc_html($contact['phone']); ?>
                        </a>
                    </div>
                </div>

                <!-- Email -->
                <div class="relative rounded-3xl overflow-hidden backdrop-blur-2xl bg-gradient-to-br from-purple-500/20 to-purple-600/10 border border-purple-500/30 shadow-2xl p-8 glass-effect group hover:from-purple-500/30 hover:to-purple-600/20 transition-all">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-transparent"></div>
                    <div class="relative z-10">
                        <div class="inline-flex items-center justify-center w-14 h-14 mb-4 rounded-xl bg-purple-500/30 backdrop-blur-xl border border-purple-400/30">
                            <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-white mb-2">Écrivez-nous</h3>
                        <p class="text-slate-300 mb-4">Réponse sous 24h</p>
                        <a href="mailto:<?php echo esc_attr($contact['email']); ?>" class="text-lg font-bold text-purple-400 hover:text-purple-300 transition-colors break-all">
                            <?php echo esc_html($contact['email']); ?>
                        </a>
                    </div>
                </div>

                <!-- Adresse -->
                <div class="relative rounded-3xl overflow-hidden backdrop-blur-2xl bg-gradient-to-br from-cyan-500/20 to-cyan-600/10 border border-cyan-500/30 shadow-2xl p-8 glass-effect group hover:from-cyan-500/30 hover:to-cyan-600/20 transition-all">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-transparent"></div>
                    <div class="relative z-10">
                        <div class="inline-flex items-center justify-center w-14 h-14 mb-4 rounded-xl bg-cyan-500/30 backdrop-blur-xl border border-cyan-400/30">
                            <svg class="w-7 h-7 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-white mb-2">Visitez-nous</h3>
                        <p class="text-slate-300 text-lg leading-relaxed">
                            <?php echo esc_html($contact['address']); ?><br>
                            <?php echo esc_html($contact['city']); ?>
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!--
═══════════════════════════════════════════════════════════
CARTE / LOCALISATION (Optionnel)
═══════════════════════════════════════════════════════════
-->
<section class="py-20 px-6 lg:px-12 bg-slate-900">
    <div class="container mx-auto max-w-7xl">
        <div class="relative rounded-3xl overflow-hidden shadow-2xl h-96 bg-slate-800/50 border border-slate-700/50">
            <!-- Placeholder pour Google Maps ou autre -->
            <div class="absolute inset-0 flex items-center justify-center text-slate-500">
                <div class="text-center">
                    <svg class="w-16 h-16 mx-auto mb-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                    </svg>
                    <p class="text-xl font-medium">Insérez ici votre Google Maps iframe</p>
                </div>
            </div>
            <!-- [A REMPLACER PAR VOTRE IFRAME GOOGLE MAPS] -->
            <!-- <iframe src="..." width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
        </div>
    </div>
</section>

<?php get_footer(); ?>

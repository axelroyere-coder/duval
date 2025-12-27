<?php
/**
 * Header avec Navigation Verticale Flottante
 *
 * @package Duval_Theme
 */

$contact = duval_get_contact_info();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0f172a">
    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased'); ?>>
<?php wp_body_open(); ?>

<!--
═══════════════════════════════════════════════════════════
NAVIGATION VERTICALE FLOTTANTE À DROITE
Design ultra-moderne avec glassmorphism
═══════════════════════════════════════════════════════════
-->
<nav class="floating-nav fixed right-5 top-5 z-50 hidden lg:flex flex-col items-center gap-8 px-4 py-8 rounded-3xl backdrop-blur-2xl bg-slate-800/30 border border-slate-700/50 shadow-2xl glass-effect" style="width: 90px;">

    <!-- Logo -->
    <div class="logo-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="block transition-transform hover:scale-110 duration-300" title="<?php echo esc_attr($contact['company_name']); ?>">
            <img src="<?php echo esc_url($contact['logo']); ?>"
                 alt="<?php echo esc_attr($contact['company_name']); ?>"
                 class="w-14 h-14 object-contain drop-shadow-lg">
        </a>
    </div>

    <!-- Séparateur -->
    <div class="w-12 h-px bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>

    <!-- Menu de navigation -->
    <ul class="nav-menu flex flex-col items-center gap-6 text-sm font-medium">
        <li>
            <a href="<?php echo esc_url(home_url('/')); ?>"
               class="group relative flex flex-col items-center gap-2 text-slate-400 hover:text-blue-400 transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span class="text-xs uppercase tracking-wider">Accueil</span>
                <span class="absolute -left-2 top-1/2 -translate-y-1/2 w-1 h-8 bg-blue-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
            </a>
        </li>

        <li>
            <a href="<?php echo esc_url(home_url('/services/')); ?>"
               class="group relative flex flex-col items-center gap-2 text-slate-400 hover:text-blue-400 transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span class="text-xs uppercase tracking-wider">Services</span>
                <span class="absolute -left-2 top-1/2 -translate-y-1/2 w-1 h-8 bg-blue-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
            </a>
        </li>

        <li>
            <a href="<?php echo esc_url(home_url('/a-propos/')); ?>"
               class="group relative flex flex-col items-center gap-2 text-slate-400 hover:text-blue-400 transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-xs uppercase tracking-wider">À Propos</span>
                <span class="absolute -left-2 top-1/2 -translate-y-1/2 w-1 h-8 bg-blue-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
            </a>
        </li>

        <li>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>"
               class="group relative flex flex-col items-center gap-2 text-slate-400 hover:text-blue-400 transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span class="text-xs uppercase tracking-wider">Contact</span>
                <span class="absolute -left-2 top-1/2 -translate-y-1/2 w-1 h-8 bg-blue-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
            </a>
        </li>
    </ul>

    <!-- Séparateur -->
    <div class="w-12 h-px bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>

    <!-- Bouton Devis - En bas -->
    <div class="cta-button">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
           class="group flex flex-col items-center gap-2 px-4 py-3 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold transition-all duration-300 shadow-lg hover:shadow-blue-500/50 glow-effect">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <span class="text-xs uppercase tracking-wider">Devis</span>
        </a>
    </div>
</nav>

<!--
═══════════════════════════════════════════════════════════
NAVIGATION MOBILE - Header classique en haut
═══════════════════════════════════════════════════════════
-->
<nav class="mobile-nav lg:hidden fixed top-0 left-0 right-0 z-50 backdrop-blur-2xl bg-slate-800/30 border-b border-slate-700/50 glass-effect">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
                <img src="<?php echo esc_url($contact['logo']); ?>"
                     alt="<?php echo esc_attr($contact['company_name']); ?>"
                     class="h-12 w-auto object-contain">
            </a>

            <!-- Hamburger menu -->
            <button id="mobile-menu-toggle" class="text-slate-300 hover:text-white focus:outline-none" aria-label="Toggle menu">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Menu mobile overlay -->
    <div id="mobile-menu" class="hidden fixed inset-0 top-20 bg-slate-900/95 backdrop-blur-xl z-40">
        <ul class="flex flex-col items-center justify-center h-full gap-8 text-lg font-medium">
            <li>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-slate-300 hover:text-blue-400 transition-colors">Accueil</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="text-slate-300 hover:text-blue-400 transition-colors">Services</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="text-slate-300 hover:text-blue-400 transition-colors">À Propos</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="text-slate-300 hover:text-blue-400 transition-colors">Contact</a>
            </li>
            <li class="mt-8">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                   class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 text-white font-bold shadow-lg hover:shadow-blue-500/50 transition-all glow-effect">
                    Devis Gratuit
                </a>
            </li>
        </ul>
    </div>
</nav>

<!--
═══════════════════════════════════════════════════════════
BOUTON D'APPEL STICKY (Mobile uniquement)
═══════════════════════════════════════════════════════════
-->
<a href="tel:<?php echo esc_attr($contact['phone_link']); ?>"
   class="lg:hidden fixed bottom-6 left-1/2 -translate-x-1/2 z-50 flex items-center gap-3 px-6 py-4 rounded-full bg-gradient-to-r from-green-500 to-green-600 text-white font-bold shadow-2xl hover:shadow-green-500/50 transition-all glow-effect">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
    </svg>
    <span><?php echo esc_html($contact['phone']); ?></span>
</a>

<!--
═══════════════════════════════════════════════════════════
CHATBOT - Bulle minimaliste en bas à gauche
═══════════════════════════════════════════════════════════
-->
<div id="chatbot-bubble" class="hidden lg:block fixed bottom-8 left-8 z-40">
    <button class="group relative flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-purple-600 text-white shadow-2xl hover:shadow-purple-500/50 transition-all hover:scale-110 glow-effect">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
        </svg>
        <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full animate-pulse"></span>

        <!-- Tooltip -->
        <span class="absolute left-20 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap px-4 py-2 rounded-lg bg-slate-800 text-sm font-medium pointer-events-none">
            Besoin d'aide ?
        </span>
    </button>
</div>

<!-- Début du contenu principal -->
<main id="main-content" class="min-h-screen pt-20 lg:pt-0">

<?php
/**
 * Duval Couverture - Tech Edition Theme Functions
 *
 * @package Duval_Theme
 * @version 1.0.0
 */

// Empêcher l'accès direct
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuration du thème
 */
function duval_theme_setup() {
    // Support du titre automatique
    add_theme_support('title-tag');

    // Support des images mises en avant
    add_theme_support('post-thumbnails');

    // Support du logo personnalisé
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Support HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Enregistrement des menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'duval-theme'),
        'footer'  => __('Menu Footer', 'duval-theme'),
    ));
}
add_action('after_setup_theme', 'duval_theme_setup');

/**
 * Enqueue des scripts et styles
 */
function duval_theme_scripts() {
    // Tailwind CSS via CDN (v3.4)
    wp_enqueue_style('tailwind-cdn', 'https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css', array(), '3.4.1');

    // Style principal du thème
    wp_enqueue_style('duval-style', get_stylesheet_uri(), array('tailwind-cdn'), '1.0.0');

    // Font Inter (Google Fonts)
    wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap', array(), null);

    // Script principal (on le créera plus tard)
    wp_enqueue_script('duval-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);

    // Variables JS pour AJAX si nécessaire
    wp_localize_script('duval-main', 'duvalTheme', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'homeUrl' => home_url('/'),
        'nonce'   => wp_create_nonce('duval-nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'duval_theme_scripts');

/**
 * Configuration de la taille des images
 */
function duval_theme_image_sizes() {
    add_image_size('duval-hero', 1920, 1080, true);
    add_image_size('duval-service', 800, 600, true);
    add_image_size('duval-thumb', 400, 300, true);
}
add_action('after_setup_theme', 'duval_theme_image_sizes');

/**
 * Ajouter des classes personnalisées au body
 */
function duval_body_classes($classes) {
    // Ajouter une classe pour identifier les pages spéciales
    if (is_front_page()) {
        $classes[] = 'homepage';
    }
    if (is_page_template('page-contact.php')) {
        $classes[] = 'contact-page';
    }
    return $classes;
}
add_filter('body_class', 'duval_body_classes');

/**
 * Fonction helper pour obtenir les informations de contact
 */
function duval_get_contact_info() {
    return array(
        'company_name' => 'Duval Couverture',
        'address'      => '1685 Rue des Mineurs',
        'city'         => '27240 Damville',
        'phone'        => '06 37 99 63 64',
        'phone_link'   => '0637996364',
        'email'        => 'ziannduval@gmail.com',
        'logo'         => 'https://duval-couverture27.fr/wp-content/uploads/2025/12/LOGO-FINAL-PNG.png',
    );
}

/**
 * Shortcode pour afficher le numéro de téléphone
 */
function duval_phone_shortcode($atts) {
    $contact = duval_get_contact_info();
    $atts = shortcode_atts(array(
        'text' => $contact['phone'],
        'class' => '',
    ), $atts);

    return sprintf(
        '<a href="tel:%s" class="%s">%s</a>',
        esc_attr($contact['phone_link']),
        esc_attr($atts['class']),
        esc_html($atts['text'])
    );
}
add_shortcode('duval_phone', 'duval_phone_shortcode');

/**
 * Shortcode pour afficher l'email
 */
function duval_email_shortcode($atts) {
    $contact = duval_get_contact_info();
    $atts = shortcode_atts(array(
        'text' => $contact['email'],
        'class' => '',
    ), $atts);

    return sprintf(
        '<a href="mailto:%s" class="%s">%s</a>',
        esc_attr($contact['email']),
        esc_attr($atts['class']),
        esc_html($atts['text'])
    );
}
add_shortcode('duval_email', 'duval_email_shortcode');

/**
 * Désactiver les emojis WordPress (optimisation)
 */
function duval_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'duval_disable_emojis');

/**
 * Personnalisation du texte de l'excerpt
 */
function duval_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'duval_excerpt_more');

/**
 * Longueur de l'excerpt
 */
function duval_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'duval_excerpt_length');

/**
 * Widget areas (sidebar et footer)
 */
function duval_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'duval-theme'),
        'id'            => 'footer-widgets',
        'description'   => __('Zone de widgets pour le footer', 'duval-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-xl font-bold mb-4">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'duval_widgets_init');

/**
 * Sécurité : Supprimer la version WP du header
 */
remove_action('wp_head', 'wp_generator');

/**
 * Permettre les SVG dans l'upload de médias
 */
function duval_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'duval_mime_types');

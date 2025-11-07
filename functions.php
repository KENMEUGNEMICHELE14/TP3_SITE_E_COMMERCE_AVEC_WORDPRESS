<?php
/**
 * Fonction pour charger TOUS les scripts et les styles du thème.
 */
function bebeconfort_theme_scripts() {
    
    // Récupère le chemin vers le dossier de notre thème
    $theme_directory = get_template_directory_uri();

    // --- STYLES EXTERNES ---
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' );
    
    // --- STYLES DE VOTRE PROJET TP1 ---
    
    // 1. Charge le fichier style.css (celui qu'on vient de modifier, pour l'identification)
    wp_enqueue_style( 'bebeconfort-main-style', get_stylesheet_uri() );
    
    // 2. Charge le style principal de votre ancien site
    wp_enqueue_style( 'bebeconfort-style-index', $theme_directory . '/assets/css/style_index.css' );

    // 3. Charge TOUS les autres fichiers CSS (j'ai listé ceux de votre projet)
    wp_enqueue_style( 'bebeconfort-king', $theme_directory . '/assets/css/king.css' );
    wp_enqueue_style( 'bebeconfort-chaussures', $theme_directory . '/assets/css/chaussures.css' );
    wp_enqueue_style( 'bebeconfort-connexion', $theme_directory . '/assets/css/connexion.css' );
    wp_enqueue_style( 'bebeconfort-model', $theme_directory . '/assets/css/model.css' );
    wp_enqueue_style( 'bebeconfort-mystyle', $theme_directory . '/assets/css/mystyle.css' );
    wp_enqueue_style( 'bebeconfort-nutrition', $theme_directory . '/assets/css/nutrition.css' );
    wp_enqueue_style( 'bebeconfort-panier', $theme_directory . '/assets/css/panier.css' );
    wp_enqueue_style( 'bebeconfort-pouset', $theme_directory . '/assets/css/pouset.css' );
    wp_enqueue_style( 'bebeconfort-cat-vetement', $theme_directory . '/assets/css/stylePageCategorieVetement.css' );
    wp_enqueue_style( 'bebeconfort-cat-couches', $theme_directory . '/assets/css/stylePageCouchesEtLingettes.css' );
    wp_enqueue_style( 'bebeconfort-detail-vetement', $theme_directory . '/assets/css/stylePageDetailVetement.css' );


    wp_enqueue_style( 'bebeconfort-theme-fixes', $theme_directory . '/assets/css/theme-fixes.css', array('bebeconfort-style-index') );
}
// Ajoute notre fonction au "hook" de WordPress qui gère les styles
add_action( 'wp_enqueue_scripts', 'bebeconfort_theme_scripts' );


/**
 * Fonction pour activer les fonctionnalités de base du thème.
 */
function bebeconfort_theme_setup() {

    // Active la prise en charge de WooCommerce
    add_theme_support( 'woocommerce' );

    // Active la prise en charge des Menus (pour Apparence -> Menus)
    add_theme_support( 'menus' );

    // Laisse WordPress gérer la balise <title>
    add_theme_support( 'title-tag' );

    // Enregistre notre emplacement de menu principal
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'bebeconfort' ),
    ) );
}
// Ajoute notre fonction au "hook" de WordPress qui gère la configuration
add_action( 'after_setup_theme', 'bebeconfort_theme_setup' );

// Il n'y a PAS de balise de fermeture ?> C'est intentionnel et c'est une bonne pratique.
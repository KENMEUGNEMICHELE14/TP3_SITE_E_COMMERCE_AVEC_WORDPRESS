<?php
// Ouvre la balise PHP

/**
 * Fonction pour charger les scripts et les styles du thème.
 * C'est la méthode correcte pour ajouter du CSS et du JS à WordPress.
 */
function bebeconfort_scripts() {
    
    // --- STYLES DE BASE ---
    
    // Charge la bibliothèque externe Font Awesome (que vous utilisiez)
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' );

    // Charge notre feuille de style principale (style.css)
    // get_stylesheet_uri() pointe vers le fichier 'style.css' à la racine de votre thème.
    wp_enqueue_style( 'bebeconfort-main-style', get_stylesheet_uri() );
    
    // --- AUTRES STYLES DE VOTRE TP1 ---
    // get_template_directory_uri() pointe vers le dossier racine 'bebeconfort'
    
    wp_enqueue_style( 'bebeconfort-king', get_template_directory_uri() . '/assets/css/king.css' );
    
    // J'ajoute tous les autres CSS de votre projet.
    // WordPress va maintenant les charger automatiquement.
    wp_enqueue_style( 'bebeconfort-chaussures', get_template_directory_uri() . '/assets/css/chaussures.css' );
    wp_enqueue_style( 'bebeconfort-connexion', get_template_directory_uri() . '/assets/css/connexion.css' );
    wp_enqueue_style( 'bebeconfort-model', get_template_directory_uri() . '/assets/css/model.css' );
    wp_enqueue_style( 'bebeconfort-mystyle', get_template_directory_uri() . '/assets/css/mystyle.css' );
    wp_enqueue_style( 'bebeconfort-nutrition', get_template_directory_uri() . '/assets/css/nutrition.css' );
    wp_enqueue_style( 'bebeconfort-panier', get_template_directory_uri() . '/assets/css/panier.css' );
    wp_enqueue_style( 'bebeconfort-pouset', get_template_directory_uri() . '/assets/css/pouset.css' );
    wp_enqueue_style( 'bebeconfort-cat-vetement', get_template_directory_uri() . '/assets/css/stylePageCategorieVetement.css' );
    wp_enqueue_style( 'bebeconfort-cat-couches', get_template_directory_uri() . '/assets/css/stylePageCouchesEtLingettes.css' );
    wp_enqueue_style( 'bebeconfort-detail-vetement', get_template_directory_uri() . '/assets/css/stylePageDetailVetement.css' );

    // NOTE: 'style_index.css' n'est pas listé ici car nous avons collé son contenu dans 'style.css' (chargé plus haut)
}
// Ajoute la fonction 'tp3_theme_scripts' au "hook" 'wp_enqueue_scripts'.
add_action( 'wp_enqueue_scripts', 'tp3_theme_scripts' );


/**
 * Fonction pour activer les fonctionnalités du thème.
 */
function bebeconfort_setup() {

    // Active la prise en charge de WooCommerce.
    // C'est crucial pour la suite de notre projet.
    add_theme_support( 'woocommerce' );

    // Active la prise en charge des "Menus" dans Apparence -> Menus.
    add_theme_support( 'menus' );

    // Active la prise en charge des titres dynamiques gérés par WordPress.
    add_theme_support( 'title-tag' );

    // Enregistre l'emplacement de menu que nous avons appelé dans header.php
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'bebeconfort' ),
    ) );
}
// Ajoute la fonction 'tp3_theme_setup' au "hook" 'after_setup_theme'.
add_action( 'after_setup_theme', 'tp3_theme_setup' );

?>
<?php

function bebeconfort_enqueue_assets() {

    // Charger la feuille de style principale du thème (style.css)
    wp_enqueue_style( 
        'bebeconfort-main-style', 
        get_stylesheet_uri() 
    );

    // Charger king.css (vu dans ton index.html)
    wp_enqueue_style( 
        'bebeconfort-king-style', 
        get_template_directory_uri() . '/assets/css/king.css' 
    );

    // Charger style_index.css (vu dans ton index.html)
    wp_enqueue_style( 
        'bebeconfort-index-style', 
        get_template_directory_uri() . '/assets/css/style_index.css' 
    );

    // Au besoin, charger d'autres styles (comme mystyle.css)
    // wp_enqueue_style( 
    //     'bebeconfort-my-style', 
    //     get_template_directory_uri() . '/assets/css/mystyle.css' 
    // );

    // Charger Font Awesome (c'était dans ton <head>)
    wp_enqueue_style( 
        'font-awesome', 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' 
    );



        // Charger le style pour la page catégorie (mystyle.css)
    wp_enqueue_style( 
        'bebeconfort-my-style', 
        get_template_directory_uri() . '/assets/css/mystyle.css' 
    );

    // Charger le style spécifique de la page catégorie
    wp_enqueue_style( 
        'bebeconfort-category-style', 
        get_template_directory_uri() . '/assets/css/stylePageCategorieVetement.css' 
    );

}


// Dire à WordPress d'exécuter cette fonction au bon moment
add_action( 'wp_enqueue_scripts', 'bebeconfort_enqueue_assets' );

?>
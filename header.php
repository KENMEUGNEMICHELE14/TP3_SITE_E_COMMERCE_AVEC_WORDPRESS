<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="top-nav">
        <a href="<?php echo home_url( '/' ); ?>" class="logo">BÉBÉCONFORT</a>

        <div class="search-bar">
            <input type="text" placeholder="Que recherchez-vous ?" aria-label="Rechercher">
            <button aria-label="Lancer la recherche"><i class="fa fa-search"></i></button>
        </div>

        <div class="account-cart">
            <a href="<?php echo home_url( '/mon-compte' ); ?>"><i class="fa fa-user"></i> Mon Compte</a>
            <a href="<?php echo home_url( '/panier' ); ?>"><i class="fa fa-shopping-cart"></i> Panier</a>
        </div>
    </div>

    <div class="bottom-nav">
        <span class="menu-icon" aria-label="Menu" role="button" tabindex="0">
            <i class="fa fa-bars"></i>
        </span>
        
        <?php
            wp_nav_menu( array(
                'theme_location' => 'primary', // L'identifiant de notre menu (défini dans functions.php)
                'container'      => 'div',      // La balise qui entoure le menu
                'container_class'=> 'menu-dropdown', // La classe de cette balise
                'fallback_cb'    => false,    // Ne rien afficher si aucun menu n'est assigné
                'depth'          => 2         // Gère les sous-menus (comme vos catégories)
            ) );
        ?>
        </div>
</header>
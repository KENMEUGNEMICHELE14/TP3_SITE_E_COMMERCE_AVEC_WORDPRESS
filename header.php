<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Panier - BÉBÉCONFORT</title>
  <!-- <link rel="stylesheet" href="../../assets/css/panier.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
</head>
<body>
  
<header>
    <div class="top-nav">
        <a href="<?php echo home_url( '/' ); ?>" class="logo">BÉBÉCONFORT</a>

        <div class="search-bar">
            <input type="text" placeholder="Que recherchez-vous ?" aria-label="Rechercher">
            <button aria-label="Lancer la recherche"><i class="fa fa-search"></i></button>
        </div>

        
        <div class="account-cart">
            <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ); ?>"><i class="fa fa-user"></i> Mon Compte</a>

            <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'cart' ) ) ); ?>"><i class="fa fa-shopping-cart"></i> Panier</a>
        </div>

    </div>

    <div class="bottom-nav">
        <span class="menu-icon" aria-label="Menu" role="button" tabindex="0">
            <i class="fa fa-bars"></i>
        </span>
        <div class="menu-dropdown">
            <a href="<?php echo home_url( '/' ); ?>">Accueil</a>
            <div class="category-dropdown">
                <a href="#" class="dropdown-trigger">Catégories <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="#">Vêtements</a>
                    <a href="#">Alimentation</a>
                    <a href="#">Accessoires</a>
                    <a href="#">Chaussures</a>
                    <a href="#">Textile de Maternité</a>
                    <a href="">Poussettes</a>
                    <a href="">Aménagement de La chambre</a>
                </div>
            </div>
            <a href="#">À propos</a>
            <a href="#">Contact</a>
        </div>
    </div>

    <?php wp_head(); ?>
</header>
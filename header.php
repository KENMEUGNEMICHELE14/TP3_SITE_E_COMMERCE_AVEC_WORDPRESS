<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style_index.css">
    <link rel="stylesheet" href="assets/css/king.css">
    <title>Bébéconfort</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <?php wp_head(); ?> 

</head>
<body <?php body_class(); ?>> 
    <header>
    <div class="top-nav">
        <a href="index.html" class="logo">BÉBÉCONFORT</a>

        <div class="search-bar">
            <input type="text" placeholder="Que recherchez-vous ?" aria-label="Rechercher">
            <button aria-label="Lancer la recherche"><i class="fa fa-search"></i></button>
        </div>

        <div class="account-cart">
            <a href="pages/connexion/connexion.html"><i class="fa fa-user"></i> Mon Compte</a>
            <a href="pages/panier/panier.html"><i class="fa fa-shopping-cart"></i> Panier</a>
        </div>
    </div>

    <div class="bottom-nav">
        <span class="menu-icon" aria-label="Menu" role="button" tabindex="0">&#9776;</span>
        <nav>
            <ul class="nav-links">
                <li><a href="pages/vêtements/pageCategorieVetement.html">Vêtements</a></li>
                <li><a href="pages/couches_et_lingettes/couche_lingette.html">Couches et Lingettes</a></li>
                <li><a href="pages/alimentation/alimentation.html">Alimentation</a></li>
                <li><a href="pages/poussettes/pouset.html">Poussettes</a></li>
                <li><a href="pages/chaussures/chaussures.html">Chaussures</a></li>
                <li><a href="pages/amenagement_de_chambre/amenagement.html">Aménagement de chambre</a></li>
                <li><a href="pages/textile_de_maternité/textile.html">Textile de maternité</a></li>
                <li><a href="pages/Accessoires/Accessoires.html">Accessoires</a></li>
            </ul>
        </nav>
    </div> 
</header>
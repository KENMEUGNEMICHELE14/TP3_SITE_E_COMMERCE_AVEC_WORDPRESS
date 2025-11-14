<?php get_header(); ?>

<main>
    <!-- Banner -->
    <section class="banner">
        <h1><strong>VETEMENTS POUR BEBE</strong></h1>
        <p>Découvrez notre collection complète d'articles de vêtements pour votre bébé. Qualité garantie, prix compétitifs.</p>
    </section>

    <!-- Main Container -->
    <div class="container">
        <!-- Stats Section -->
        <div class="stats-section">
            <div class="stat-card">
                <div class="stat-number">16+</div>
                <div class="stat-label">Articles disponibles</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">100%</div>
                <div class="stat-label">Qualité garantie</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Service client</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">⭐ 4.8</div>
                <div class="stat-label">Satisfaction client</div>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <h3>Filtrer les produits</h3>
            <div class="filter-options">
                <div class="filter-group">
                    <label for="category">Catégorie</label>
                    <select id="category">
                        <option value="">Toutes les catégories</option>
                        <option value="biberons">Biberons & Tétines</option>
                        <option value="tirelait">Tire-lait</option>
                        <option value="accessoires">Accessoires</option>
                        <option value="vaisselle">Vaisselle bébé</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="price-range">Prix maximum (FCFA)</label>
                    <select id="price-range">
                        <option value="">Tous les prix</option>
                        <option value="10000">Moins de 10 000</option>
                        <option value="30000">Moins de 30 000</option>
                        <option value="60000">Moins de 60 000</option>
                        <option value="120000">Moins de 120 000</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="sort">Trier par</label>
                    <select id="sort">
                        <option value="featured">Populaires</option>
                        <option value="price-asc">Prix croissant</option>
                        <option value="price-desc">Prix décroissant</option>
                        <option value="name">Nom A-Z</option>
                    </select>
                </div>
            </div>
        </div>


  <!-- ----- GRILLE DE PRODUITS ----- -->

    <div class="product-grid">
      <!-- 15 produits (Exemple avec placeholders) -->
    
      <a href="../../pages/vêtements/pageDetailVetement1.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé1.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement2.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé2.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement3.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé3.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement4.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé4.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement5.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé5.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement6.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé6.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement7.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé7.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement8.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé8.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement9.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé9.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement10.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé10.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement11.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé11.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement12.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé12.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement13.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé13.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement14.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé14.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
      <a href="../../pages/vêtements/pageDetailVetement15.html"> <div class="product-card">  <img class="product-image" src="../../assets/images/vetements bébé/vetement bébé15.png" alt="Produit 9"> <div class="product-name">couffin en bois recouvert de tissu</div>  <div class="product-price">30.000 FCFA</div>  <button class="add-to-cart">Ajouter au panier</button>  </div>   </a>
    </div>

</main>

<?php get_footer(); ?>
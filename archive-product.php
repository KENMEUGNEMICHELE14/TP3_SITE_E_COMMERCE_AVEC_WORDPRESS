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

        <?php
        if ( have_posts() ) : 

            // Démarre la boucle pour afficher chaque produit
            while ( have_posts() ) : the_post(); 

                global $product; // Accéder à l'objet produit de WooCommerce
        ?>

                <div class="product-card">

                    <a href="<?php the_permalink(); ?>">
                        <?php echo $product->get_image('woocommerce_thumbnail', ['class' => 'product-image']); // Utilise la classe 'product-image' de ton CSS ?>
                    </a>

                    <h3 class="product-name">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>

                    <div class="product-price">
                        <?php echo $product->get_price_html(); ?>
                    </div>

                    <?php
                        // Génère le bouton "Ajouter au panier" en utilisant la classe 'add-to-cart' de ton CSS
                        echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                            sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button add-to-cart %s product_type_%s">%s</a>',
                                esc_url( $product->add_to_cart_url() ),
                                esc_attr( $product->get_id() ),
                                esc_attr( $product->get_sku() ),
                                $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                                esc_attr( $product->get_type() ),
                                esc_html( $product->add_to_cart_text() )
                            ),
                        $product );
                    ?>
                </div>
                <?php 
            endwhile; // Fin de la boucle

        else : 

            // S'il n'y a VRAIMENT aucun produit, on affiche le message
            echo __( 'Aucun produit n’a été trouvé.' );

        endif; 
        ?>




</main>

<?php get_footer(); ?>
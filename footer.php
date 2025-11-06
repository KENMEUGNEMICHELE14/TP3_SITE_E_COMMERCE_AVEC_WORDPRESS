<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-column">
            <h4>Service Client</h4>
            <ul>
                <li><a href="#">Centre D'aide</a></li>
                <li><a href="<?php echo home_url( '/mon-compte' ); ?>">Votre compte</a></li>
                <li><a href="<?php echo home_url( '/mon-compte/orders' ); ?>">Vos Commandes</a></li>
                <li><a href="#">Comment Payer</a></li>
                <li><a href="#">Comment Acheter</a></li>
                <li><a href="<?php echo home_url( '/contact' ); ?>">Contactez Nous</a></li>
                <li><a href="#">Mentions Légales</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Liens Utiles</h4>
            <ul>
                <li><a href="<?php echo home_url( '/categorie-produit/vetements' ); ?>">Vêtements</a></li>
                <li><a href="<?php echo home_url( '/categorie-produit/accessoires' ); ?>">Accessoires</a></li>
                <li><a href="<?php echo home_url( '/categorie-produit/chaussures' ); ?>">Chaussures</a></li>
                <li><a href="<?php echo home_url( '/categorie-produit/amenagement-de-chambre' ); ?>"> Aménagement de La chambre</a></li>
                <li><a href="<?php echo home_url( '/categorie-produit/alimentation' ); ?>">Alimentation</a></li>
                <li><a href="<?php echo home_url( '/categorie-produit/couches-et-lingettes' ); ?>">Couches et Lingettes</a></li>
                <li><a href="<?php echo home_url( '/categorie-produit/textile-de-maternite' ); ?>">Textile de Maternité</a></li>
                <li><a href="<?php echo home_url( '/categorie-produit/poussettes' ); ?>">Poussettes</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>A propos</h4>
            <ul>
                <li><a href="#">Qui Sommes Nous</a></li>
                <li><a href="#">Carrière</a></li>
                <li><a href="#">Conditions Générales</a></li>
            </ul>
        </div>
        
        <div class="footer-column">
            <h4>Methode De paiement</h4>
            <div class="payment-methods">
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa" class="payment-logo"></a>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" class="payment-logo"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/images_index/téléchargement.png" alt="American Express" class="payment-logo"></a>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal" class="payment-logo"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/images_index/mtn-mobile-money-logo.jpg" alt="Mtn Money" class="payment-logo"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/images_index/orange-money-logo-png_seeklogo-440383.png" alt="orange money" class="payment-logo"></a>
            </div>
        </div>

        <div class="footer-column">
            <h4>Réseaux Sociaux</h4>
            <ul>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/images_index/facebook.jpg" alt="Facebook" class="social-logo"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/images_index/instagram.jpg" alt="Instagram" class="social-logo"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/images_index/twitter.png" alt="Twitter" class="social-logo"></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <h5>&copy; <strong>BébéConfort <?php echo date('Y'); ?> - Tous droits réservés</strong></h5>
    </div>
</footer>

<?php
// C'est le "crochet" (hook) de pied de page.
// WordPress l'utilise pour injecter les fichiers JavaScript (comme jQuery) 
// et les scripts de plugins (comme WooCommerce).
wp_footer(); 
?>

</body>
</html>
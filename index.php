<?php
// Charger le header (header.php)
get_header(); 
?>

<main class="page-container"> <div class="content-wrap">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <h1 class="page-title"><?php the_title(); ?></h1>

                <div class="page-content">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</main>

<?php
// Charger le footer (footer.php)
get_footer(); 
?>
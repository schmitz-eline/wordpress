<?php /* Template Name: Template "À propos" */ ?>
<?php get_header(); ?>
    <h2>À propos de moi</h2>
    <?php 
    // On ouvre "la boucle" (The Loop), la structure de contrôle
    // de contenu propre à Wordpress:
    if(have_posts()): while(have_posts()): the_post(); ?>

        <div><?php the_content(); ?></div>

    <?php 
    // On ferme "la boucle" (The Loop):
    endwhile; else: ?>
        <p>Pas de contenu à afficher.</p>
    <?php endif; ?>
<?php get_footer(); ?>
<?php
/*
Template Name: Drone
*/
get_header(); ?>
<?php imagemGigante(); ?>
<div class="container card-phantom max-width">
    <div class="row align-items-center">
        <div class="col-md-6 col-sm-12">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/bibliotecas/drone-phantom.jpg" alt="Dji Phantom">
        </div>
        <div class="col-md-6 col-sm-12">
            <h3 class="card-phantom__titulo text-right">Fotografia e Filmagem aérea com drones</h3>
        </div>
    </div>
</div>
<?php destaqueComTexto(); ?>
<?php get_footer(); ?>

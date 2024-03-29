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
            <h3 class="card-phantom__titulo">Fotografia e Filmagem aérea com drones</h3>
        </div>
    </div>
</div>
<?php destaqueComTexto(); ?>
<div class="jumbotron jumbotron-fluid" style="margin-bottom: 0;">
    <div class="container max-width">
        <div class="container">
            <h3 class="display-4">Filmagens de Drone</h3>
            <p class="lead">As imagens com drone proporcionam qualidade para apresentar seu projeto, seja ele publicitário, curta ou o dlipe da sua banda . Também podem ser usadas imagens aéreas com drone para acompanhamento de obras, verificação de telhados, auxilio para reconhecimento de terrenos, entre outras infinitas possibilidades.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/271842945" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/245344106" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/245331796" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

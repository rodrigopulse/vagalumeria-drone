<?php function imagemGigante() { ?>
    <div class="imagem-gigante">
        <div class="imagem-gigante__conteudo">
            <?php carregaLogo(); ?>
            <h1 class="imagem-gigante__titulo">Imagens Aéreas</h1>
            <h2 class="imagem-gigante__subtitulo">Foto e filmagem em alta resolução com Drones, faça seu vídeo ou sua foto conosco e tenha imagens aéreas do seu projeto.</h2>
        </div>
        <div class="imagem-gigante__overlay"></div>
        <div
            class="imagem-gigante__fundo"
            data-imagem-background-desktop="<?php echo get_template_directory_uri(); ?>/assets/bibliotecas/imagem-topo.jpg"
            data-imagem-background-mobile="<?php echo get_template_directory_uri(); ?>/assets/bibliotecas/imagem-topo.jpg">
        </div>
    </div>
<?php } ?>
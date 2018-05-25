<?php function destaqueComTexto() { ?>
    <div class="destaque-com-texto container-fluid">
        <div class="container max-width destaque-com-texto__conteudo">
            <div class="row align-items-center">
                <div class="col-md-7 col-sm-12">
                    <p class="destaque-com-texto__texto">As imagens com drone proporcionam qualidade para apresentar seu projeto, seja ele publicitário, curta ou o dlipe da sua banda.</p>
                    <p class="destaque-com-texto__texto">Também podem ser usadas imagens aéreas com drone para acompanhamento de obras, verificação de telhados, auxilio para reconhecimento de terrenos, entre outras infinitas possibilidades.</p>
                </div>
                <div class="col-md-5 col-sm-12 destaque-com-texto__botao">
                    <a href="#orcamento" type="button" class="btn btn-primary btn-lg">Orçamento</a>
                </div>
            </div>
        </div>
        <div class="destaque-com-texto__overlay"></div>
        <div
            class="destaque-com-texto__fundo"
            data-imagem-background-desktop="<?php echo get_template_directory_uri(); ?>/assets/bibliotecas/destaque-com-texto.jpg"
            data-imagem-background-mobile="<?php echo get_template_directory_uri(); ?>/assets/bibliotecas/destaque-com-texto.jpg">
        </div>
    </div>
<?php } ?>
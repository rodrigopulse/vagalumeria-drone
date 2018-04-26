( function($) {

    $( document ).ready( function(){

		$( '.imagem-gigante__fundo' ).each( function() {
            if ( $( window ).width() <= 560 ) {
                var imagemBackground = $( this ).data('imagem-background-mobile');
            } else {
                var imagemBackground = $( this ).data('imagem-background-desktop');
            }
            $( this ).css( {
                'background-image' : 'url(' + imagemBackground + ')' 
            } );
        } );//.imagem-gigante__fundo

    } ); //document.ready

} )( jQuery );
( function($) {

    $( document ).ready( function(){

		$( '.destaque-com-texto__fundo' ).each( function() {
            if ( $( window ).width() <= 560 ) {
                var imagemBackground = $( this ).data('imagem-background-mobile');
            } else {
                var imagemBackground = $( this ).data('imagem-background-desktop');
            }
            $( this ).css( {
                'background-image' : 'url(' + imagemBackground + ')' 
            } );
        } );//.imagem-gigante__fundo

    } ); //document.ready

} )( jQuery );
( function($) {
    $( document ).ready( function(){
		
	} ); //document.ready
} )( jQuery );

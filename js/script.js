( function( $ ) {
	var offset = $('#header').offset().top;
    var $meuMenu = $('#header'); // guardar o elemento na memoria para melhorar performance
    $(document).on('scroll', function () {

        if (offset <= $(window).scrollTop()-100) {
            $meuMenu.addClass('fixar');
        } else {
            $meuMenu.removeClass('fixar animated fadeInDown');
        }
    });

} )( jQuery );
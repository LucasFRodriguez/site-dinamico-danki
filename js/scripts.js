$(function(){
//AQUI VAI TODO NOSSO CODIGO DE JAVASCRIPT.
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        if(listaMenu.is(':hidden') == true ){
            var icone = $('.menu-mobile i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        }else{
            var icone = $('.menu-mobile i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }
    })

    if($('target').lengt > 0){
        //o elemento existe, scroll em algum elemento.
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop':divScroll},2000);
    }

});
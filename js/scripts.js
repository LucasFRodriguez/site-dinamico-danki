$(function(){
//AQUI VAI TODO NOSSO CODIGO DE JAVASCRIPT.
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
            listaMenu.slideToggle();
    })
});
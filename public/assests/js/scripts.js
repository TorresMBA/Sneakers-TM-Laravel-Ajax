$(document).ready(function (){
    //Cerrar alertar automaticamente
    $('.alert[data-auto-dismiss]').each(function (index, element){
        const $element = $(element), //Captura
                timeout = $element.data('auto-dismiss') || 5000; //verifica y toma el tiempo que tenga el data autodimiss o 5000 = 5 segundos
        setTimeout(function(){
            $element.alert('close');
        }, timeout);
    });
    //Toll tips
    $('body').tooltip({
        trigger: 'hover',
        selector: '.tooltipsC',
        placement: 'top',
        html: true,
        container: 'body'
    });
});
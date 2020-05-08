$(document).ready(function (){
    $('#nestable').nestable().on('change', function(){
        const data = {
            menu: window.JSON.stringify($('#nestable').nestable('serialize')),
            _token: $('input[name = _token]').val()
        };
        $.ajax({
            url: '/admin/menu/guardar',
            type: 'POST',
            datatype: 'JSON',
            data: data,
            success: function(respuesta){

            }
        });
    });
    $('#nestable').nestable('expandAll'); //expand //collapse
});
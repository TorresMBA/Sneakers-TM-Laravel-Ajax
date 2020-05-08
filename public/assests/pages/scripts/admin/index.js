$(document).ready(function() {
    $('#tabla-data').on('submit', '.form-eliminar', function (){ //Tomar el evento submit
        event.preventDefault(); //Detiene lo que por defecto hace un formulario cuando se hace un submit
        const form = $(this); //tomo el formulario 
        swal({ //mostramos el mensaje de alerta que viene de Sweet Alert el cual importamos mediante cdn y son los atritubots que requiere
            title: '¿Esta seguro que desea eliminar el registro?',
            text: '¡ Esta accion no se puede deshacer !',
            icon: 'warning',
            buttons: {
                cancel: 'Cancelar', //False
                confirm: 'Aceptar' //True
            }
        }).then((value) => { //captura el valor que clickea el usuario, Presiono boton 'aceptar' value = true;
            if (value) {
                ajaxRequest(form);// llama a la funcion  ajaxRequest y le pasa como parametro el formulario 
            }
        });
    });

    function ajaxRequest(form) {
        $.ajax({
            url: form.attr('action'),//es la accion del formulario
            type: 'POST',//tipo post
            data: form.serialize(),//los datos form serializado 
            success: function(respuesta){
                if(respuesta.mensaje == "ok"){
                    form.parents('tr').remove();//Busca el tr que hace parte de este formulario y lo removemos, se borra la fila selecionada, y bota un mensaje| next
                    Bibloteca.notificaciones('Registro Eliminado Correctamente', 'Sneakers TM', 'success');//Llama al objeto de assests/js/funciones y le pasa estos 3 parametros para botar el mensaje de error o confirmacion
                }else{
                    Bibloteca.notificaciones('El registro no se pudo eliminar hay recursos del sistema usandolo', 'Sneakers TM', 'success');
                }
            },
            error: function(){

            }
        });
    }
});
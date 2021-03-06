@extends('layouts.app')
@section('title', 'Registro')
@section('ruta', 'Registro')

@section('content')
    <div class="container" style="width: 50%"> 	
        <br><br>
        <h3 class="head">Registro de Usuarios</h3>
        <p class="head_para">Complete los datos</p>
        <br><br>
        <div class=" contact_grid_right">
            <h6>Rellene los datos para Registrarse.</h6>
        </div>
        <script>
            function init(){       
                var inputFile = document.getElementById('txtImg');
                inputFile.addEventListener('change', mostrarImagen, false);
            }
            function mostrarImagen(event){
                
                var file = event.target.files[0];
                var leer = new FileReader();
                leer.onload = function(event){
                    var img = document.getElementById('imgUsu');
                    img.src= event.target.result;                    
                }
                leer.readAsDataURL(file);
            }
            window.addEventListener('load', init, false)
        </script>
        <form action="{{ route('registrar') }}" method="POST" class="creditly-card-form agileinfo_form" enctype="multipart/form-data" >
			<section class="creditly-wrapper wthree, w3_agileits_wrapper">
				<div class="credit-card-wrapper">
                    <div class="first-row form-group">
                        <div class="controls">
                            <label class="control-label">Nombre</label>
                            <input class="form-control" type="text" name="Name"  required="">
                        </div>
                        <div class="w3_agileits_card_number_grid_left">
                            <div class="controls">
                                <label class="control-label">Apellido</label>
                                <input class="number form-control" type="text" name="Ape" >
                            </div>
                        </div>
                        <div class="w3_agileits_card_number_grid_right">
                            <div class="controls">
                                <label class="control-label">Email:</label>
                                <input class=" form-control" type="text" name="Email">
                            </div>
                        </div>
                        <div class="controls">
                            <label class="control-label">Confirmar Email:</label>
                            <input class=" form-control" type="text" name="email">
                        </div>
                        <div class="controls">
                            <label class="control-label">Celular</label>
                            <input class=" form-control" type="text" name="Telephone">
                        </div>
                        <div class="controls">
                            <label class="control-label">Dirrecion</label>
                            <input class=" form-control" type="text" name="Dirrecion">
                        </div>
                        <div class="controls">
                            <label class="control-label">Foto de Perfil</label>
                                <img id="imgUsu" width="150" height="150" /> <br>							
                                <input class="form-control" type="file" name="txtImg" id="txtImg"  required="">
                        </div>
                        <div class="controls">
                            <label class="control-label">Nombre de Usuario</label>
                            <input class=" form-control" type="text" name="Usuario">
                        </div>
                        <div class="controls">
                            <label class="control-label">Contraseña</label>
                            <input class=" form-control" type="password" name="Pass">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" style="width: 50%">Registrarse</button>
				</div>
			</section>
		</form>
    </div>
    <br>
@endsection

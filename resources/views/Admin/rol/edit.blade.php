@extends('layouts.app')
@section('title', 'Editar Rol')
@section('ruta', 'Editar Rol')

@section('content')
    <div class="container" style="width: 50%"> 	
        <br><br>
        <h3 class="head">Editar Rol</h3>
        @include('layouts.partials.form-error')
        @include('layouts.partials.message')
        <p class="head_para">Acceso solo para Administradores</p>
        <br><br>
        <div class=" contact_grid_right ">
            <h6>Edite los datos del rol.</h6>
        </div>
        <form action="{{ route('rol.update', ['id'=> $data->id]) }}" method="POST" id="form-general" class="creditly-card-form agileinfo_form" autocomplete="off">
            @csrf 
            @method("put")
            <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                @include('admin.rol.partials.form')
            </section>
        </form>
        <br>
        <div class="">
            <a href="{{ route('rol.index') }}" class="btn btn-info">Volver al Listado</a>
        </div>
    </div>
    <br>
@endsection
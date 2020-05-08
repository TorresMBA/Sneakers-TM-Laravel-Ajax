@extends('layouts.app')
@section('title', 'Roles')
@section('ruta', 'Roles')

@section('content')
    <div class="container" style="width: 50%"> 	
        <br><br>
        <h3 class="head">Registro de Rol</h3>
        @include('layouts.partials.form-error')
        @include('layouts.partials.message')
        <p class="head_para">Acceso solo para Administradores</p>
        <br><br>
        <div class=" contact_grid_right ">
            <h6>Rellene los datos para crear el rol.</h6>
        </div>
        <form action="{{ route('rol.store') }}" method="POST" id="form-general" class="creditly-card-form agileinfo_form" autocomplete="off">
            @csrf
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
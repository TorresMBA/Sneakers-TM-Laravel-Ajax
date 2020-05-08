@extends('layouts.app')

@section('title', 'Sistema Menu Admin')
@section('ruta', 'Menu')

{{-- @section('js')
    <script src="{{ asset("assests/pages/scripts/admin/crear.js") }}"></script>
@endsection --}}

@section('content')
<div class="container" style="width: 50%"> 	
    <br><br>
    <h3 class="head">Registro de Menu</h3>
    @include('layouts.partials.form-error')
    @include('layouts.partials.message')
    <p class="head_para">Acceso solo para Administradores</p>
    <br><br>
    <div class=" contact_grid_right">
        <h6>Rellene los datos para crear el Menu.</h6>
    </div>
    <form action="{{ route('menu.store') }}" method="POST" id="form-general" class="creditly-card-form agileinfo_form" autocomplete="off">
        @csrf
        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
            @include('admin.menu.partials.form')
        </section>
    </form>
</div>
<br>
@endsection
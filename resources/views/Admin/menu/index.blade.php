@extends('layouts.app')
@section('title', 'Menú')
@section('ruta', 'Menú')

@section('styles')
    <link rel="stylesheet" href="{{ asset("assests/js/jquery-nestable/jquery.nestable.css") }}" rel="stylesheet" type="text/css">
@endsection

@section('scripts-plugins')
    <script src="{{ asset("assests/js/jquery-nestable/jquery.nestable.js") }}"></script>
@endsection

@section("js")
    <script src="{{ asset("assests/pages/scripts/admin/menu/index.js") }}"></script>
@endsection

@section('content')
    <div class="container" style="width: 50%"> 	
        <br><br>
        <h3 class="head">Menús</h3>
        @include('layouts.partials.form-error')
        @include('layouts.partials.message')
        <p class="head_para">Acceso solo para Administradores</p>
        <br><br>
        <div class=" contact_grid_right">
            <h6>Listado de Menús</h6>
        </div>
        <!-- -->
        <div class="credit-card-wrapper">
            <div class="contact_left_grid">	
                
                <div class="dd" id="nestable">
                    @csrf
                    <ol class="dd-list">
                        @foreach ($menus as $key => $item)
                            @if ($item["menu_id"] != 0)
                                @break
                            @endif
                            @include("admin.menu.partials.menu-item", ["item" => $item])
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
        <!-- -->
    </div>
    <br>
@endsection
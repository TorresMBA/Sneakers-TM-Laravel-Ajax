@extends('layouts.app')
@section('title', 'Menu Roles')
@section('ruta', 'Menu Roles')

@section('content')
    <div class="container" style="width: 50%"> 	
        <br><br>
        <h3 class="head">Listado de Roles</h3>
        <p class="head_para">Acceso solo para Administradores</p>
        @include('layouts.partials.form-error')
        @include('layouts.partials.message')
        <br><br>
        <div class="shop_inner_inf">
            <a href="{{ route('rol.create') }}" class="btn btn-success">Nuevo Registro</a>
            <div class="checkout-right">
                <h4>Roles:</h4>
                <table class="timetable_sub" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Menú</th>
                            @foreach ($rols as $id => $nombre)
                                <th>{{ $nombre }}</th>
                            @endforeach
                            {{-- <th colspan="2">Acciones</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $key => $menu)
                            @if($menu["menu_id"] != 0)
                                @break
                            @else
                                <tr class="rem1">
                                    <td class="font-weight-bold"><i class="fa fa-arrows-all"></i>{{ $menu["nombre"] }}</td>
                                    @foreach ($rols as $id => $nombre)
                                        <td class="text-center">
                                            <input
                                                type="checkbox" 
                                                class="menu_rol" 
                                                name="menu_rol[]" 
                                                data-menuid={{ $menu["id"] }} 
                                                value="{{ $id }}" {{ in_array($id, array_column($menuRols, "id")) ? "checked" : ""}}{{--[$menu["id"]]//a menuRols --}}/>
                                        </td>
                                    @endforeach
                                </tr>
                                @foreach ($menu["submenu"] as $key => $hijo)
                                    <tr>
                                        <td class="pl-20"><i class="fa fa-arrows-all"></i>{{ $hijo["nombre"] }}</td>
                                        @foreach ($rols as $id => $nombre)
                                            <td class="text-center">
                                                <input
                                                    type="checkbox" 
                                                    class="menu_rol" 
                                                    name="menu_rol[]" 
                                                    data-menuid={{ $hijo["id"] }} 
                                                    value="{{ $id }}" {{ in_array($id, array_column($menuRols, "id")) ? "checked" : ""}}{{--[$menu["id"]]//a menuRols --}}/>
                                            </td>
                                        @endforeach
                                    </tr>
                                    @foreach ($hijo["submenu"] as $key => $hijo2)
                                        <tr>
                                            <td class="pl-30"><i class="fa fa-arrows-all"></i>{{ $hijo2["nombre"] }}</td>
                                            @foreach ($rols as $id => $nombre)
                                                <td class="text-center">
                                                    <input
                                                        type="checkbox" 
                                                        class="menu_rol" 
                                                        name="menu_rol[]" 
                                                        data-menuid={{ $hijo2["id"] }} 
                                                        value="{{ $id }}" {{ in_array($id, array_column($menuRols, "id")) ? "checked" : ""}}{{--[$menu["id"]]//a menuRols --}}/>
                                                </td>
                                            @endforeach
                                        </tr>      
                                        @foreach ($hijo2["submenu"] as $key => $hijo3)
                                            <tr>
                                                <td class="pl-40"><i class="fa fa-arrows-all"></i>{{ $hijo3["nombre"] }}</td>
                                                @foreach ($rols as $id => $nombre)
                                                    <td class="text-center">
                                                        <input
                                                            type="checkbox" 
                                                            class="menu_rol" 
                                                            name="menu_rol[]" 
                                                            data-menuid={{ $hijo3["id"] }} 
                                                            value="{{ $id }}" {{ in_array($id, array_column($menuRols, "id")) ? "checked" : ""}}{{--[$menu["id"]]//a menuRols --}}/>
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @endforeach 
                                    @endforeach                                      
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </div>
    <br>
@endsection
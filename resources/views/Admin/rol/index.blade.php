@extends('layouts.app')
@section('title', 'Roles')
@section('ruta', 'Roles')

@section('js')
    <script src="{{ asset("assests/pages/scripts/admin/index.js") }}"></script>     
@endsection

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
                            <th>ID</th>
                            <th>Rol</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $rol)
                            <tr class="rem1">
                                <td class="invert">{{ $rol->id }}</td>
                                <td class="invert">{{ $rol->nom_rol }}</td>
                                <td class="invert">
                                    <a href="{{ route('rol.edit', ['id' => $rol->id]) }}" class="btn btn-info" title="Editar este registro">Editar</a>
                                </td>
                                <td class="invert">
                                    {{-- <a href="" class="btn btn-danger" title="Eliminar este registro">Eliminar</a>  --}}
                                    <form action="{{ route('rol.delete', ['id' => $rol->id]) }}" class="form-eliminar" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" title="Eliminar Registro" id="tabla-data" class="btn btn-danger eliminar tooltipsC">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </div>
    <br>
@endsection
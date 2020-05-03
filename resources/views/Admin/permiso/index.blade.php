@extends('layouts.app')
@section('title', 'Permisos')
@section('ruta', 'Permiso')
@section('content')
    <div class="shop_inner_inf">
        <div class="checkout-right">
            <h4>Permisos:</h4>
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Slug</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permisos as $permiso)
                        <tr class="rem1">
                            <td class="invert">{{ $permiso->id }}</td>
                            <td class="invert">{{ $permiso->nom_permiso }}</td>                 
                            <td class="invert">{{ $permiso->slug }}</td>                     
                            <td><a href="../Controlador/controlador_producto.php?op=4">Editar</a></td>	
                            <td><a href="../Controlador/controlador_producto.php?op=5">Eliminar</a></td>		
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br>
@endsection
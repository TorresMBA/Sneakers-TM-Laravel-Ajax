@extends('layouts.app')
@section('title', 'Login')
@section('ruta', 'Login')

@section('content')
    <div class="">
        <div class="ads-grid_shop">
            <div class="shop_inner_inf">
                <h3 class="head">Login</h3>
                <p class="head_para">Inicie sesion</p>
                <div class="inner_section_w3ls">
                    <div class="col-md-7 contact_grid_right">
                        <h6>Completo los datos para ingresar</h6>
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                <div>
                                    @foreach ($errors->all() as $error)
                                        <span>{{ $error }}</span>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <form action="{{ route('login.inicio') }}" method="post" autocomplete="off">	
                            @csrf	
                            <div class="col-md-6 col-sm-6 contact_left_grid">
                                <input type="text" name="usuario" placeholder="Usuario" required="" value="{{ old('usuario') }}">
                                <br><br>
                                <input type="password" name="password" class="form-control" placeholder="Contraseña" required="">
                            </div>				
                            <div class="clearfix">  </div>
                            <br>
                            <input type="submit" value="Ingresar">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection

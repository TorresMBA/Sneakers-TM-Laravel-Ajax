
<ul class="nav" id="side-menu">
    <li style="padding: 70px 0 0;">
        <a href="{{ route('dashboard') }}" class="waves-effect"><i class="fa fa-bar-chart-o fa-fw" aria-hidden="true"></i>Dashboard</a>
    </li>
    <li>
        <a href="{{ route('perfil-admin') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Perfil</a>
    </li>
    <li>
        <a href="{{ route('crear.usuario') }}" class="waves-effect "><i class="fa fa-child fa-fw" aria-hidden="true"></i>Crear Usuario</a>
    </li>
    <li>
        <a href="{{ route('lista.usuarios') }}" class="waves-effect"><i class="fa fa-users fa-fw" aria-hidden="true"></i>Listado de Usuarios</a>
    </li>
    <li>
        <a href="{{ route('crear.producto') }}" class="waves-effect "><i class="fa fa-shopping-bag fa-fw" aria-hidden="true"></i>Ingresar Productos</a>
    </li>
    <li>
        <a href="{{ route('lista.productos') }}" class="waves-effect "><i class="fa fa-table fa-fw" aria-hidden="true"></i>Listado de Productos</a>
    </li>
    <li>
        <a href="{{ route('lista.pedidos') }}" class="waves-effect "><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>Listado de Pedidos</a>
    </li>
</ul>
<div class="center p-20">
    <a href="{{ route('inicio') }}" class="btn btn-success btn-block waves-effect waves-light fa fa-shopping-cart fw"> Ir a la Tienda</a>
</div>
<div class="center p-20">
    <a href="{{ route('logout') }}" class="btn btn-danger btn-block waves-effect waves-light fa  fa-sign-out fw"> Cerrar Sesion</a>
</div>
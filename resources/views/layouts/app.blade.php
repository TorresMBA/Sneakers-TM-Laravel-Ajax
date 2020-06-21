<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.banner')

    <!-- /Contenido Principal-->
    @yield('content')
    <!-- //Contenido Principal -->

    @include('layouts.partials.footer')
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    @include('layouts.partials.js')
</body>
</html>

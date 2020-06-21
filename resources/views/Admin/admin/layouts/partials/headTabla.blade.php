    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("assests/$panel/plugins/images/favicon.png") }}">
    <title>@yield('title') | SneakersTM</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("assests/$panel/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="a{{ asset("assests/$panel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css") }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset("assests/$panel/css/animate.css") }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset("assests/$panel/css/style.css") }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset("assests/$panel/css/colors/default.css") }}" id="theme" rel="stylesheet">
    @yield('head')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
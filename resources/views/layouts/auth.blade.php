<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{{ url( elixir('css/admin.css') ) }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-black-50">
<div class="auth-wrapper">
    <div class="auth-header login-box">
        <img src="{{ url('img/auth-logo.png') }}" title="CMPD Explorers Christmas Project">
        <div class="made-by">By Code For Charlotte</div>
    </div>
    @yield('content')
</div>
<script src="{{ url( elixir('js/admin.js') ) }}" type="text/javascript"></script>
</body>
</html>
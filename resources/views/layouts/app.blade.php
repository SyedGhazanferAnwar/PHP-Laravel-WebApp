<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <script src="main.js"></script>
</head>
<body>
    @include('inc/navbar')
    <div style="padding-top:5%;"></div>
    <div class="container">
        @include('inc/prompt')
        @yield('content')
    </div>
</body>
</html>
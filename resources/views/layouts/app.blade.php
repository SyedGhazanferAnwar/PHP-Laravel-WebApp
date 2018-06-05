<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>           
    <div id="app">
            @include('inc.navbar')
        <main class="py-4">
            <div class="container">
            @include('inc/prompt')
            @yield('content')
            
        </div>
        </main>
</div>
<!-- Scripts -->
<script src="{{url('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    setTimeout(function(){
        CKEDITOR.replace( 'article-ckeditor');
    },100);
</script>
<!-- Removed a word "defer " from assets/js/app.js  -->
<script src="{{ asset('js/app.js') }}"defer></script>
</body>
</html>
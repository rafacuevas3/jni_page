<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel AdminLTE Boilerplate</title>
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/font-awesome.min.css') !!}
        {!! Html::style('assets/css/AdminLTE.css') !!}
        {!! Html::style('assets/css/style.css') !!}
        {!! Html::style('assets/css/skins/_all-skins.min.css') !!}
        @yield('styles')
    </head>
    <body class="hold-transition skin-blue">
        @include('partials.layout.navbar')
        @yield('content')

        <!-- Scripts -->
        {!! Html::script('assets/js/jquery-2.1.4.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        @yield('scripts')
    </body>
</html>
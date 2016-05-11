<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JNI Template</title>
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/AdminLTE.css') !!}
    {!! Html::style('assets/css/skins/_all-skins.min.css') !!}
    {!! Html::style('assets/css/style.css') !!}
    @yield('styles')
</head>
<body class="hold-transition sidebar-mini skin-blue">
    @include('partials.layout.navbar')
    @if (! Auth::guest() )
        @include('partials.layout.sidebar')
    @endif
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                @yield('header')
            </section>
            <section class="content">
                @include('partials.layout.errors')
                @section('main-content')
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">@yield('panel-heading')</div>
                                    <div class="panel-body">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @show
            </section>
        </div>
        @yield('footer')
        @if (! Auth::guest() )
            @include('partials.layout.control-sidebar')
            <div class="control-sidebar-bg"></div>
        @endif
    </div>
        
    <!-- Scripts -->
    {!! Html::script('assets/js/jquery-2.1.4.min.js') !!}
    {!! Html::script('assets/js/jquery-ui.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/plugins/slimScroll/jquery.slimscroll.min.js') !!}
    {!! Html::script('assets/js/app.min.js') !!}
    {!! Html::script('assets/js/demo.js') !!}
    @yield('scripts')
</body>
</html>
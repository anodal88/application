<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | @yield('title')</title>

    {{--Block of stylesheets--}}
    @section('stylesheets')
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @show


</head>

<body>
@include('layouts.partials.logout-form')
<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <!--Sidebar for admin panel -->
            @include('layouts.partials.sidebar-menu')
        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>
                    <form role="search" class="navbar-form-custom" method="post" action="@yield('search-form-action')">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control"
                                   name="top-search" id="top-search">
                        </div>
                    </form>
                </div>

                @include('layouts.partials.top-links')

            </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            @section('main-content')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Welcome in INSPINIA Static SeedProject
                            </h1>
                            <small>
                                It is an application skeleton for a typical web app. You can use it to quickly bootstrap
                                your webapp projects and dev environment for these projects.
                            </small>
                        </div>
                    </div>
                </div>
            @show
        </div>
        <div class="footer">
            @section('footer')
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            @show
        </div>

    </div>
</div>

{{--Block Javascript --}}
@section('javascripts')
    <script src="{{asset('js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
@show

</body>

</html>
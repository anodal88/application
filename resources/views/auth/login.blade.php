@extends('layouts.auth')
@section('title','Sign In')
@section('stylesheets')
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    @parent
    <link href="{{asset('css/plugins/iCheck/custom.css')}}" rel="stylesheet">

@endsection

@section('main-content')
    <div class="container ">

        <div class="modal-dialog modal-sm">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">

                    <h2 class="text-center text-navy">Sign In</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div>
                            <form role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>Email</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" placeholder="Enter email" required autofocus>
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label>Password</label>
                                    <small class="pull-right text-navy"><a tabindex="-1" href="{{ url('/password/reset') }}">Forgot
                                            Your Password?</a></small>
                                    <input id="password" type="password" class="form-control" name="password"
                                           placeholder="Password" required>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Log
                                            in</strong></button>
                                    <label> <input type="checkbox" class="i-checks"> Remember me </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">


                    <a href="{{route('register')}}" type="button" class="btn btn-outline pull-left "> Don’t have an account?</a>
                    <a href="{{route('register')}}" type="button" class="btn btn-outline btn-md btn-primary hidden-xs">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    @parent
    <script src="{{asset('js/plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>
    <script>
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    </script>
    @include('layouts.partials.show-errors')
@endsection

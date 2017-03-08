@extends('layouts.auth')

@section('title','Register')

@section('stylesheets')
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    @parent
    <link href="{{asset('css/plugins/iCheck/custom.css')}}" rel="stylesheet">
@endsection

@section('main-content')
    <div class="container ">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">

                    <h2 class="text-center text-navy">Register</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">

                            <form role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label>Name</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                </div>

                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>Email</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" placeholder="Enter email" required autofocus>
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control" name="password"
                                           placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" >Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                </div>

                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Register</strong></button>

                                    <label class="pull-left">
                                        <input type="checkbox" name="terms"  class="i-checks">
                                        <a>I agree to the terms</a>
                                    </label>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{route('login')}}" type="button" class="btn btn-outline pull-left "> Do you already have an account?</a>
                    <a href="{{route('login')}}" type="button" class="btn btn-outline btn-md btn-primary hidden-xs">Sign In</a>
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
<div class="modal inmodal" id="login-modal" data-backdrop="static" tabindex="-1" role="dialog"  aria-hidden="true">

    <div class="modal-dialog modal-sm">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title text-navy">Sign In</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div >
                        <form role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>Password</label>
                                <small class="pull-right text-navy"><a href="{{ url('/password/reset') }}">Forgot Your Password?</a></small>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Log in</strong></button>
                                <label> <input type="checkbox" class="i-checks"> Remember me </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">


                <button type="button" class="btn btn-outline pull-left "> Don’t have an account?</button>
                <button type="button" class="btn btn-outline btn-md btn-primary">Sign Up</button>
            </div>
        </div>
    </div>
</div>



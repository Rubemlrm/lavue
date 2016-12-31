@extends('layouts.no-auth')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Lavue</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ url('/login') }}" method="post">
      {{ csrf_field() }}
      <!-- email field -->
      <div class="form-group has-feedback">
        <input type="email" class="form-control"
            placeholder="Email"
            name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <!-- password field -->
      <div class="form-group has-feedback">
        <input type="password" class="form-control"
            placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <!-- Errors Display -->

        @if ($errors->has('email'))
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"
              aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            {{ $errors->first('email') }}
          </div>
        @endif

      @if ($errors->has('password'))
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert"
          aria-hidden="true">×</button>
          <h4><i class="icon fa fa-ban"></i> Alert!</h4>
          {{ $errors->first('password') }}
        </div>
      @endif

        <div class="form-group">
          <label>
            <input type="checkbox" name="remember"> Remember Me
          </label>
        </div>



      <!-- Submit button -->
      <div class="row">
        <div class="col-xs-8 col-sm-offset-2">
          <button type="submit"
            class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>

    <p class="text-center"><a href="{{ url('/password/reset') }}">I forgot my password</a></p>

  </div>
  <!-- /.login-box-body -->
</div>
@endsection

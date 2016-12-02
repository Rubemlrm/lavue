@extends('layouts.no-auth')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Lavue</b></a>
  </div>

  <!-- /.Reset password div -->
  <div class="login-box-body">
    <p class="login-box-msg">Reset your password</p>

    <form action="{{ url('/password/reset') }}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="token" value="{{ $token }}">
      <!-- Email field -->
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email"
          name="email" value="{{ $email or old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <!-- Password field -->
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password"
          name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <!-- Password confirmation Field -->
      <div class="form-group has-feedback">
        <input type="password" class="form-control"
          placeholder="Repeat Password" name="password_confirmation">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <!-- Errors Display -->
      <div class="row">
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

      <!-- Submit Form -->
      <div class="col-xs-8 col-sm-offset-2">
        <button type="submit"
          class="btn btn-primary btn-block btn-flat">Reset Password</button>
      </div>
      </div>
    </form>
  </div>
<!-- /.reset password-->
</div>
@endsection

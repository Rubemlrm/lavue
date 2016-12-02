@extends('layouts.no-auth')

<!-- Main Content -->
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Lavue</b></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Password Recover</p>

    <form action="{{ url('/password/email') }}" method="post">
      {{ csrf_field() }}

      <!-- email field -->
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email"
          name="email" {{ old('email') }}>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <!-- Errors display -->
      @if ($errors->has('email'))
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert"
            aria-hidden="true">×</button>
          <h4><i class="icon fa fa-ban"></i> Alert!</h4>
          {{ $errors->first('email') }}
        </div>
      @endif

      <!-- Submit buton -->
      <div class="row">
        <div class="col-xs-8 col-sm-offset-2">
        <button type="submit" class="btn btn-primary btn-block btn-flat">
          Send Password Reset Link</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection



@extends('layouts.no-auth')

@section('content')
<section class="hero is-fullheight is-dark is-bold">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        Lavue
                    </h1>
                    <div class="box">
                        <form action="{{ url('/login') }}" method="post">
                            {{ csrf_field() }}
                            <label class="label">
                                Email
                            </label>
                            <p class="control">
                                <input class="input" placeholder="lavue@lavue.pt" type="text" name="email">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback">
                                    </span>
                                </input>
                            </p>
                            <label class="label">
                                Password
                            </label>
                            <p class="control">
                                <input class="input" placeholder="●●●●●●●" type="password" name="password">
                                    <span class="glyphicon glyphicon-lock form-control-feedback">
                                    </span>
                                </input>
                            </p>
                              @if(Session::get('status') != null)
                                <div class="notification is-success">
                                    <button aria-hidden="true" data-dismiss="alert" type="button" class="delete">
                                    </button>
                                      {{Session::get('status')}}
                                </div>

                            @endif

                            <!-- Errors Display -->
                            @if ($errors->has('email'))
                            <div class="notification is-danger">
                                <button aria-hidden="true" data-dismiss="alert" type="button" class="delete">
                                </button>
                                <h4>
                                    <i class="icon fa fa-ban">
                                    </i>
                                    Alert!
                                </h4>
                                {{ $errors->first('email') }}
                            </div>
                            @endif

                             @if ($errors->has('password'))
                            <div class="notification is-danger">
                                <button aria-hidden="true" data-dismiss="alert" type="button" class="delete">
                                </button>
                                <h4>
                                    <i class="icon fa fa-ban">
                                    </i>
                                    Alert!
                                </h4>
                                {{ $errors->first('password') }}
                            </div>
                            @endif
                            <hr>
                                <p class="control">
                                    <button type="submit" class="button is-primary">
                                        Login
                                    </button>
                                    <button type="reset" class="button is-cancel">
                                        Cancel
                                    </button>
                                </p>
                            </hr>
                        </form>
                        <p class="has-text-centered">
                            <a href="{{ url('/password/reset') }}">
                                Forgot password
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

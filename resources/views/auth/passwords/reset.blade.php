@extends('layouts.no-auth')

@section('content')
 <div class="mdl-card__supporting-text mdl-grid">
                    <form action="{{ url('/password/reset') }}" method="POST">
                        {{ csrf_field() }}
                         <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                            <label class="mdl-textfield__label mdl-color-text--grey" for="textfield_email">
                                email
                            </label>
                            <input autofocus="" class="mdl-textfield__input" id="textfield_email" name="email" required="" type="email" value="{{ $email or old('email') }}" required autofocus/>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                            <label class="mdl-textfield__label mdl-color-text--grey" for="textfield_password">
                                Password
                            </label>
                            <input class="mdl-textfield__input" id="textfield_password" name="password" type="password"/>
                        </div>

                         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                            <label class="mdl-textfield__label mdl-color-text--grey" for="textfield_password_confirm">
                                Password
                            </label>
                            <input class="mdl-textfield__input" id="textfield_password_confirm" name="password_confirmation" type="password"/>
                        </div>


                        <div align="center" class="mdl-cell mdl-cell--12-col ">
                            @if ($errors->has('email'))
                            <span class="mdl-color-text--red-400">
                                <strong>
                                    {{ $errors->first('email') }}
                                </strong>
                            </span>
                            @endif

                            @if ($errors->has('password'))
                            <span class="mdl-color-text--red-400">
                                <strong>
                                    {{ $errors->first('password') }}
                                </strong>
                            </span>
                            @endif
                        </div>

                        <div align="center" class="mdl-cell mdl-cell--12-col send-button">
                            <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored mdl-color--primary" type="submit">
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>


@endsection

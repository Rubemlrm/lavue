@extends('layouts.no-auth')

<!-- Main Content -->
@section('content')
 <div class="mdl-card__supporting-text mdl-grid">
                    <form action="{{ url('/password/email') }}" method="POST">
                        {{ csrf_field() }}


                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                            <label class="mdl-textfield__label mdl-color-text--grey" for="textfield_email">
                                email
                            </label>
                            <input autofocus="" class="mdl-textfield__input" id="textfield_email" name="email" required="" type="email" value="{{ old('email') }}" required/>
                        </div>


                        <div align="center" class="mdl-cell mdl-cell--12-col ">
                            @if ($errors->has('email'))
                            <span class="mdl-color-text--red-400">
                                <strong>
                                    {{ $errors->first('email') }}
                                </strong>
                            </span>
                            @endif
                        </div>

                        <div align="center" class="mdl-cell mdl-cell--12-col send-button">
                            <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored mdl-color--primary" type="submit">
                                 Send Password Reset Link
                            </button>
                        </div>
                    </form>
                </div>
@endsection



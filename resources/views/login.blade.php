<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <title>
                        Lavue
                    </title>
                    <!-- Fonts -->
                    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
                        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                            <link href="https://code.getmdl.io/1.2.1/material.indigo-blue.min.css" rel="stylesheet"/>
                            <!-- Font Awesome -->
                            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
                                <link href="css/login.css" rel="stylesheet">
                                </link>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <div class="mdl-grid">
            <div class="mdl-card mdl-shadow--16dp util-center util-spacing-h--40px">
                <div align="center" class="mdl-card__title mdl-color--blue-800">
                    <h2 class="mdl-card__title-text mdl-color-text--white">
                        Lavue
                    </h2>
                </div>
                <div class="mdl-card__supporting-text mdl-grid">
                    <form action="{{ url('/login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                            <label class="mdl-textfield__label mdl-color-text--grey" for="textfield_email">
                                email
                            </label>
                            <input autofocus="" class="mdl-textfield__input" id="textfield_email" name="email" required="" type="email"/>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                            <label class="mdl-textfield__label mdl-color-text--grey" for="textfield_password">
                                Password
                            </label>
                            <input class="mdl-textfield__input" id="textfield_password" name="password" type="password"/>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">
                                <input class="mdl-checkbox__input" id="remember" type="checkbox">
                                    <span class="mdl-checkbox__label">
                                        Remember me
                                    </span>
                                </input>
                            </label>
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
                        <div align="center" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                            <a href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                        <div align="center" class="mdl-cell mdl-cell--12-col send-button">
                            <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored mdl-color--primary" type="submit">
                                Log In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script defer="" src="https://code.getmdl.io/1.2.1/material.min.js">
        </script>
    </body>
</html>

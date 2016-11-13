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
                                <link href="{{asset('css/login.css')}}" rel="stylesheet">
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
                @yield('content')
            </div>
        </div>
        <script defer="" src="https://code.getmdl.io/1.2.1/material.min.js">
        </script>
    </body>
</html>

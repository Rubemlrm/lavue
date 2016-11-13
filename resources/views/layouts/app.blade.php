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
                                <script>
                                    window.Laravel = <?php echo json_encode([
                                        'csrfToken' => csrf_token(),
                                    ]); ?>
                                </script>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <body>
            <!-- =============================================== -->
            <div id="app">
            </div>
            <!-- =============================================== -->
            <form action="{{ url('/logout') }}" id="logout-form" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <script src="js/vue.js">
            </script>
            <!-- Compressed JavaScript -->
            <script crossorigin="anonymous" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
            </script>
            <script defer="" src="https://code.getmdl.io/1.2.1/material.min.js">
            </script>
            <script src="{{asset('js/app.js')}}">
            </script>
        </body>
    </body>
</html>

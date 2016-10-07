<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="listRoles flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <roles></roles>

            <template id="roles-template">
                <ul class="list-group">
                    <li class="list-group-item" v-for="role in list">@{{role.name}}</li>
                </ul>

            </template>

            <div class="content">
                <div class="title m-b-md">
                <ul class="list-group">

                </ul>
            </div>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://unpkg.com/vue@2.0.1/dist/vue.js" ></script>
        <script src="js/main.js"></script>
    </body>
</html>

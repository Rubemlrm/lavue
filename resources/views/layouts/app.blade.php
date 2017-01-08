<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Lavue</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600"
        rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
      rel="stylesheet">
      <link href="{{asset('css/bulma.css')}}" rel="stylesheet"></link>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

      <link href="{{asset('css/app.css')}}" rel="stylesheet"></link>

    <script>
      window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
      ]); ?>
    </script>
  </head>

  <body>
    <!-- Site wrapper -->

    <!-- =============================================== -->
    <div id="app" >
    </div>
    <!-- =============================================== -->
    <form action="{{ url('/logout') }}" id="logout-form" method="POST"
      style="display: none;">
    {{ csrf_field() }}
    </form>

      <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>

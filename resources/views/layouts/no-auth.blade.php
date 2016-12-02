<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Lavue</title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600"
      rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
      rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
      rel="stylesheet">

    <!-- stylesheets -->
    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous">

    <link href="{{asset('css/AdminLTE.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/skin-blue.min.css')}}" rel="stylesheet"/>

  <body class="hold-transition login-page">
      @yield('content')
      <!-- Compressed JavaScript -->
      <script crossorigin="anonymous"
        integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7"
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
      </script>
      <script crossorigin="anonymous"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
      </script>
      <script src="{{asset('js/app.min.js')}}"></script>
  </body>
</html>

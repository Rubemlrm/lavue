<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lavue</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  rel="stylesheet" type="text/css">

        <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" type="text/css" href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}">
         <link rel="stylesheet" type="text/css" href="{{ asset("/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css")}}">
         <link rel="stylesheet" href="css/app.css"  rel="stylesheet" type="text/css">
          <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    </head>
    <body>
<body class="hold-transition skin-black sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">



  <!-- =============================================== -->

 <div id="app">
  <navbar></navbar>
  <sidebar></sidebar>
 </div>

  <!-- =============================================== -->


</div>

        <script src="js/vue.js"></script>
        <script src="js/app.js"></script>
        <script src="{{asset("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js")}}"></script>
<script src="{{asset("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("/bower_components/AdminLTE/plugins/fastclick/fastclick.js")}}"></script>

        <script src="{{asset("/bower_components/AdminLTE/dist/js/app.min.js")}}"></script>
    </body>
</html>


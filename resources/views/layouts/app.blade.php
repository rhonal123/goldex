<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Goldex</title>

    {{ Html::style('assets/stylesheets/style.css?fecha=06010218') }}
    {{ Html::style('vendor/metisMenu/metisMenu.min.css?fecha=06010218') }}

    {{ Html::style('vendor/font-awesome/css/font-awesome.min.css?fecha=06010218') }}

    {{ Html::style('assets/stylesheets/bootstrap-datepicker3.css?fecha=06010218') }}
    {{ Html::style('assets/stylesheets/select2.min.css?fecha=06010218') }}
    {{ Html::style('assets/stylesheets/select2-bootstrap.css?fecha=06010218') }}

    {{ Html::style('assets/stylesheets/bootstrap-datetimepicker.min.css?fecha=06010218') }}
    {{ Html::style('assets/stylesheets/bootstrap-datetimepicker-standalone.css?fecha=06010218') }}
 
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    {{ Html::script('vendor/jquery/jquery.min.js?fecha=06010218') }}
    {{ Html::script('vendor/bootstrap/js/bootstrap.min.js?fecha=06010218') }}
    {{ Html::script('assets/javascripts/datepicker.js?fecha=06010218') }}
    {{ Html::script('assets/javascripts/select2.min.js?fecha=06010218') }}
    {{ Html::script('assets/javascripts/bootstrap-datepicker.es.js?fecha=06010218') }}
    {{ Html::script('vendor/metisMenu/metisMenu.min.js?fecha=06010218') }}
    {{ Html::script('assets/javascripts/moment.js?fecha=06010218') }}
    {{ Html::script('assets/javascripts/bootstrap-datetimepicker.min.js?fecha=06010218') }}
    {{ Html::script('assets/javascripts/index.js?fecha=06010218') }}

</head>
<body>
@if (!Auth::guest())
  <div id="wrapper">
    @include('layouts.nav')
    <div id="page-wrapper">
      <div class="row">
        @section('header')
        @show
        @yield('content')
        </div>
      </div>
    </div>
    <!-- /#wrapper -->
@else 
  @include('auth.form')
@endif

</body>

</html>
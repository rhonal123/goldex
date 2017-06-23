<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Goldex</title>   
 
    {{ Html::style('assets/stylesheets/style.css') }}
    {{ Html::style('assets/stylesheets/bootstrap-datepicker3.css') }}
    {{ Html::style('assets/stylesheets/select2.min.css') }}
    {{ Html::style('assets/stylesheets/select2-bootstrap.css') }}
 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<body id="app-layout">
    <div class="container">
      <!-- Menu -->
      @if (!Auth::guest())
        {{ Auth::user()->name }} <span class="caret"></span>
        <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
      @endif
    </div>
    <div class="container-fuild">
      @yield('content')
    </div>
</body>
    <!-- JavaScripts -->
    {{ Html::script('assets/javascripts/jquery3.min.js') }}
    {{ Html::script('assets/javascripts/datepicker.js') }}
    {{ Html::script('assets/javascripts/select2.min.js') }}

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

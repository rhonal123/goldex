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
<!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
-->
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
  <section class="container-fluid cabezera">
    <div class="col-md-4">
      <h3 class="titulo-head">Goldex</h3>
    </div>
    @if (!Auth::guest())
      <div class="col-md-8" align="right" style="margin-top: 15px;">
        <div class="btn-group" style=" margin-right: 40px;">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong>{{ Auth::user()->name }}</strong> <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="split-button">
            <li role="menuitem"><a class="dropdown-item fa fa-btn fa-key" >Cambiar Contraseña</a></li>
            <li class="divider dropdown-divider"></li>
            <li role="menuitem">
              <a class="dropdown-item fa fa-btn fa-sign-out" href="{{ url('/logout') }}">Cerrar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    @endif
  </section>
  
<section class="container-fluid" >
  @if (!Auth::guest())
  <div class="col-md-2 sidenav well well-sm">
    @include('layouts.menu')
  </div>
  <div class="col-md-10 sidenav well well-sm">
      @section('header')

      @show
      
      @yield('content')
  </div>
  @else
    @include('auth.form')
  @endif
</section>

</body>
    <!-- JavaScripts -->
    {{ Html::script('assets/javascripts/jquery3.min.js') }}
    {{ Html::script('assets/javascripts/bootstrap.min.js') }}
    {{ Html::script('assets/javascripts/datepicker.js') }}
    {{ Html::script('assets/javascripts/select2.min.js') }}
 
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>






<!DOCTYPE html>
<html>
  <head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>MiDinero</title>   

    {{ Html::style('assets/stylesheets/style.css') }}
    {{ Html::style('assets/stylesheets/bootstrap-datepicker3.css') }}
    {{ Html::style('assets/stylesheets/select2.min.css') }}
    {{ Html::style('assets/stylesheets/select2-bootstrap.css') }}


    {{ Html::script('assets/javascripts/jquery3.min.js') }}
    {{ Html::script('assets/javascripts/Reflect.js') }}
    {{ Html::script('assets/javascripts/zone.js') }}
    {{ Html::script('assets/javascripts/datepicker.js') }}
    {{ Html::script('assets/javascripts/select2.min.js') }}
    {{ Html::script('assets/javascripts/bundle.js') }}

    </head>
    <body>
      <app-component>
        <div class="container-fluid"> 
          <div class="col-md-12">
            <div class="col-md-6 col-md-offset-3">
              <div class="progress" style="margin-top: 30%;">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                 <span>Cargando......</span>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </app-component>
    </body>
</html>
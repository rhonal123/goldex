<!DOCTYPE html>
<html lang="en">
<head>
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
    {{ Html::script('assets/javascripts/bundle2017-01-02.js') }}

</head>
<body>
    @yield('content')
</body>
</html>
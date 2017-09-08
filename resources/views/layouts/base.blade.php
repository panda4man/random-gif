<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
        <link type="stylesheet" href="{{mix('css/app.css')}}">

        <title>Laravel</title>

        <script type="text/javascript">
            window.Laravel = <?= json_encode([
                'name' => config('app.name')
            ]) ?>;
        </script>
    </head>
    <body>
        @yield('content')

        <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
    </body>
</html>

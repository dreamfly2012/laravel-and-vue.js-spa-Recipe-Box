<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="/laravel-spa/public{{ mix('css/app.css') }}">
    </head>
    <body>
        <div id="root"></div>
    </body>
    <script type="text/javascript" src="/laravel-spa/public{{ mix('js/app.js') }}"></script>
</html>

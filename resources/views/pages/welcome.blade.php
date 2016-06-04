<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UAM: Today is the Difference</title>
        <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
        <meta id="token" name="token" value="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        {!! HTML::style('css/app.css') !!}
    </head>

    <body>
        @include('partials.header')

        @include('partials.main')

        @include('partials.footer')

        {!! HTML::script('js/app.js') !!}
    </body>
</html>

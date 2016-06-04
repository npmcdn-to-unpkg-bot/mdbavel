<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title', 'UAM: Today is the Difference') </title>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    <meta id="token" name="token" value="{{ csrf_token() }}">

    {!! HTML::style('css/app.css') !!}
    @stack('styles')
    <!--[if lt IE 9]>
    {!! HTML::script('js/html5shiv-3.7.0.js') !!}
    {!! HTML::script('js/respond-1.3.0.min.js') !!}
    <![endif]-->
</head>

<body class="@yield('body_class')">
    @include('partials.header')

    @include('partials.main')

    @include('partials.footer')

{!! HTML::script('js/app.js') !!}
@stack('scripts')
<script>
    $(function() {
        setInterval(function(){
            var divUtc = $('#divUTC');
            var divLocal = $('#divLocal');
            //put UTC time into divUTC
            divUtc.text(moment.utc().format('LLLL'));

            //get text from divUTC and conver to local timezone
            var localTime  = moment.utc().toDate();
            localTime = moment(localTime).format('LLLL');
            divLocal.text(localTime);
        },1000);
    });
</script>
</body>
</html>
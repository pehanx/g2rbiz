<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('assets/css/styles.css') }}">
    <title>@lang('messages.title')</title>
</head>
<body>

    @include('inc.header')

    <main>
        @yield('content')
    </main>

    @include('inc.footer')

</body>
</html>

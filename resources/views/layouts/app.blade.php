<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website To do list</title>
    <link rel="stylesheet" href="{{url('/')}}/css/app.css">
</head>
<body>
    @include('inc.navbar');
    <div class="container">
        @include('inc.message')
        @yield('content')
    </div>

    <div id="footer" class="text-center">
        <p>Copyright &copy; {{date('Y')}} </p>
    </div>

</body>
</html>
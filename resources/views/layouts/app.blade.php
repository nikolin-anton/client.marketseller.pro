<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/main.cd09728f.chunk.js')}}" ></script>
    <script src="{{asset('js/2.9955d556.chunk.js')}}"></script>
    <script src="{{asset('js/frontend.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/main.dd79597f.chunk.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
    <title>Техноиндекс</title>
</head>
<body>
    <div id="root">
        <div class="App">
            <div class="client-content">
                @yield('content')
            </div>
            @extends('inc.footer')
        </div>
    </div>

</body>
</html>

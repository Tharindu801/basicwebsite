<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')

    <div class="container">
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
                
                @include('inc.massages')

                @yield('content')
            </div>

            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
                
            </div>
        </div>
    </div>
    

    <footer id="footer" class="text-center">
        <p>Copyright 2019 &copy; Acme</p>
    </footer>

    
</body>
</html>
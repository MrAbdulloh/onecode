<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">{{config('app.name')}}</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('post.index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.index') }}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register.index') }}">Register</a>
                </li>

            </ul>
            {{--                <form class="d-flex">--}}
            {{--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
            {{--                    <button class="btn btn-outline-success" type="submit">Search</button>--}}
            {{--                </form>--}}
        </div>
    </div>
</nav>
    @yield('content')
</body>
</html>

<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="http://localhost/B/public/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a0e227089e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <link href="http://localhost/B/public/css/main.css" rel="stylesheet"></link>
</head>
<body class="antialiased">
<header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/B/public/home">
                <img src="http://localhost/B/public/Logo.png" width="50" height="44">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="http://localhost/B/public/home"><i class="fa-solid fa-house fa-xs"> Home</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/B/public/services"><i class="fa-solid fa-xs">Our services</i></a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="http://localhost/B/public/about"><i class="fa-solid  fa-xs">About us</i></a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="http://localhost/B/public/ourlocation"><i class="fa-solid  fa-xs">Our location</i></a>
                    </li>
                </ul>
                <form class="d-flex">
                    @auth("web")
                    <a class="btn btn-secondary" href="{{route("logout")}}" role="button"><i class="fa-solid fa-right-to-bracket fa-xs">Log out</i></a>
                    @endauth
                @guest("web")
                            <a class="btn btn-secondary" href="{{route("signin")}}" role="button"><i class="fa-solid fa-right-to-bracket fa-xs">Sign in</i></a>
                @endguest
                </form>
            </div>
        </div>
    </nav>
</header>
<footer class="footer fixed-bottom  py-3 bg-dark">
    <div class="container-fluid">
        <section class="mb-4">
            <a class="btn btn-outline-light btn-floating m-1" href="https://t.me/framecore" role="button"
            ><i class="fab fa-telegram"></i
                ></a>

            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-google"></i
                ></a>

            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/framecore.production/" role="button"
            ><i class="fab fa-instagram"></i
                ></a>
    </div>
</footer>
@yield('content')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('head')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/layouts/crabo.css') }}">  
</head>
<body>
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid col-lg-8 nav-div">
        <a class="navbar-brand" href="#">Crabo Kft.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
                <a class="nav-link active" href="#">Főoldal</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Járműveink
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('crabo.electric-cars') }}">Elektromos autók</a></li>
                    <li><a class="dropdown-item" href="{{ route('crabo.passanger-cars') }}">Személyautók</a></li>
                    <li><a class="dropdown-item" href="{{ route('crabo.vans') }}">Furgonok</a></li>
                    <li><a class="dropdown-item" href="{{ route('crabo.trucks') }}">Teherautók</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kapcsolat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Szabályzat</a>
            </li>
        </ul>
        <form class="d-flex">
            <a class="btn my-2 my-sm-0 ajanlat" type="submit">Ajánlat kérése</a>
        </form>
        </div>
    </div>
    </nav>

    @yield('content')
    <div class="footer-div">
    <div class="container mx-auto">
        <footer class="py-5 ">
            <div class="row justify-content-center" style="color: white">
                <div class="col-2">
                    <h5>Járműveink</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Elektromos autók</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Személyautók</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Furgonok</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Teheratók</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h5>Egyéb</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kapcsolat</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Szabályzat</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Ajánlat kérése</a></li>
                    </ul>
                </div>

                <div class="col-4">
                    <h5>Itt vagyunk</h5>
                    <div class="map">
                        <iframe width="400" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=Budapest,%20Gy%C3%B6mr%C5%91i%20%C3%BAt%20140,%201103&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
                <div class="col-2">
                    <h5>Nyitvatartás</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">H-P: 10:00 - 18:00</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sz: 8:00 - 20:00</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">V: 10:00 - 18:00</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-center pt-4 mt-4 border-top">
                <p class="text-muted">&copy; 2022 Crabo Kft. Minden jog fenttartva.</p>
            </div>
        </footer>
    </div>
    </div>
    @yield('script')
</body>
</html>
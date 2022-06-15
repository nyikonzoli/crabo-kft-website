<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0a894acb29.js" crossorigin="anonymous"></script>
    @yield('head')
    <link rel="stylesheet" href="{{ asset('css/layouts/admin.css') }}">  
</head>
<body>
    <div class="wrapper">
        <div class="menu">
            <ul>
                <li class="brand-li"><a href="" class="brand">Crabo Kft.</a></li>
                <li><a href=""><i class="fa-solid fa-house"></i>Főoldal</a></li>
                <li><a href=""><i class="fa-solid fa-car"></i>Személyautók</a></li>
                <li><a href=""><i class="fa-solid fa-truck"></i>Teherautók</a></li>
                <li><a href=""><i class="fa-solid fa-bolt"></i>Elektromos autók</a></li>
                <li><a href=""><i class="fa-solid fa-gears"></i>Beállítások</a></li>
            </ul>
        </div>
        <div class="main">
            @yield('content')
        </div>
    </div>
</body>
</html>
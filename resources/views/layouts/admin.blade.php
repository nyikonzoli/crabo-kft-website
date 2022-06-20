<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0a894acb29.js" crossorigin="anonymous"></script>
    @yield('head')
    <link rel="stylesheet" href="{{ asset('css/layouts/admin.css') }}">  
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="menu">
            <ul>
                <li class="brand-li"><a href="{{ route('admin.index') }}" class="brand">Crabo Kft.</a></li>
                <li><a href="{{ route('admin.index') }}"><i class="fa-solid fa-house"></i>Főoldal</a></li>
                <li><a href=""><i class="fa-solid fa-car"></i>Személyautók</a></li>
                <li><a href=""><i class="fa-solid fa-van-shuttle"></i>Furgonok</a></li>
                <li><a href=""><i class="fa-solid fa-truck"></i>Teherautók</a></li>
                <li><a href=""><i class="fa-solid fa-bolt"></i>Elektromos autók</a></li>
                <li><a href="{{ route('equipment.index') }}"><i class="fa-solid fa-circle-plus"></i>Kiegészítők</a></li>
                <li><a href="{{ route('bodywork.index') }}"><i class="fa-solid fa-car-rear"></i>Karosszériák</a></li>
                <li><a href="{{ route('gearbox.index') }}"><i class="fa-solid fa-gears"></i>Sebességváltók</a></li>
                <li><a href="{{ route('fuel.index') }}"><i class="fa-solid fa-gas-pump"></i>Üzemanyagok</a></li>
            </ul>
        </div>
        <div class="main">
            @yield('content')
        </div>
    </div>
    @yield('script')
</body>
</html>
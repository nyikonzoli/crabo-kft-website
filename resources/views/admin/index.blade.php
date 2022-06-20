@extends('layouts.admin')
    
@section('title', 'Kezelőfelület')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/index.css') }}">  
@endsection

@section('content')
    <div class="content col-lg-9">
        <div class="top-text box-shape">
            <h1>Üdvözöllek az adminisztrációs felületen!</h1>
        </div>
        <h1 class="article-title">Járművek</h1>
        <div class="boxes">
            <div class="box box-shape box-black">
                <h1>{{ $data["vehicles"] }}</h1>
                <p>jármű összesen</p>
            </div>
            <div class="box box-shape box-blue clickable">
                <h1>{{ $data["passengerCars"] }}</h1>
                <p>személyautó</p>
            </div>
            <div class="box box-shape box-green clickable">
                <h1>{{ $data["vans"] }}</h1>
                <p>furgon</p>
            </div>
            <div class="box box-shape box-pink clickable">
                <h1>{{ $data["trucks"] }}</h1>
                <p>teherautó</p>
            </div>
            <div class="box box-shape box-red clickable">
                <h1>0</h1>
                <p>elektromos autó</p>
            </div>
        </div>
        <h1 class="article-title">Típusok</h1>
        <div class="boxes">
            <a href="{{ route('equipment.index') }}" class="box box-shape box-blue clickable">
                <h1>{{ $data["equipments"] }}</h1>
                <p>féle kiegészítő</p>
            </a>
            <a href="{{ route('fuel.index') }}" class="box box-shape box-pink clickable">
                <h1>{{ $data["fuels"] }}</h1>
                <p>fajta üzemanyag</p>
            </a>
            <a href="{{ route('bodywork.index') }}" class="box box-shape box-red clickable">
                <h1>{{ $data["bodyworks"] }}</h1>
                <p>karosszéria</p>
            </a>
            <a href="{{ route('gearbox.index') }}" class="box box-shape box-black clickable">
                <h1>{{ $data["gearboxes"] }}</h1>
                <p>sebességváltó</p>
            </a>

        </div>
    </div>
@endsection
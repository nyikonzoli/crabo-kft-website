@extends('layouts.main')

@section('title', 'Crabo - ' . $vehicle->brand . " " . $vehicle->model)

@section('head')
    <link rel="stylesheet" href="{{ asset('css/crabo/vehicle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crabo/index.css') }}">
@endsection

@section('content')
    <div class="col-lg-8 mx-auto">
        <h1 class="title" style="text-align:center">{{ $vehicle->brand . " " . $vehicle->model }}</h1>
        <div class="top">
            <div class="img-div col-lg-6">
                <img src="http://localhost:8881/images/AAA-000/97YW2w6JQZRKDZkxa9qor81yHnHZoIuFyhhAkjA6.png" alt="" class="col-lg-12">
            </div>
            <div class="text-div">
                <ul>
                    <li>Rendszám: {{ $vehicle->plate }}</li>
                    <li>Évjárat: {{ $vehicle->year }}</li>
                    <li>Üzemanyag: {{ $vehicle->fuel->type }}</li>
                    <li>Sebességváltó: {{ $vehicle->gearbox->type }}</li>
                    <li>Karosszéria: {{ $vehicle->bodywork->type }}</li>
                    <li>Ajtók száma: {{ $vehicle->doors }}</li>
                    <li>Ülőhelyek száma: {{ $vehicle->seats }}</li>
                    <li>Külső szín: {{ $vehicle->outer_color }}</li>
                    <li>Belső szín: {{ $vehicle->inner_color }}</li>
                    <li>Motor: {{ $vehicle->motor }}</li>
                </ul>
            </div>
        </div>
        <div class="description">
            <button class="collapsible" id="btn">Járművek <i class="fa-solid fa-angle-down"></i></button>
            <div id="content">
                <p>{{ $vehicle->description }}</p>
            </div>
        </div>
    </div>
@endsection

@section('script')
 <script>
    function collapse() {
        var content = document.getElementById("content");
        if (content.style.maxHeight){
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = "150px";
        } 
    }

    document.getElementById("btn").addEventListener("click", function(){
        collapse();
    });
 </script>
@endsection
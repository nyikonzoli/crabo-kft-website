@extends('layouts.main')

@section('title', 'Crabo - ' . $title)

@section('head')
    <link rel="stylesheet" href="{{ asset('css/crabo/index.css') }}">
@endsection

@section('content')
    <div class="col-lg-8 mx-auto">
        <h1 class="title" style="text-align: center; margin-top: 5rem">{{ $title }}</h1>
        <div class="vehicles-wrapper">
            @foreach ($vehicles as $vehicle)
                <a class="card col-lg-4 col-md-6 col-sm-10" style="margin-bottom: 2rem" href="{{ route('crabo.vehicle', ['id' => $vehicle->id]) }}">
                    <div class="image-container">
                        <img class="card-img-top" src="http://localhost:8881/images/AAA-000/97YW2w6JQZRKDZkxa9qor81yHnHZoIuFyhhAkjA6.png" alt="Card image cap">
                        <span class="action">
                        <div class="inner-div">
                            <ul>
                                <li>{{ $vehicle->seats }} személyes</li>
                                <li>{{ $vehicle->gearbox->type }} váltó</li>
                                <li class="break"></li>
                                <li>1 napra: 10999 Ft/nap</li>
                                <li>7 napra: 9500 Ft/nap</li>
                                <li>1 hónapra: 8799 Ft/nap</li>
                            </ul>
                        </div>
                        </span>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">{{ $vehicle->brand }} {{ $vehicle->model }}</h5>
                    <div class="price-wrapper">
                        <h4>Akár már </h4><h3 class="price">8799</h3><h4> Ft/nap-tól</h4>
                    </div>
                    </div>
                </a>
            @endforeach
            
        </div>
    </div>
@endsection
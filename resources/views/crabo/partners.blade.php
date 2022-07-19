@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="{{ asset('css/crabo/index.css') }}">
@endsection

@section('title', 'Crabo Rent - Partnerek')

@section('content')
<div class="rolunk-wrapper  ">
            <div class="col-lg-8 mx-auto">
                <div style="text-align:center" class="py-3">
                    <h1 class="rolunk">PARTNEREK</h1>
                    <p class="col-lg-7 mx-auto rolunk-p">Az évek során számos zenekarral, illetve rendezvénykivitelező céggel dolgoztunk együtt és bizalmas kapcsolatot alakítottunk ki velük.</p>
                </div>
            </div>
        </div>
    <div class="col-lg-8 mx-auto">
        <div class="d-flex flex-row flex-wrap justify-content-center">
            @foreach($partners as $partner)
                <div class="card mb-3" style="width: 18rem; margin:1rem;">
                    <img src="{{ asset($partner->uri) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center">{{ $partner->name }}</h5>
                    </div>
                </div>
            @endforeach
            @foreach($partners as $partner)
                <div class="card mb-3" style="width: 18rem; margin:1rem;">
                    <img src="{{ asset($partner->uri) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center">{{ $partner->name }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
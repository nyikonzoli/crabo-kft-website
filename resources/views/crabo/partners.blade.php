@extends('layouts.main')

@section('title', 'Crabo Rent - Partnerek')

@section('content')
    <div class="col-lg-8 mx-auto">
        <div class="partner-wrapper">
            @foreach($partners as $partner)
                <div class="card" style="width: 18rem; margin:1rem;">
                    <img src="{{ asset($partner->uri) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center">{{ $partner->name }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
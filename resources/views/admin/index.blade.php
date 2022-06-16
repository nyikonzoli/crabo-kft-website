@extends('layouts.admin')
    
@section('title', 'Kezelőfelület')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/index.css') }}">  
@endsection

@section('content')
    <div class="content col-lg-8">
        <div class="top-text box-shape">
            <h1>Üdvözöllek az adminisztrációs felületen!</h1>
        </div>
        <div class="boxes">
            <div class="box box-shape box-black">
                <h1>19</h1>
                <p>jármű összesen</p>
            </div>
            <div class="box box-shape box-blue clickable">
                <h1>12</h1>
                <p>személyautó</p>
            </div>
            <div class="box box-shape box-pink clickable">
                <h1>7</h1>
                <p>teherautó</p>
            </div>
            <div class="box box-shape box-red clickable">
                <h1>0</h1>
                <p>elektromos autó</p>
            </div>
        </div>
    </div>
@endsection
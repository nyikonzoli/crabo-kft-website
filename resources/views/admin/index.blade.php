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
        <h1 class="article-title">Járművek</h1>
        <div class="boxes">
            <div class="box box-shape box-black">
                <h1>19</h1>
                <p>jármű összesen</p>
            </div>
            <div class="box box-shape box-blue clickable">
                <h1>12</h1>
                <p>személyautó</p>
            </div>
            <div class="box box-shape box-green clickable">
                <h1>0</h1>
                <p>furgon</p>
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
        <h1 class="article-title">Típusok</h1>
        <div class="boxes">
            <div class="box box-shape box-pink clickable">
                <h1>3</h1>
                <p>üzemanyag</p>
            </div>
            <div class="box box-shape box-red clickable">
                <h1>2</h1>
                <p>karosszéria</p>
            </div>
            <div class="box box-shape box-black clickable">
                <h1>1</h1>
                <p>sebességváltó</p>
            </div>
            <div class="box box-shape box-blue clickable">
                <h1>4</h1>
                <p>jármű</p>
            </div>
        </div>
    </div>
@endsection
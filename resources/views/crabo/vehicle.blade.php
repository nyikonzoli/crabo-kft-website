@extends('layouts.main')

@section('title', 'Crabo - ' . $vehicle->brand . " " . $vehicle->model)

@section('head')
    <link rel="stylesheet" href="{{ asset('css/crabo/vehicle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crabo/index.css') }}">
@endsection

@section('content')
<div class="rolunk-wrapper  ">
            <div class="col-lg-8 mx-auto">
                <div style="text-align:center" class="py-3">
                    <h1 class="rolunk">FIGYELEM</h1>
                    <p class="col-lg-7 mx-auto rolunk-p">Autóbérlés előtt mindenképpen olvassa el a szabályzat menüpontban található pontokat.</p>
                </div>
            </div>
        </div>
    <div class="col-lg-8 col-10 mx-auto">
        <h1 class="title" style="text-align:center">{{ $vehicle->brand . " " . $vehicle->model }}</h1>
        <div class="d-flex flex-xxl-row flex-xl-row flex-lg-column flex-md-column flex-sm-column flex-column align-items-center">
            <div class="mb-3 img-div col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div id="carouselExampleControls" class="carousel slide corner" data-bs-ride="carousel">
                <div class="carousel-inner corner">
                    <div class="carousel-item active">
                        <img src="http://localhost:8881/vehicles/DSC_2440.jpg" class="d-block w-100 corner" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://localhost:8881/vehicles/DSC_2441.jpg" class="d-block w-100 corner" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Előző</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Következő</span>
                </button>
                </div>
            </div>
            <div class="text-div col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <table class="table mx-auto table-striped" style="text-align:center; width: 300px">
                    <tbody>
                        <tr>
                            <td>Rendszám</td>
                            <td>{{ $vehicle->plate }}</td>
                        </tr>
                        <tr>
                            <td>Évjárat</td>
                            <td>{{  $vehicle->year }}</td>
                        </tr>
                        <tr>
                            <td>Üzemanyag</td>
                            <td>{{ $vehicle->fuel->type }}</td>
                        </tr>
                        <tr>
                            <td>Sebességváltó</td>
                            <td>{{ $vehicle->gearbox->type }}</td>
                        </tr>
                        <tr>
                            <td>Karosszéria</td>
                            <td>{{ $vehicle->bodywork->type }}</td>
                        </tr>
                        <tr>
                            <td>Ajtók száma</td>
                            <td>{{ $vehicle->doors }}</td>
                        </tr>
                        <tr>
                            <td>Ülőhelyek száma</td>
                            <td>{{ $vehicle->seats }}</td>
                        </tr>
                        <tr>
                            <td>Külső szín</td>
                            <td>{{ $vehicle->outer_color }}</td>
                        </tr>
                        <tr>
                            <td>Belső szín</td>
                            <td>{{ $vehicle->inner_color }}</td>
                        </tr>
                        <tr>
                            <td>Motor</td>
                            <td>{{ $vehicle->motor }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="description mx-auto col-lg-8 col-12">
            <button class="collapsible" id="btn">Leírás <i class="fa-solid fa-angle-down"></i></button>
            <div id="content">
                <p>{{ $vehicle->description }}</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit mollitia sapiente ipsum recusandae a facilis facere laudantium quia nihil aliquid ad fuga, perspiciatis laboriosam quibusdam eaque veritatis eum inventore at.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit mollitia sapiente ipsum recusandae a facilis facere laudantium quia nihil aliquid ad fuga, perspiciatis laboriosam quibusdam eaque veritatis eum inventore at.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit mollitia sapiente ipsum recusandae a facilis facere laudantium quia nihil aliquid ad fuga, perspiciatis laboriosam quibusdam eaque veritatis eum inventore at.</p>
            </div>
        </div>
    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 col-xs-10 email mx-auto">
          <h1 style="text-align: center;" class="email-text">Ajánlat kérése</h1>
          <div>
            {{ Form::open(["route" => "crabo.email"]) }}
                <div class="mb-3">
                    {{ Form::label('name', 'Név', ["class" => "form-label"]) }}
                    {{ Form::text('name', '', ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('email', 'Email', ["class" => "form-label"]) }}
                    {{ Form::text('email', '', ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        {{ Form::radio('role', 'magan', true, ["class" => "form-check-input", "onclick" => "magan();"]) }}
                        {{ Form::label('role', 'Magánszemély', ["class" => "form-label"]) }}
                    </div>
                    <div class="form-check">
                        {{ Form::radio('role', 'ceg', false, ["class" => "form-check-input", "onclick" => "ceg();"]) }}
                        {{ Form::label('role', 'Cég', ["class" => "form-label"]) }}
                    </div>
                </div>
                <div class="mb-3" id="company" style="display: none">
                    {{ Form::label('company', 'Cégnév', ["class" => "form-label"]) }}
                    {{ Form::text('company', '', ["class" => "form-control"]) }}
                </div>
                <div class="mb-3" id="tax" style="display: none">
                    {{ Form::label('tax', 'Adóazonosító jel', ["class" => "form-label"]) }}
                    {{ Form::text('tax', '', ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('content', 'Tartalom', ["class" => "form-label"]) }}
                    {{ Form::textarea('content', '', ["class" => "form-control"]) }}
                </div>
                <div style="text-align: center">
                  {{ Form::submit('Ajánlat kérése', ["class" => "btn btn-email mb-3"]) }}
                </div>
            {{ Form::close() }}
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
            content.style.maxHeight = "fit-content";
        } 
    }

    document.getElementById("btn").addEventListener("click", function(){
        collapse();
    });

    function magan(){
      document.getElementById("company").style.display = "none";
      document.getElementById("tax").style.display = "none";
    }

    function ceg(){
      document.getElementById("company").style.display = "block";
      document.getElementById("tax").style.display = "block";
    }
 </script>
@endsection
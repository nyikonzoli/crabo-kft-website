@extends('layouts.admin')

@section('title', 'Crabo - ' . $vehicle->plate)

@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/vehicle.css') }}">
@endsection

@section('content')
    <div class="col-lg-8 mx-auto">
        <h1>{{ $vehicle->brand . " " . $vehicle->model }}</h1>
        {{ Form::open(["route" => ['vehicle.update', 'id' => $vehicle->id], "method" => "put", "id" => "uploadForm", "enctype" => "multipart/form-data"]) }}
            <div class="mb-3">
                {{ Form::label('plate', 'Rendszám', ["class" => "form-label"]) }}
                {{ Form::text('plate', $vehicle->plate, ["class" => "form-control short-input", "id" => "plate"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('brand', 'Márka', ["class" => "form-label"]) }}
                {{ Form::text('brand', $vehicle->brand, ["class" => "form-control", "id" => "brand"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('model', 'Model', ["class" => "form-label"]) }}
                {{ Form::text('model', $vehicle->model, ["class" => "form-control", "id" => "model"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('year', 'Gyártási év', ["class" => "form-label"]) }}
                {{ Form::text('year', $vehicle->year, ["class" => "form-control short-input", "onkeypress" => "validate(event)", "id" => "year"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('doors', 'Ajtók száma', ["class" => "form-label"]) }}
                {{ Form::text('doors', $vehicle->doors, ["class" => "form-control short-input", "onkeypress" => "validate(event)", "id" => "doors"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('seats', 'Ülések száma', ["class" => "form-label"]) }}
                {{ Form::text('seats', $vehicle->seats, ["class" => "form-control short-input", "onkeypress" => "validate(event)", "id" => "seats"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('outer_color', 'Külső szín', ["class" => "form-label"]) }}
                {{ Form::text('outer_color', $vehicle->outer_color, ["class" => "form-control", "id" => "outer_color"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('inner_color', 'Belső szín', ["class" => "form-label"]) }}
                {{ Form::text('inner_color', $vehicle->inner_color, ["class" => "form-control", "id" => "inner_color"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('vehicle_type_id', 'Jármű típusa', ["class" => "form-label"]) }}
                {{ Form::select('vehicle_type_id', $vehicleTypes, $vehicle->vehicle_type_id, ["class" => "form-control", "id" => "vehicle_type_id"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('bodywork_type_id', 'Karosszéria típusa', ["class" => "form-label"]) }}
                {{ Form::select('bodywork_type_id', $bodyworkTypes, $vehicle->bodywork_type_id, ["class" => "form-control", "id" => "bodywork_type_id"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('gearbox_type_id', 'Sebességváltó típusa', ["class" => "form-label"]) }}
                {{ Form::select('gearbox_type_id', $gearboxTypes, $vehicle->gearbox_type_id, ["class" => "form-control" ,"id" => "gearbox_type_id"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('fuel_type_id', 'Üzemanyag típusa', ["class" => "form-label"]) }}
                {{ Form::select('fuel_type_id', $fuelTypes, $vehicle->fuel_type_id, ["class" => "form-control", "id" => "fuel_type_id"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('description', 'Leírás', ["class" => "form-label"]) }}
                {{ Form::textarea('description', $vehicle->description, ["class" => "form-control", "id" => "description"]) }}            
            </div>
            <div class="mb-3">
                {{ Form::label('motor', 'Motor', ["class" => "form-label"]) }}
                {{ Form::textarea('motor', $vehicle->motor, ["class" => "form-control", "rows" => 2, "id" => "motor"]) }}            
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Képek</label>
                <input class="form-control" type="file" id="images" name="images[]" multiple>
                <div id="preview"></div>
            </div>
            <label class="form-label">Kiegészítők</label>
            <div class="mb-3 mx-3">
                @foreach ( $equipments as $i => $equipment )
                {!! Form::checkbox( 'equipments[' . $i . ']', 
                                $equipment,
                                (in_array($i, array_column($equipment_vehicle->toArray(), 'equipment_id'))),
                                ['class' => 'md-check mr-2', 'id' => $equipment] 
                                ) !!}
                {!! Form::label($equipment,  $equipment) !!}
                <br>
                @endforeach
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a class="btn btn-primary mb-3 save">Mentés</a>
        {{ Form::close() }}
    </div>
@endsection

@section('script')
<script>
    function validate(evt) {
        var theEvent = evt || window.event;
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }                     
    }
</script>

@endsection
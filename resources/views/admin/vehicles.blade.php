@extends('layouts.admin')

@section('title', 'Crabo - Járművek')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/type.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/vehicles.css') }}">
@endsection

@section('content')
    <div class="col-lg-8 mx-auto">

        <h1>Járművek</h1>
        <button onclick="newType()" class="btn btn-primary new-type"><i class="fa-solid fa-square-plus"></i>Új jármű hozzáadása</button>
        <p>Összes jármű:</p>
            <div class="query-div">
                <div class="mb-3">
                    {{ Form::label('vehicle_type', 'Jármű típusa', ["class" => "form-label"]) }}
                    {{ Form::select('vehicle_type', $vehicleTypes, null, ["class" => "form-control", "placeholder" => "Összes", "id" => "vehicle_type", "onchange" => "queryChange();"]) }}            
                </div>
                <a href="{{ route('vehicle.index') . '?type=all' }}" class="btn btn-primary" id="querya">Szűrés</a>
            </div>
        <table class="col-lg-5 table table-striped" id="types">
            @foreach($vehicles as $vehicle)
                <tr>
                    <td><p class="my-auto">{{ $vehicle["plate"] }}</p></td>
                    <td><p class="my-auto">{{ $vehicle["brand"] . " " . $vehicle["model"] }}</p></td>
                    <td><p class="my-auto">{{ $vehicle["type"] }}</p></td>
                    <td class="buttons">
                        <a class="btn btn-primary" href='{{ route("vehicle.show", ["id" => $vehicle["id"]]) }}'>Módosítás</a>
                        <button class="btn btn-danger" onclick="deleteVehicle('{{ route("vehicle.destroy", ["id" => $vehicle["id"]]) }}', '{{ $vehicle["plate"] }}')">Törlés</button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="modal" id="newModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Új jármű felvétele</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{ Form::open(["route" => "vehicle.store", "method" => "post", "id" => "newTypeForm", "enctype" => "multipart/form-data"]) }}
            <div class="modal-body">
                <div class="mb-3">
                    {{ Form::label('plate', 'Rendszám', ["class" => "form-label"]) }}
                    {{ Form::text('plate', "", ["class" => "form-control short-input", "placeholder" => "AAA-000", "id" => "newTypeText"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('brand', 'Márka', ["class" => "form-label"]) }}
                    {{ Form::text('brand', "", ["class" => "form-control", "placeholder" => "Audi", "id" => "newTypeText"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('model', 'Model', ["class" => "form-label"]) }}
                    {{ Form::text('model', "", ["class" => "form-control", "placeholder" => "TT", "id" => "newTypeText"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('year', 'Gyártási év', ["class" => "form-label"]) }}
                    {{ Form::text('year', "", ["class" => "form-control short-input", "onkeypress" => "validate(event)", "placeholder" => "2018", "id" => "newTypeText"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('doors', 'Ajtók száma', ["class" => "form-label"]) }}
                    {{ Form::text('doors', "", ["class" => "form-control short-input", "onkeypress" => "validate(event)", "id" => "newTypeText", "placeholder" => "2"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('seats', 'Ülések száma', ["class" => "form-label"]) }}
                    {{ Form::text('seats', "", ["class" => "form-control short-input", "onkeypress" => "validate(event)", "id" => "newTypeText", "placeholder" => "4"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('outer_color', 'Külső szín', ["class" => "form-label"]) }}
                    {{ Form::text('outer_color', "", ["class" => "form-control", "placeholder" => "Fekete matt", "id" => "newTypeText"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('inner_color', 'Belső szín', ["class" => "form-label"]) }}
                    {{ Form::text('inner_color', "", ["class" => "form-control", "placeholder" => "Barna bőr", "id" => "newTypeText"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('vehicle_type_id', 'Jármű típusa', ["class" => "form-label"]) }}
                    {{ Form::select('vehicle_type_id', $vehicleTypes, null, ["class" => "form-control", "placeholder" => "Kiválasztás...", "id" => "newTypeText"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('bodywork_type_id', 'Karosszéria típusa', ["class" => "form-label"]) }}
                    {{ Form::select('bodywork_type_id', $bodyworkTypes, null, ["class" => "form-control", "placeholder" => "Kiválasztás...", "id" => "newTypeText"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('gearbox_type_id', 'Sebességváltó típusa', ["class" => "form-label"]) }}
                    {{ Form::select('gearbox_type_id', $gearboxTypes, null, ["class" => "form-control", "placeholder" => "Kiválasztás...","id" => "newTypeText"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('fuel_type_id', 'Üzemanyag típusa', ["class" => "form-label"]) }}
                    {{ Form::select('fuel_type_id', $fuelTypes, null, ["class" => "form-control", "placeholder" => "Kiválasztás...", "id" => "newTypeText"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('description', 'Leírás', ["class" => "form-label"]) }}
                    {{ Form::textarea('description', "", ["class" => "form-control", "placeholder" => "Jármű leírása", "id" => "newTypeText"]) }}            
                </div>
                <div class="mb-3">
                    {{ Form::label('motor', 'Motor', ["class" => "form-label"]) }}
                    {{ Form::textarea('motor', "", ["class" => "form-control", "placeholder" => "Motor leírása", "rows" => 2, "id" => "newTypeText"]) }}            
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
                                    false,
                                    ['class' => 'md-check mr-2', 'id' => $equipment] 
                                    ) !!}
                    {!! Form::label($equipment,  $equipment) !!}
                    <br>
                    @endforeach
                </div>
                <div id="newModalError" class="form-text error">A mező kitöltése kötelező!</div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
                <button type="button" onclick="submitNewType()" class="btn btn-primary">Felvétel</button>
            </div>
            {{ Form::close() }}
            </div>
        </div>
    </div>

    <div class="modal" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Meglévő jármű törlése</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="deleteModalText">Biztosan törölni szeretné a kiválasztott járművet?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
                {{ Form::open(["id" => "deleteForm", "method" => "delete"]) }}
                    {{ Form::submit('Torlés', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            </div>
            {{ Form::close() }}
            </div>
        </div>
    </div>

    <div class="modal" id="modifyModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Meglévő jármű módosítása</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{ Form::open(["route" => "vehicle.store", "method" => "put", "id" => "modifyForm"]) }}
            <div class="modal-body">
                {{ Form::text('type', "", ["class" => "form-control", "id" => "type"]) }}
                <div id="modifyModalError" class="form-text error">A mező kitöltése kötelező!</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
                <button type="button" onclick="submitModifiedType()" class="btn btn-primary">Módosítás</button>
            </div>
            {{ Form::close() }}
            </div>
        </div>
    </div>

    <template id="img-template">
        <div class="img-wrapper">   
            <img src="{{asset('img/x.png')}}" alt="" width="160px" class="uploaded-image">
        </div>
    </template>
@endsection

@section('script')
    <script>
        function newType(){
            var newModal = new bootstrap.Modal(document.getElementById('newModal'), {
                keyboard: false
            })
            document.getElementById('newModalError').style.display = "none";
            newModal.show();

        }

        function submitNewType(){
            document.getElementById('newTypeForm').submit();
            return;
            text = document.getElementById('newTypeText').value;
            if (text.length > 0){
                document.getElementById('newTypeForm').submit();
            }
            else{
                document.getElementById('newModalError').style.display = "inline";
            }
        }

        function deleteVehicle(url, plate){
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
                keyboard: false
            });
            document.getElementById('deleteModalText').innerHTML = "Biztosan törölni szeretné a(z) " + plate + " rendszámú járművet?";
            document.getElementById('deleteForm').action = url;
            deleteModal.show();
        }

        function updateGearbox(url, type){
            var updateModal = new bootstrap.Modal(document.getElementById('modifyModal'), {
                keyboard: false
            });
            document.getElementById('modifyForm').action = url;
            document.getElementById('type').value = type;
            document.getElementById('modifyModalError').style.display = "none";
            updateModal.show();
        }

        function submitModifiedType(){
            text = document.getElementById('type').value;
            if (text.length > 0){
                document.getElementById('modifyForm').submit();
            }
            else{
                document.getElementById('modifyModalError').style.display = "inline";
            }
        }
        

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

        function previewImages() {
            var preview = document.getElementById('preview');
            preview.innerHTML = "";
            if (this.files) {
                [].forEach.call(this.files, readAndPreview);
            }
            function readAndPreview(file) {

                if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                    return alert(file.name + " nem egy kép!");
                }
                var reader = new FileReader();
                reader.addEventListener("load", function() {
                    temp = document.getElementById("img-template");
                    clone = temp.content.cloneNode(true);
                    
                    var image = clone.querySelector(".uploaded-image");
                    image.title  = file.name;
                    image.src    = this.result;
                    preview.appendChild(clone);
                });
                reader.readAsDataURL(file);
                }
        }

        document.querySelector('#images').addEventListener("change", previewImages);

        function removeFileFromFileList(index) {
            const dt = new DataTransfer()
            const input = document.getElementById('images')
            const { files } = input
            
            for (let i = 0; i < files.length; i++) {
                const file = files[i]
                if (index !== i)
                dt.items.add(file) // here you exclude the file. thus removing it.
            }
            
            input.files = dt.files // Assign the updates list
        }

        function queryChange(){
            value = document.getElementById("vehicle_type").value;
            if(value == "Összes") value = "all";
            route = "{{ route('vehicle.index') }}" + "?type=" + value;
            document.getElementById("querya").href = route;
        }
    </script>
@endsection()
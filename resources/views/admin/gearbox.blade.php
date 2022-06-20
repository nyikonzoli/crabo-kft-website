@extends('layouts.admin')

@section('title', 'Crabo - Sebességváltók')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/type.css') }}">
@endsection

@section('content')
    <div class="col-lg-8 mx-auto">
        <h1>Sebességváltók</h1>
        <button onclick="newType()" class="btn btn-primary new-type"><i class="fa-solid fa-square-plus"></i>Új sebességváltó hozzáadása</button>
        <p>Összes sebességváltó:</p>
        <table class="col-lg-5 table table-striped" id="types">
            @foreach($gearboxes as $gearbox)
                <tr>
                    <td><p class="my-auto">{{ $gearbox->type }}</p></td>
                    <td class="buttons">
                        <button class="btn btn-primary" onclick="updateGearbox('{{ route("gearbox.update", ["id" => $gearbox->id]) }}', '{{ $gearbox->type }}')">Módosítás</button>
                        <button class="btn btn-danger" onclick="deleteGearbox('{{ route("gearbox.destroy", ["id" => $gearbox->id]) }}', '{{ $gearbox->type }}')">Törlés</button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="modal" id="newModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Újfajta sebességváltó felvétele</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{ Form::open(["route" => "gearbox.store", "method" => "post", "id" => "newTypeForm"]) }}
            <div class="modal-body">
                {{ Form::label('type', 'Kérem adja meg az új sebességváltó típusának a nevét', ["class" => "form-label"]) }}
                {{ Form::text('type', "", ["class" => "form-control", "placeholder" => "Új sebességváltó neve", "id" => "newTypeText"]) }}
                <div id="newModalError" class="form-text error">A mező kitöltése kötelező!</div>
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
                <h5 class="modal-title">Meglévő sebességváltó törlése</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="deleteModalText">Biztosan törölni szeretné a kiválasztott sebességváltót?</p>
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
                <h5 class="modal-title">Meglévő sebességváltó módosítása</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{ Form::open(["route" => "gearbox.store", "method" => "put", "id" => "modifyForm"]) }}
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
            text = document.getElementById('newTypeText').value;
            if (text.length > 0){
                document.getElementById('newTypeForm').submit();
            }
            else{
                document.getElementById('newModalError').style.display = "inline";
            }
        }

        function deleteGearbox(url, type){
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
                keyboard: false
            });
            document.getElementById('deleteModalText').innerHTML = "Biztosan törölni szeretné a(z) " + type + " sebességváltó típust?";
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
    </script>
@endsection()
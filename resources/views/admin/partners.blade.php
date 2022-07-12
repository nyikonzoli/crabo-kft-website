@extends('layouts.admin')

@section('title', 'Crabo - Partnerek')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/type.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/partners.css') }}">
@endsection

@section('content')
    <div class="col-lg-8 mx-auto">
        <h1>Partnerek</h1>
        <button onclick="newPartner()" class="btn btn-primary new-type"><i class="fa-solid fa-square-plus"></i>Új partner hozzáadása</button>
        <p>Összes partner:</p>

        <div class="partners">
            @foreach($partners as $partner)
                <div class="card" style="width: 18rem; margin:1rem;">
                    <img src="http://localhost:8881/images/AAA-000/97YW2w6JQZRKDZkxa9qor81yHnHZoIuFyhhAkjA6.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center">{{ $partner->name }}</h5>
                    </div>
                    <div class="card-text" style="text-align: center">
                        <button class="btn btn-danger" onclick="deleteVehicle('{{ route("partner.destroy", ["id" => $partner->id]) }}', '{{ $partner->name }}')">Törlés</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal" id="newModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Új partner felvétele</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{ Form::open(["route" => "partner.store", "method" => "post", "id" => "newPartnerForm", "files" => true]) }}
                <div class="modal-body">
                    <div class="mb-3">
                        {{ Form::label('name', 'Kérem adja meg az új partner nevét', ["class" => "form-label"]) }}
                        {{ Form::text('name', "", ["class" => "form-control", "placeholder" => "Új partner neve", "id" => "newPartnerText"]) }}    
                    </div>
                    <div class="mb-3">
                        {{ Form::label('image', 'Új partner képe', ["class" => "form-label"]) }}
                        <br>
                        {{ Form::file('image') }}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
                    <button type="button" onclick="submitNewPartner()" class="btn btn-primary">Felvétel</button>
                </div>
            {{ Form::close() }}
            </div>
        </div>
    </div>

    <div class="modal" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Partner törlése</h5>
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
@endsection

@section('script')
    <script>
        function newPartner(){
            var newModal = new bootstrap.Modal(document.getElementById('newModal'), {
                keyboard: false
            })
            newModal.show();

        }

        function submitNewPartner(){
            text = document.getElementById('newPartnerText').value;
            if (text.length > 0){
                document.getElementById('newPartnerForm').submit();
            }
        }

        function deleteVehicle(url, partner){
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
                keyboard: false
            });
            document.getElementById('deleteModalText').innerHTML = "Biztosan törölni szeretné a(z) " + partner + " nevű partnert?";
            document.getElementById('deleteForm').action = url;
            deleteModal.show();
        }
    </script>    
@endsection
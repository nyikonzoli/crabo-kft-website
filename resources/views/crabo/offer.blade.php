@extends('layouts.main')

@section('title', 'Crabo - Ajánlat kérése')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/crabo/index.css') }}">
@endsection

@section('content')
    <div class="col-lg-4 mx-auto">
        <h1 class="title" style="text-align:center">Ajánlat kérése</h1>
        <div>
            {{ Form::open(["route" => "crabo.email"]) }}
                <div class="mb-3">
                    {{ Form::label('name', 'Név', ["class" => "form-label"]) }}
                    {{ Form::text('name', '', ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('email', 'Email', ["class" => "form-label"]) }}
                    {{ Form::text('email', 'example@example.com', ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        {{ Form::radio('role', 'magan', true, ["class" => "form-check-input"]) }}
                        {{ Form::label('role', 'Magánszemély', ["class" => "form-label"]) }}
                    </div>
                    <div class="form-check">
                        {{ Form::radio('role', 'ceg', false, ["class" => "form-check-input"]) }}
                        {{ Form::label('role', 'Cég', ["class" => "form-label"]) }}
                    </div>
                </div>
                <div class="mb-3">
                    {{ Form::label('company', 'Cégnév', ["class" => "form-label"]) }}
                    {{ Form::text('company', '', ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('tax', 'Adóazonosító jel', ["class" => "form-label"]) }}
                    {{ Form::text('tax', '', ["class" => "form-control"]) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('content', 'Tartalom', ["class" => "form-label"]) }}
                    {{ Form::textarea('content', '', ["class" => "form-control"]) }}
                </div>
                {{ Form::submit('Ajánlat kérése') }}
            {{ Form::close() }}
        </div>
    </div>
@endsection
@extends('layouts.main')

@section('title', 'Crabo - Ajánlat kérése')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/crabo/index.css') }}">
@endsection

@section('content')
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
                    {{ Form::text('email', 'example@example.com', ["class" => "form-control"]) }}
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
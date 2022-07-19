@extends('layouts.main')

@section('title', 'Crabo Rent - Kapcsolat')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/crabo/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crabo/index.css') }}">
@endsection

@section('content')
    <div class="col-lg-8 mx-auto">
        <div class="d-flex flex-row flex-wrap mb-5">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-lg-row flex-xl-column flex-md-column flex-sm-column flex-column">
                <div class="d-flex flex-column justify-content-start align-items-center col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h1 class="email-text my-3" style="letter-spacing: 0.5rem">Nyitvatartás</h1>
                    <table class="table table-striped" style="width: 80%">
                        <thead>
                            <tr>
                                <th scope="col" style="width:50%; text-align: center">Nap</th>
                                <th scope="col" style="width:50%; text-align: center">Időtartam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:50%; text-align: center">H-P</td>
                                <td style="width:50%; text-align: center">10:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td style="width:50%; text-align: center">Sz</td>
                                <td style="width:50%; text-align: center">8:00 - 20:00</td>
                            </tr>
                            <tr>
                                <td style="width:50%; text-align: center">V</td>
                                <td style="width:50%; text-align: center">10:00 - 18:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex flex-column justify-content-start align-items-center  col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h1 class="email-text my-3" style="letter-spacing: 0.5rem">Adatok</h1>
                    <table class="table table-striped" style="width: 80%">
                        <tbody>
                            <tr>
                                <td style="width:50%; text-align: center">Email</td>
                                <td style="width:50%; text-align: center">urogi.istvan@gmail.com</td>
                            </tr>
                            <tr>
                                <td style="width:50%; text-align: center">Telefonszám</td>
                                <td style="width:50%; text-align: center">+36 70 674 4606</td>
                            </tr>
                            <tr>
                                <td style="width:50%; text-align: center">Cím</td>
                                <td style="width:50%; text-align: center">Budapest, Üllői út 140, 1103</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-column justify-content-start align-items-center">
                <h1 class="email-text my-3" style="letter-spacing: 0.5rem; text-align:center">Itt találsz meg minket</h1>
                <iframe width="80%" height="350" id="map" src="https://maps.google.com/maps?q=Budapest,%20Gy%C3%B6mr%C5%91i%20%C3%BAt%20140,%201103&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    <div class="rolunk-wrapper  ">
        <div class="col-lg-8 mx-auto">
            <div style="text-align:center" class="py-3">
                <h1 class="rolunk">VISSZATÉRŐ ÜGYFELEINKNEK</h1>
                <p class="col-lg-7 mx-auto rolunk-p">Ha már bérelt nálunk járművet, legyen szó személyautóról, teherautóról vagy furgonról, az ezt követő alkalmakkor akár már nyitvatartási időn kívül is átveheti bérelni kívánt járművét.</p>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-8 col-10 mx-auto">
        <div class="bottom">
            <h1 class="email-text my-3" style="text-align:center">KÉRDÉSE VAN?</h1>
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
                    {{ Form::label('content', 'Tartalom', ["class" => "form-label"]) }}
                    {{ Form::textarea('content', '', ["class" => "form-control"]) }}
                </div>
                <div style="text-align:center">
                    {{ Form::submit('Üzenet küldése', ['class' => 'btn btn-email']) }}
                </div>
            {{ Form::close() }}
        </div>
        </div>
    </div>
@endsection
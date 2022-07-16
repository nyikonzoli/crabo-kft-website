@extends('layouts.main')

@section('title', 'Crabo Rent - Kapcsolat')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/crabo/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crabo/index.css') }}">
@endsection

@section('content')
    <div class="col-lg-8 mx-auto">
        <div class="d-flex flex-row">
            <div class="col-lg-6">
                <div>
                    <h1>Nyitvatartás</h1>
                    <table class="table" style="width=200px">
                        <thead>
                            <tr>
                                <th scope="col">Nap</th>
                                <th scope="col">Időtartam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>H-P</td>
                                <td>10:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td>Sz</td>
                                <td>8:00 - 20:00</td>
                            </tr>
                            <tr>
                                <td>V</td>
                                <td>10:00 - 18:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div>
                    <h1>Nyitvatartás</h1>
                    <table class="table" style="width=200px">
                        <tbody>
                            <tr>
                                <td>Email</td>
                                <td>urogi.istvan@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Telefonszám</td>
                                <td>+36301234567</td>
                            </tr>
                            <tr>
                                <td>Cím</td>
                                <td>Budapest, Üllői út 140, 1103</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1>Itt találsz meg minket</h1>
                <p>Budapest, Gyömrői út 140, 1103</p>
                <iframe width="80%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=Budapest,%20Gy%C3%B6mr%C5%91i%20%C3%BAt%20140,%201103&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    <div class="rolunk-wrapper  ">
        <div class="col-lg-8 mx-auto">
            <div style="text-align:center" class="py-3">
                <h1 class="rolunk">VALAMI SZÖVEG</h1>
                <p class="col-lg-7 mx-auto rolunk-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, inventore tempora reiciendis saepe in quod id facere tenetur similique ipsam, dignissimos eaque, cupiditate nemo nam ex earum voluptate nobis ratione.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-8 mx-auto">
        <div class="bottom">
            <h1>KÉRDÉSE VAN? LÉPJEN VELÜNK KAPCSOLATBA BÁTRAN</h1>
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
                    {{ Form::label('content', 'Tartalom', ["class" => "form-label"]) }}
                    {{ Form::textarea('content', '', ["class" => "form-control"]) }}
                </div>
                {{ Form::submit('Ajánlat kérése') }}
            {{ Form::close() }}
        </div>
        </div>
    </div>
@endsection
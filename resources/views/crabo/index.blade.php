@extends('layouts.main')

@section('title', 'Crabo - Főoldal')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/crabo/index.css') }}">
@endsection

@section('content')
    <div class="content">
        <div class="top-wrapper">
            <div class="top col-lg-8 mx-auto">
                <div class="col-lg-6 left">
                    <h2>Cégünk évek óta megoldást nyújt az autóbérlésre, legyen szó bármilyen helyzetről is.</h2>
                </div>
                <div class="col-lg-6 right">
                    <div id="top-img"></div>
                </div>
            </div>
        </div>
        <div class="rolunk-wrapper">
            <div class="col-lg-8 mx-auto">
                <div style="text-align:center" class="py-3">
                    <h1 class="rolunk">RÓLUNK RÖVIDEN</h1>
                    <p class="col-lg-7 mx-auto rolunk-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, inventore tempora reiciendis saepe in quod id facere tenetur similique ipsam, dignissimos eaque, cupiditate nemo nam ex earum voluptate nobis ratione.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mx-auto">
            <h1 class="title">Személyautók</h1>
            <div class="cars-wrapper">
              <div class="card col-lg-4 col-md-6 col-sm-10">
                <div class="image-container">
                  <img class="card-img-top" src="http://localhost:8881/images/AAA-000/97YW2w6JQZRKDZkxa9qor81yHnHZoIuFyhhAkjA6.png" alt="Card image cap">
                  <span class="action">
                    <div class="inner-div">
                        <ul class="card-list">
                          <li>4 személyes</li>
                          <li>Manuális váltó</li>
                          <li class="break"></li>
                          <li>1 napra: 10999 Ft/nap</li>
                          <li>7 napra: 9500 Ft/nap</li>
                          <li>1 hónapra: 8799 Ft/nap</li>
                        </ul>
                    </div>
                  </span>
                </div>
                  <div class="card-body">
                    <h5 class="card-title">Skoda Octavia Combi Style</h5>
                    <div class="price-wrapper">
                      <h4>Akár már </h4><h3 class="price">8799</h3><h4> Ft/nap-tól</h4>
                    </div>
                  </div>
              </div>
                <div class="card col-lg-4 col-md-6 col-sm-10">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/images/AAA-000/97YW2w6JQZRKDZkxa9qor81yHnHZoIuFyhhAkjA6.png" alt="Card image cap">
                    <span class="action">
                      <div class="inner-div">
                          <ul>
                            <li>4 személyes</li>
                            <li>Manuális váltó</li>
                            <li class="break"></li>
                            <li>1 napra: 10999 Ft/nap</li>
                            <li>7 napra: 9500 Ft/nap</li>
                            <li>1 hónapra: 8799 Ft/nap</li>
                          </ul>
                      </div>
                    </span>
                  </div>
                    <div class="card-body">
                      <h5 class="card-title">Skoda Octavia Combi Style</h5>
                      <div class="price-wrapper">
                        <h4>Akár már </h4><h3 class="price">8799</h3><h4> Ft/nap-tól</h4>
                      </div>
                    </div>
                </div>
                <div class="card col-lg-4 col-md-6 col-sm-10">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/images/AAA-000/97YW2w6JQZRKDZkxa9qor81yHnHZoIuFyhhAkjA6.png" alt="Card image cap">
                    <span class="action">
                      <div class="inner-div">
                          <ul>
                            <li>4 személyes</li>
                            <li>Manuális váltó</li>
                            <li class="break"></li>
                            <li>1 napra: 10999 Ft/nap</li>
                            <li>7 napra: 9500 Ft/nap</li>
                            <li>1 hónapra: 8799 Ft/nap</li>
                          </ul>
                      </div>
                    </span>
                  </div>
                    <div class="card-body">
                      <h5 class="card-title">Skoda Octavia Combi Style</h5>
                      <div class="price-wrapper">
                        <h4>Akár már </h4><h3 class="price">8799</h3><h4> Ft/nap-tól</h4>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-div col-lg-8 mx-auto">
          <a href="" class="btn car-type-btn">További személyautók megtekintése</a>
        </div>
        <div class="col-lg-8 mx-auto">
            <h1 class="title">Teherautók</h1>
            <div class="cars-wrapper">
              <div class="card col-lg-4 col-md-6 col-sm-10">
                <div class="image-container">
                  <img class="card-img-top" src="http://localhost:8881/images/shs-776-1.png" alt="Card image cap">
                  <span class="action">
                    <div class="inner-div">
                        <ul>
                          <li>4 személyes</li>
                          <li>Manuális váltó</li>
                          <li class="break"></li>
                          <li>1 napra: 10999 Ft/nap</li>
                          <li>7 napra: 9500 Ft/nap</li>
                          <li>1 hónapra: 8799 Ft/nap</li>
                        </ul>
                    </div>
                  </span>
                </div>
                  <div class="card-body">
                    <h5 class="card-title">Skoda Octavia Combi Style</h5>
                    <div class="price-wrapper">
                      <h4>Akár már </h4><h3 class="price">8799</h3><h4> Ft/nap-tól</h4>
                    </div>
                  </div>
              </div>
                <div class="card col-lg-4 col-md-6 col-sm-10">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/images/shs-776-1.png" alt="Card image cap">
                    <span class="action">
                      <div class="inner-div">
                          <ul>
                            <li>4 személyes</li>
                            <li>Manuális váltó</li>
                            <li class="break"></li>
                            <li>1 napra: 10999 Ft/nap</li>
                            <li>7 napra: 9500 Ft/nap</li>
                            <li>1 hónapra: 8799 Ft/nap</li>
                          </ul>
                      </div>
                    </span>
                  </div>
                    <div class="card-body">
                      <h5 class="card-title">Skoda Octavia Combi Style</h5>
                      <div class="price-wrapper">
                        <h4>Akár már </h4><h3 class="price">8799</h3><h4> Ft/nap-tól</h4>
                      </div>
                    </div>
                </div>
                <div class="card col-lg-4 col-md-6 col-sm-10">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/images/shs-776-1.png" alt="Card image cap">
                    <span class="action">
                      <div class="inner-div">
                          <ul>
                            <li>4 személyes</li>
                            <li>Manuális váltó</li>
                            <li class="break"></li>
                            <li>1 napra: 10999 Ft/nap</li>
                            <li>7 napra: 9500 Ft/nap</li>
                            <li>1 hónapra: 8799 Ft/nap</li>
                          </ul>
                      </div>
                    </span>
                  </div>
                    <div class="card-body">
                      <h5 class="card-title">Skoda Octavia Combi Style</h5>
                      <div class="price-wrapper">
                        <h4>Akár már </h4><h3 class="price">8799</h3><h4> Ft/nap-tól</h4>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-div col-lg-8 mx-auto">
          <a href="" class="btn car-type-btn">További teherautók megtekintése</a>
        </div>
        <div class="rolunk-wrapper  ">
            <div class="col-lg-8 mx-auto">
                <div style="text-align:center" class="py-3">
                    <h1 class="rolunk">AZ AUTÓBÉRLÉS FOLYAMATA</h1>
                    <p class="col-lg-7 mx-auto rolunk-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, inventore tempora reiciendis saepe in quod id facere tenetur similique ipsam, dignissimos eaque, cupiditate nemo nam ex earum voluptate nobis ratione.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-11 col-sm-11 mx-auto">
            <h1 class="title">Furgonok</h1>
            <div class="cars-wrapper row">
                <div class="card col-lg-4 col-md-6 col-sm-10">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/images/AAA-000/97YW2w6JQZRKDZkxa9qor81yHnHZoIuFyhhAkjA6.png" alt="Card image cap">
                    <span class="action">
                      <div class="inner-div">
                          <ul>
                            <li>4 személyes</li>
                            <li>Manuális váltó</li>
                            <li class="break"></li>
                            <li>1 napra: 10999 Ft/nap</li>
                            <li>7 napra: 9500 Ft/nap</li>
                            <li>1 hónapra: 8799 Ft/nap</li>
                          </ul>
                      </div>
                    </span>
                  </div>
                    <div class="card-body">
                      <h5 class="card-title">Skoda Octavia Combi Style</h5>
                      <div class="price-wrapper">
                        <h4>Akár már </h4><h3 class="price">8799</h3><h4> Ft/nap-tól</h4>
                      </div>
                    </div>
                </div>
                <div class="card col-lg-4 col-md-6 col-sm-10">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/images/AAA-000/97YW2w6JQZRKDZkxa9qor81yHnHZoIuFyhhAkjA6.png" alt="Card image cap">
                    <span class="action">
                      <div class="inner-div">
                          <ul>
                            <li>4 személyes</li>
                            <li>Manuális váltó</li>
                            <li class="break"></li>
                            <li>1 napra: 10999 Ft/nap</li>
                            <li>7 napra: 9500 Ft/nap</li>
                            <li>1 hónapra: 8799 Ft/nap</li>
                          </ul>
                      </div>
                    </span>
                  </div>
                    <div class="card-body">
                      <h5 class="card-title">Skoda Octavia Combi Style</h5>
                      <div class="price-wrapper">
                        <h4>Akár már </h4><h3 class="price">8799</h3><h4> Ft/nap-tól</h4>
                      </div>
                    </div>
                </div>
                <div class="card col-lg-4 col-md-6 col-sm-10">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/images/AAA-000/97YW2w6JQZRKDZkxa9qor81yHnHZoIuFyhhAkjA6.png" alt="Card image cap">
                    <span class="action">
                      <div class="inner-div">
                          <ul>
                            <li>4 személyes</li>
                            <li>Manuális váltó</li>
                            <li class="break"></li>
                            <li>1 napra: 10999 Ft/nap</li>
                            <li>7 napra: 9500 Ft/nap</li>
                            <li>1 hónapra: 8799 Ft/nap</li>
                          </ul>
                      </div>
                    </span>
                  </div>
                    <div class="card-body">
                      <h5 class="card-title">Skoda Octavia Combi Style</h5>
                      <div class="price-wrapper">
                        <h4>Akár már </h4><h3 class="price">8799</h3><h4> Ft/nap-tól</h4>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-div col-lg-8 mx-auto">
          <a href="" class="btn car-type-btn">További furgonok megtekintése</a>
        </div>
        <div class="button-div col-lg-8 mx-auto">
          <h1>KÉRJEN AJÁNLATOT</h1>
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
    </div>
@endsection
@extends('layouts.main')

@section('title', 'Crabo - Főoldal')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/crabo/index.css') }}">
@endsection

@section('content')
    <div class="content">
        <div class="top-wrapper">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('img/DSC_2446.jpg') }}" class="d-block w-100 top-image" height="450px" style="object-fit: cover; object-position: 0% 55%">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('img/DSC_2470.jpg') }}" class="d-block w-100 top-image" height="450px" style="object-fit: cover; object-position: 0% 75%">

                </div>
              </div>
            </div>
        </div>
        <div class="rolunk-wrapper">
            <div class="col-lg-8 mx-auto">
                <div style="text-align:center" class="py-3">
                    <h1 class="rolunk">RÓLUNK RÖVIDEN</h1>
                    <p class="col-lg-7 mx-auto rolunk-p">Cégünk évek óta többféle terelen nyújt megoldást járművek bérlésére. Többek között foglalkozunk zenészekkel szállításával, rendezvénykivitelező cégekkel, illetve magánszemélyeknek is megbízható szolgáltatást nyújtunk. Számos járműtípus közül választhat, mint például személyautók, teherautók és furgonok. Ráadásul a közeljövöben lehetőség nyílik elektromos autók bérlésére is.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mx-auto">
            <h1 class="title">Személyautók</h1>
            <div class="cars-wrapper flex-xxl-row flex-xl-row justify-content-xl-center flex-lg-column flex-column align-items-lg-center align-items-md-center align-items-sm-center align-items-center justify-content-xxl-center row">
                <div class="card mb-3">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/vehicles/DSC_2440.jpg" alt="Card image cap">
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
                <div class="card mb-3">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/vehicles/DSC_2440.jpg" alt="Card image cap">
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
                <div class="card mb-3">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/vehicles/DSC_2440.jpg" alt="Card image cap">
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
        </div>
        <div class="button-div col-lg-8 mx-auto">
          <a href="" class="btn car-type-btn">További személyautók megtekintése</a>
        </div>
        <div class="col-lg-8 mx-auto">
            <h1 class="title">Teherautók</h1>
            <div class="cars-wrapper flex-xxl-row flex-xl-row justify-content-xl-center flex-lg-column flex-column align-items-lg-center align-items-md-center align-items-sm-center align-items-center justify-content-xxl-center row">
                <div class="card mb-3">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/vehicles/DSC_2440.jpg" alt="Card image cap">
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
                <div class="card mb-3">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/vehicles/DSC_2440.jpg" alt="Card image cap">
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
                <div class="card mb-3">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/vehicles/DSC_2440.jpg" alt="Card image cap">
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
                    <div class="steps d-flex mx-auto justify-content-center flex-wrap">
                        <div class="step d-flex flex-row alig-items-center" width="200px">
                            <h1 class="step-number" width="30%">1.</h1>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <h1 class="step-text">Ajánlat</h1>
                                <h1 class="step-text">kérése</h1>
                            </div>
                        </div>
                        <div class="step d-flex flex-row alig-items-center" width="200px">
                            <h1 class="step-number" width="30%">2.</h1>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <h1 class="step-text">Adatok megadása</h1>
                                <h1 class="step-text">emailben</h1>
                            </div>
                        </div>
                        <div class="step d-flex flex-row alig-items-center" width="200px">
                            <h1 class="step-number" width="30%">3.</h1>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <h1 class="step-text">Kaució</h1>
                                <h1 class="step-text">fizetése</h1>
                            </div>
                        </div>
                        <div class="step d-flex flex-row alig-items-center" width="200px">
                            <h1 class="step-number" width="30%">4.</h1>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <h1 class="step-text">Jármű</h1>
                                <h1 class="step-text">átvétele</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-9 col-xl-12 col-lg-10 mx-auto">
            <h1 class="title">Furgonok</h1>
            <div class="cars-wrapper flex-xxl-row flex-xl-row justify-content-xl-center flex-lg-column flex-column align-items-lg-center align-items-md-center align-items-sm-center align-items-center justify-content-xxl-center row">
                <div class="card mb-3">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/vehicles/DSC_2440.jpg" alt="Card image cap">
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
                <div class="card mb-3">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/vehicles/DSC_2440.jpg" alt="Card image cap">
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
                <div class="card mb-3">
                  <div class="image-container">
                    <img class="card-img-top" src="http://localhost:8881/vehicles/DSC_2440.jpg" alt="Card image cap">
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
        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 col-xs-10 email mx-auto">
          <h1 style="text-align: center;" class="email-text">KÉRJEN AJÁNLATOT</h1>
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
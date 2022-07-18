@extends('backend.master')
@section('content')
    <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-content">
                  <h5 class="card-title">Faqs Aerator IOT</h5>
                  <br>
                  <ul class="collapsible popout collapsible-dark">
                    <li class="">
                      <div class="collapsible-header" tabindex="0"><i class="material-icons">question_answer</i>Apa itu
                        Aplikasi Aerator IOT?
                      </div>
                      <div class="collapsible-body" style=""><span>Anim pariatur cliche reprehenderit,
                          enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                          officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                          nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                          bird on it squid single-origin coffee nulla assumenda shoreditch et.
                          Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                          nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                          Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                          nesciunt you probably haven't heard of them accusamus labore sustainable
                          VHS.</span></div>
                    </li>
                    <li class="">
                      <div class="collapsible-header" tabindex="0"><i class="material-icons">question_answer</i>Bagaimana
                        cara kerjanya?</div>
                      <div class="collapsible-body" style=""><span>Anim pariatur cliche reprehenderit,
                          enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                          officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                          nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                          bird on it squid single-origin coffee nulla assumenda shoreditch et.
                          Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                          nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                          Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                          nesciunt you probably haven't heard of them accusamus labore sustainable
                          VHS.</span></div>
                    </li>
                    <li class="">
                      <div class="collapsible-header" tabindex="0"><i class="material-icons">question_answer</i>Bagaimana
                        cara memakainya?
                      </div>
                      <div class="collapsible-body" style=""><span>Anim pariatur cliche reprehenderit,
                          enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
                          officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                          nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                          bird on it squid single-origin coffee nulla assumenda shoreditch et.
                          Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                          nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                          Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                          nesciunt you probably haven't heard of them accusamus labore sustainable
                          VHS.</span></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- col -->
            <div class="col m6 s12 l3">
              <div class="card">
                <div class="p-15">
                  <div class="d-flex no-block align-items-center">
                    <div class="m-r-10 red-text text-accent-4">
                      {{-- <i class="small material-icons">insert_chart</i> --}}
                      <span class="iconify" data-icon="mdi:thermometer" data-width="48" data-height="48"></span>
                    </div>
                    <div>
                      <span>Temperature</span>
                      <h4 class="font-medium m-b-0">{{$ref['temp']}} ° C</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- col -->
            <!-- col -->
            <div class="col m6 s12 l3">
              <div class="card">
                <div class="p-15">
                  <div class="d-flex no-block align-items-center">
                    <div class="m-r-10 light-blue-text">
                      <span class="iconify" data-icon="ic:sharp-water-drop" data-width="48"></span>
                    </div>
                    <div>
                      <span>Ph Air</span>
                      <h4 class="font-medium m-b-0">{{$ref['ph']}}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- col -->
            <!-- col -->
            <div class="col m6 s12 l3">
              <div class="card">
                <div class="p-15">
                  <div class="d-flex no-block align-items-center">
                    <div class="m-r-10 orange-text text-darken-2 text-darken-1">
                      <span class="iconify" data-icon="bx:water" data-width="48" data-height="48"></span>
                    </div>
                    <div>
                      <span>Turbidity</span>
                      <h4 class="font-medium m-b-0">{{$ref['turbidity']}}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- col -->
            <!-- col -->
            <div class="col m6 s12 l3">
              <div class="card">
                <div class="p-15">
                  <div class="d-flex no-block align-items-center">
                    <div class="m-r-10 deep-purple-text text-accent-2">
                      <span class="iconify" data-icon="healthicons:oxygen-tank" data-width="48" data-height="48"></span>
                    </div>
                    <div>
                      <span>Oxygen</span>
                      <h4 class="font-medium m-b-0">{{$ref['oxygen']}}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- col -->
          </div>
@endsection
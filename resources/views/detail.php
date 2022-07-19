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
@extends('backend.master')
@section('content')
<div class="row">
        <div class="col l3 m6 s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h4>{{$kolams}}</h4>
                                    <h6 class="card-subtitle">Total Kolam</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="blue-text display-6"><i class="ti-layout-slider-alt"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="progress">
                                <div class="determinate indigo darken-1" style="width:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 m6 s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h4 style="color:red">OFF</h4>
                                    <h6 class="card-subtitle">Status Alat</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="green-text display-6"><i class="ti-layout-media-left-alt"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="progress">
                                <div class="determinate teal darken-2" style="width:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col l3 m6 s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h4>10.10.10</h4>
                                    <h6 class="card-subtitle">Terakhir Online</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="orange-text display-6"><i class="ti-notepad"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="progress">
                                <div class="determinate amber darken-3" style="width:70%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 m6 s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h4>26%</h4>
                                    <h6 class="card-subtitle">Buying</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="black-text display-6"><i class="ti-panel"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="progress">
                                <div class="determinate grey darken-3" style="width:70%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

          
      
@endsection
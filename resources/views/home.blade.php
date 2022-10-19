@extends('backend.master')
@section('content')

<style>
  .banner{
    margin-left:-20px;
    margin-top:-30px;
  }

</style>
<div class="banner">
        <img src="{{asset('assets/images/banner.png')}}" alt="" width="1300" class="card-image">
</div>   
          <div class="row">
            <div class="col s12">
    
                <div class="card-content container">
                  <div class="row">
                    <div class="col s12 m6" style="margin-top:50px;">
                        <h5 class="card-title" style=" font-size:24px;  color: #194cbc; font-weight:bold;">Mengapa Perlu Monitoring?</h5>
                        <p class="mt-4">
                            PH meter adalah sebuah alat elektronik yang berfungsi untuk mengukur pH (derajat keasaman atau kebasaan) suatu cairan (ada elektroda khusus yang berfungsi untuk mengukur pH bahan-bahan semi-padat). 
                        </p>
                        <p>
                            Sebuah pH meter terdiri dari sebuah elektroda (probe pengukur) yang terhubung ke sebuah alat elektronik yang mengukur dan menampilkan nilai pH. Alat ini sangat berguna untuk industri air minum, laboratorium, akuarium.
                        </p>
                    </div>
                    <div class="col s12 m6">
                        <img src="{{('assets/images/dashboard.png')}}" style="width:380px;">
                    </div>
                  </div>
              
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-content">
                  <h5 class="card-title">Faqs AGENS</h5>
                  <br>
                  <ul class="collapsible popout collapsible-dark">
                    <li class="">
                      <div class="collapsible-header" tabindex="0"><i class="material-icons">question_answer</i>Apa itu
                        Aplikasi AGENS?
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
            @for ($i = 0; $i <count($ref); $i++)
            <div class="col l6 m6 s12">
              <div class="card">
                  <div class="card-content">
                      <div class="d-flex align-items-center no-block">
                          <div>
                              <h3 class="font-light">{{$key[$i]}}</h3>
                              <h6 class="active">Terakhir di update : {{$refdetail[$i]['updated_at']}} </h6>
                          </div>
                          <div class="ml-auto">
                              <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20"><a href="{{url('dashboard/'.$key[$i])}}"><button class="waves-effect waves-light green btn"><i class="material-icons dp48">remove_red_eye</i></button></a>
                              <a href="{{url('kolam/edit/'.$key[$i])}}"><button class="waves-effect waves-light orange btn "><i class="material-icons dp48">edit</i></button></a>
                              <a href="{{url('kolam/delete/'.$key[$i])}}"><button class="waves-effect waves-light red btn "><i class="material-icons dp48">delete</i></button></a>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>    
            @endfor
            
        
          </div>
            <div class="fixed-action-btn">
              <a class="btn-floating btn-large blue pulse" href="{{url('kolam/create')}}">
                <i class="large material-icons">add</i>aa
              </a>
            </div>
      
@endsection
@extends('backend.master')
@section('content')


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
<<<<<<< HEAD
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
=======
              </div>
            </div>
          </div>
          

          
>>>>>>> 70c9f3d01d8d076373c2e01d78917ad4f1be0d54
      
@endsection
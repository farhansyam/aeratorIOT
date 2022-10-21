@extends('backend.master')
@section('content') 
<div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <h5 class="card-title">Detail Kolam</h5>
          <h5 class="card-title">Nama Kolam : {{$ref['namaKolam']}}</h5>
          <h5 class="card-title">Ketinggian : {{$ref['ketinggian']}}</h5>
          <h5 class="card-title">Diameter : {{$ref['diameter']}}</h5>
          <h5 class="card-title">Terakhir Update : {{$ref['updated_at']}}</h5>
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
            <h4 class="font-medium m-b-0 temp">{{$ref['temp']}} ° C</h4>
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
          <h4 class="font-medium m-b-0 ph">{{$ref['ph']}}</h4>
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
          <h4 class="font-medium m-b-0 turbidity">{{$ref['turbidity']}}</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- col -->
`  <!-- col -->
<div class="col m6 s12 l3">
  <div class="card">
    <div class="p-15">
      <div class="d-flex no-block align-items-center">
        <div class="m-r-10 deep-purple-text text-accent-2">
          <span class="iconify" data-icon="healthicons:oxygen-tank" data-width="48" data-height="48"></span>
        </div>
        <div>
          <span>Oxygen</span>
          <h4 class="font-medium m-b-0 oxygen">{{$ref['oxygen']}}</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- col -->`
</div>`



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
  // realtime monitor
  setInterval(function()
  {
    var second = parseInt((new Date().getTime() / 1000) % 30);
      if(second === 0) {
          var url = "{{url('kolam/detail/'.$kodeKolam)}}";
            $.get(url, function(data, status){
            $(".oxygen").text(data.oxygen);
            $(".ph").text(data.ph);
            $(".temp").text(data.temp +' ° C');
            $(".turbidity").text(data.turbidity);
            console.log('update data monitoring')
  });
        }
  },1000); // or less than 1 sec    
</script>
@endsection
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
          <script>

            // realtime monitor
        setInterval(function()
        {
          var second = parseInt((new Date().getTime() / 1000) % 30);
            if(second === 0) {
                var url = "{{url('kolam/detail/'.$col)}}";
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
<script src="https://code.highcharts.com/highcharts.js"></script>
  <div class="row">
    <div class="col s6">
        <div id="grafik-ph" style="height: 240px; width:100%"></div>
    </div>
    <div class="col s6">
        <div id="grafik-temp" style="height: 240px; width:100%"></div>
    </div> 
  </div>
  <br>
<div class="row">
    <div class="col s6">
        <div id="grafik-oxy" style="height: 240px;"></div>
    </div>
    <div class="col s6">
        <div id="grafik-turbidity" style="height: 240px; width:100%"></div>
    </div>
</div>

<script>
    var ph = <?= json_encode($phs)?>;
    var time = <?= json_encode($tanggal)?>;
    var turbidity = <?= json_encode($turb)?>;
    Highcharts.chart('grafik-ph',{
        title : {
            text : 'PH Air'
        },
         subtitle: {
        text: 'ph air kolam'
         },
        xAxis : {
            categories : time,
            title:{
                text:"Tanggal"
            }
        },
        yAxis : {
            title:{
                text : 'Ph Air'
            }
        },
        legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
        plotOption : {
            series :{
                allowPointSelect: true
                }
        },
        series:[
            {
                name: 'PH Air',
                data:ph
            }
        ]

    })

</script>
<script>

    var ph = <?= json_encode($temp)?>;
    var time = <?= json_encode($tanggal)?>;
    var turbidity = <?= json_encode($turb)?>;
    Highcharts.chart('grafik-temp',{
        title : {
            text : 'Temperatur Air'
        },
         subtitle: {
        text: 'Temperatur air kolam'
         },
        xAxis : {
            categories : time,
            title:{
                text:"Tanggal"
            }
        },
        yAxis : {
            title:{
                text : 'temp Air'
            }
        },
        legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
        plotOption : {
            series :{
                allowPointSelect: true
                }
        },
        series:[
            {
                name: 'Temperature Air',
                data:ph
            }
        ]

    })

</script>
<script>

    var ph = <?= json_encode($oxy)?>;
    var time = <?= json_encode($tanggal)?>;
    var turbidity = <?= json_encode($turb)?>;
    Highcharts.chart('grafik-oxy',{
        title : {
            text : 'Kadar Oxygen Air'
        },
         subtitle: {
        text: 'Kadar Oxygen air kolam'
         },
        xAxis : {
            categories : time,
            title:{
                text:"Tanggal"
            }
        },
        yAxis : {
            title:{
                text : 'Oxygen'
            }
        },
        legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
        plotOption : {
            series :{
                allowPointSelect: true
                }
        },
        series:[
            {
                name: 'Oxygen',
                data:ph
            }
        ]

    })

</script>
<script>

    var ph = <?= json_encode($turb)?>;
    var time = <?= json_encode($tanggal)?>;
    var turbidity = <?= json_encode($turb)?>;
    Highcharts.chart('grafik-turbidity',{
        title : {
            text : 'Kekeruhan Air'
        },
         subtitle: {
        text: 'Kekeruhan air kolam'
         },
        xAxis : {
            categories : time,
            title:{
                text:"Tanggal"
            }
        },
        yAxis : {
            title:{
                text : 'Kekeruhan Air'
            }
        },
        legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
        plotOption : {
            series :{
                allowPointSelect: true
                }
        },
        series:[
            {
                name: 'Kekeruhan Air',
                data:ph
            }
        ]

    })

</script>

          
      
@endsection
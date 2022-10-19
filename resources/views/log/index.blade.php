@extends('backend.master')
@section('content')
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
<div class="container-fluid">
    <div class="card">
        <table class="responsive-table">
        <tr>
            <th>Jam</th>
            <th>Temp</th>
            <th>Kekeruhan</th>
            <th>Ph</th>
            <th>Oxygen</th>
        </tr>
        @foreach ($kolam as $data)
        <tr>
                <td>
                    {{$data->data()['jam']}}
                </td>
                <td>
                    {{$data->data()['temp']}}
                </td>
                <td>
                    {{$data->data()['turbidity']}}
                </td>
                <td>
                    {{$data->data()['ph']}}
                </td>
                <td>
                    {{$data->data()['oxygen']}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<script>

    var ph = <?= json_encode($phs)?>;
    var time = <?= json_encode($jams)?>;
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
                text:"Jam"
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
    var time = <?= json_encode($jams)?>;
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
                text:"Jam"
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
    var time = <?= json_encode($jams)?>;
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
                text:"Jam"
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
    var time = <?= json_encode($jams)?>;
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
                text:"Jam"
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
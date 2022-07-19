<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('kolam/setupdate')}}" method="post"><br>
        @csrf
        <span>nama kolam</span>
        <input type="text" name="namaKolam" id="" value="{{$ref['namaKolam']}}">
        <input type="text" name="kodeKolam" id="" value="{{$kodeKolam}}" style="display: none">
        <span>diameter</span>
        <input type="text" name="diameter" id="" value="{{$ref['diameter']}}">
        <span>ketinggian</span>
        <input type="text" name="ketinggian" id="" value="{{$ref['ketinggian']}}">
        <button type="submit">Set</button>
    </form>
</body>
</html>
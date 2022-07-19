<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('kolam/set')}}" method="post"><br>
        @csrf
        <span>kode kolam</span>
        <input type="text" name="kodeKolam" id="">
        <span>nama kolam</span>
        <input type="text" name="namaKolam" id="">
        <span>diameter</span>
        <input type="text" name="diameter" id="">
        <span>ketinggian</span>
        <input type="text" name="ketinggian" id="">
        <button type="submit">Set</button>
    </form>
</body>
</html>
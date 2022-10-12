@extends('backend.master')
@section('content')
<div class="card">
    <div class="card-content">
        <h5 class="card-title activator">Form Penambahan Monitoring kolam baru<i class="material-icons right tooltipped" data-position="left" data-delay="50" data-tooltip="Get Code">more_vert</i></h5>
            <form action="{{url('kolam/set')}}" method="post"><br>
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Kolam-1" name="kodeKolam" id="kodeKolam" type="text">
                                <label for="kodeKolam" class="active">Kode Kolam</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Nama Kolam" id="nama" type="text" name="namaKolam">
                                <label for="nama" class="active">Nama Kolam</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="100 M" id="diameter" type="number" name="diameter">
                                <label for="diameter" class="active">Diameter</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Ketinggian kolam" id="ketinggian" name="ketinggian">
                                <label for="ketinggian" class="active">Ketinggian</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div></div>
@endsection

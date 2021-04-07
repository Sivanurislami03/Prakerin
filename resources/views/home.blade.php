@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-warning card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center bubble-shadow-small">
                                    <i class="fas fa-frown"></i>
                                </div>
                            </div>
                            <div class="col col-stats">
                                <div class="numbers">
                                    <h5 class="card-category">Positif</h5>
                                    <h4 class="card-title">{{ $positif }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-success card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center bubble-shadow-small">
                                    <i class="fas fa-grin-beam"></i>
                                </div>
                            </div>
                            <div class="col col-stats">
                                <div class="numbers">
                                    <h5 class="card-category">Sembuh</h5>
                                    <h4 class="card-title">{{ $sembuh }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-danger card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center bubble-shadow-small">
                                    <i class="fas fa-sad-cry"></i>
                                </div>
                            </div>
                            <div class="col col-stats">
                                <div class="numbers">
                                    <h5 class="card-category">Meninggal</h5>
                                    <h4 class="card-title">{{ $meninggal }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <b>Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</b>
            </div>
            <div class="card-body">
                <div class="table-responsive service ">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">PROVINSI</th>
                                <th scope="col">POSITIF</th>
                                <th scope="col">SEMBUH</th>
                                <th scope="col">MENINGGAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($provinsi as $data)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <th>{{ $data->nama_provinsi }}</th>
                                    <th>{{ number_format($data->positif) }}</th>
                                    <th>{{ number_format($data->sembuh) }}</th>
                                    <th>{{ number_format($data->meninggal) }}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

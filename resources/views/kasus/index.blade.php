@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <div class="d-flex align-items-center">
                  <h4 class="card-title">Data Kasus</h4>
                  <a href="{{ route('kasus.create') }}" class="btn btn-primary btn-round ml-auto">
                  <i class="fa fa-plus"></i>
                  Add Data
                  </a>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="basic-datatables" class="display table table-bordered table-striped"> 
                     <thead align="center">
                        <th>No</th>
                        <th>Daerah</th>
                        <th>RW</th>
                        <th>Positif</th>
                        <th>Sembuh</th>
                        <th>Meninggal</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                     </thead>
                     <tbody>
                     @php $no = 1; @endphp
                        @foreach ($kasus as $data)
                           <tr align="center">
                              <td>{{ $no++ }}</td>
                              <td align="left">
                              Provinsi: {{ $data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi }}<br>
                              Kota: {{ $data->rw->kelurahan->kecamatan->kota->nama_kota }}<br>
                              Kecamatan: {{ $data->rw->kelurahan->kecamatan->nama_kecamatan }}<br>
                              Kelurahan: {{$data->rw->kelurahan->nama_kelurahan }}<br>
                              </td>
                              <td>{{ $data->rw->nama }}</td>
                              <td>{{ $data->positif }}</td>
                              <td>{{ $data->sembuh }}</td>
                              <td>{{ $data->meninggal }}</td>
                              <td>{{ $data->tanggal }}</td>
                              <td>
                                 <form action="{{route('kasus.destroy', $data->id)}}" method="post">
                                 @csrf
                                 @method("DELETE")
                                 <a class="btn btn-success" href="{{ route('kasus.show', $data->id) }}"><i class="far fa-eye"></i></a>
                                 <a class="btn btn-warning" href="{{ route('kasus.edit', $data->id) }}"><i class="far fa-edit"></i></a>
                                 <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                                 </form>
                              </td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

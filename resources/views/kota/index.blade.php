@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <div class="d-flex align-items-center">
                  <h4 class="card-title">Data Kota</h4>
                  <a href="{{ route('kota.create') }}" class="btn btn-primary btn-round ml-auto">
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
                        <th>Kode Kota</th>
                        <th>Nama Kota</th>
                        <th>Nama Provinsi</th>
                        <th>Action</th>
                     </thead>
                     <tbody>
                     @php $no = 1; @endphp
                        @foreach ($kota as $data)
                           <tr align="center">
                              <td>{{ $no++ }}</td>
                              <td>{{ $data->kode_kota }} </td>
                              <td>{{ $data->nama_kota }} </td>
                              <td>{{ $data->provinsi->nama_provinsi }} </td>
                              <td>
                                 <form action="{{route('kota.destroy', $data->id)}}" method="post">
                                 @csrf
                                 @method("DELETE")
                                 <a class="btn btn-success" href="{{ route('kota.show', $data->id) }}"><i class="far fa-eye"></i></a>
                                 <a class="btn btn-warning" href="{{ route('kota.edit', $data->id) }}"><i class="far fa-edit"></i></a>
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

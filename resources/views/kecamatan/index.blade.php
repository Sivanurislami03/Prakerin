@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <div class="d-flex align-items-center">
                  <h4 class="card-title">Data Kecamatan</h4>
                  <a href="{{ route('kecamatan.create') }}" class="btn btn-primary btn-round ml-auto">
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
                        <th>Nama Kecamatan</th>
                        <th>Nama Kota</th>
                        <th>Action</th>
                     </thead>
                     <tbody>
                     @php $no = 1; @endphp
                        @foreach ($kecamatan as $data)
                           <tr align="center">
                              <td>{{ $no++ }}</td>
                              <td>{{ $data->nama_kecamatan }} </td>
                              <td>{{ $data->kota->nama_kota }} </td>
                              <td>
                                 <form action="{{route('kecamatan.destroy', $data->id)}}" method="post">
                                 @csrf
                                 @method("DELETE")
                                 <a class="btn btn-success" href="{{ route('kecamatan.show', $data->id) }}"><i class="far fa-eye"></i></a>
                                 <a class="btn btn-warning" href="{{ route('kecamatan.edit', $data->id) }}"><i class="far fa-edit"></i></a>
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

@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Tambah Data provinsi</b></div>
               <div class="card-body">
                  <form action="{{ route('provinsi.store') }}" method="POST">
                  @csrf
                     <div class="form-group">
                        <label for="" class="form-label"><b>Kode Provinsi</b></label>
                        <input type="text" class="form-control" name="kode_provinsi" value="{{@old('kode_provinsi')}}" id="exampleInputKode">
                        @error('kode_provinsi')
                           <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Nama Provinsi</b></label>
                        <input type="text" class="form-control" name="nama_provinsi" value="{{@old('nama_provinsi')}}" id="exampleInputProvinsi">
                        @error('nama_provinsi')
                           <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Data</button>
                        <a href="{{ route('provinsi.index') }}" type="button" class="btn btn-warning">Back</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

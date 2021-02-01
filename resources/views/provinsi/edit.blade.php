@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">
               <div class="d-flex align-items-center">
                  <h4 class="card-title">Edit Data Provinsi</h4>
               </div>
            </div>               
            <div class="card-body">
               <form action="{{ route('provinsi.update', $provinsi->id) }}" method="POST">
               @csrf
               @method("PUT")
                  <div class="mb-3">
                     <label for="" class="form-label"><b>Kode Provinsi</b></label>
                     <input type="text" class="form-control" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}">
                     @error('kode_provinsi')
                        <div class="badge badge-danger">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="mb-3">
                     <label for="" class="form-label"><b>Nama Provinsi</b></label>
                     <input type="text" class="form-control" name="nama_provinsi" value="{{$provinsi->nama_provinsi}}">
                     @error('nama_provinsi')
                        <div class="badge badge-danger">{{ $message }}</div>
                     @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Add Data</button>
                  <a href="{{ route('provinsi.index') }}" type="button" class="btn btn-warning">Back</a>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

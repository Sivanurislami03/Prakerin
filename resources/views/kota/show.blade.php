@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">
               <div class="d-flex align-items-center">
                  <h4 class="card-title">Show Data Kota</h4>
               </div>
            </div>               
            <div class="card-body">
               <form>
                  <div class="form-group">
                     <label for="" class="form-label"><b>Kode Kota</b></label>
                     <input type="text" class="form-control" name="kode_kota" value="{{$kota->kode_kota}}" readonly>
                  </div>
                  <div class="form-group">
                     <label for="" class="form-label"><b>Nama Kota</b></label>
                     <input type="text" class="form-control" name="nama_kota" value="{{$kota->nama_kota}}" readonly>
                  </div>
                  <div class="form-group">
                     <label for="" class="form-label"><b>Nama Provinsi</b></label>
                     <input type="text" name="id_provinsi" class="form-control" value="{{$kota->provinsi->nama_provinsi}}" readonly>
                  </div>
                  <div class="form-group">
                     <a href="{{ route('kota.index') }}" type="submit" class="btn btn-primary">Back</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

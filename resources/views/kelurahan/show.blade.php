@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Show Data Kelurahan</b></div>
               <div class="card-body">
                  <form>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Nama Kelurahan</b></label>
                        <input type="text" class="form-control" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" readonly>
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Nama Kecamatan</b></label>
                        <input type="text" name="id_kecamatan" class="form-control" value="{{$kelurahan->kecamatan->nama_kecamatan}}" readonly>
                     </div>
                     <div class="form-group">
                        <a href="{{ route('kelurahan.index') }}" type="submit" class="btn btn-primary">Back</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

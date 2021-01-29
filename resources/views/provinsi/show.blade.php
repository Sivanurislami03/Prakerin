@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Show Data provinsi</b></div>
               <div class="card-body">
                  <form>
                     <div class="mb-3">
                        <label for="" class="form-label"><b>Kode Provinsi</b></label>
                        <input type="text" class="form-control" value="{{$provinsi->kode_provinsi}}" readonly>
                     </div>
                     <div class="mb-3">
                        <label for="" class="form-label"><b>Nama Provinsi</b></label>
                        <input type="text" class="form-control" value="{{$provinsi->nama_provinsi}}" readonly>
                     </div>
                     <a href="{{ route('provinsi.index') }}" type="submit" class="btn btn-primary">Back</a>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

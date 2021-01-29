@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Show Data RW</b></div>
               <div class="card-body">
                  <form>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Nama RW</b></label>
                        <input type="text" class="form-control" name="nama" value="{{$rw->nama}}" readonly>
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Nama Kelurahan</b></label>
                        <input type="text" name="id_kelurahan" class="form-control" value="{{$rw->kelurahan->nama_kelurahan}}" readonly>
                     </div>
                     <div class="form-group">
                        <a href="{{ route('rw.index') }}" type="submit" class="btn btn-primary">Back</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

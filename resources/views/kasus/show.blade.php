@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Show Data Kasus</b></div>
               <div class="card-body">
                  <form>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Nama RW</b></label>
                        <input type="text" name="id_rw" class="form-control" value="{{$kasus->rw->nama}}" readonly>
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Jumlah Positif</b></label>
                        <input type="text" class="form-control" name="positif" value="{{$kasus->positif}}" readonly>
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Jumlah Sembuh</b></label>
                        <input type="text" class="form-control" name="sembuh" value="{{$kasus->sembuh}}" readonly>
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Jumlah Meninggal</b></label>
                        <input type="text" class="form-control" name="meninggal" value="{{$kasus->meninggal}}" readonly>
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Tanggal</b></label>
                        <input type="date" class="form-control" name="tanggal" value="{{$kasus->tanggal}}" readonly>
                     </div>
                     <div class="form-group">
                        <a href="{{ route('kasus.index') }}" type="submit" class="btn btn-primary">Back</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

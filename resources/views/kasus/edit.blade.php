@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Edit Data Kasus</b></div>
               <div class="card-body">
                  <form action="{{ route('kasus.update', $kasus->id) }}" method="POST">
                  @csrf
                     @livewireStyles
                        
                     @livewireScripts
                  @method('PUT')
                     <div>
                     @livewire('select', ['selectedState5' => $kasus->id_rw])
                     </div>
                     <br><h2 align="center"><b><u>Status Kasus</u><b></h3>
                     <div class="form-group">
                        <label for="" class="form-label">Jumlah Positif</label>
                        <input type="text" class="form-control" name="positif" value="{{$kasus->positif}}">
                        @error('positif')
                           <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label">Jumlah Sembuh</label>
                        <input type="text" class="form-control" name="sembuh" value="{{$kasus->sembuh}}">
                        @error('sembuh')
                           <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label">Jumlah Meninggal</label>
                        <input type="text" class="form-control" name="meninggal" value="{{$kasus->meninggal}}">
                        @error('meninggal')
                           <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="{{$kasus->tanggal}}">
                        @error('tanggal')
                           <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Data</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

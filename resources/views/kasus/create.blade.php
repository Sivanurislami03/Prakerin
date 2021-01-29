@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Tambah Data Kasus</b></div>
               <div class="card-body">
                  <form action="{{ route('kasus.store') }}" method="POST">
                  @csrf
                     @livewireStyles
                        @livewire('select')          
                     @livewireScripts
                     
                     <br><h2 align="center"><b><u>Status Kasus</u><b></h3>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Jumlah Positif</b></label>
                        <input type="text" class="form-control" name="positif" value="{{@old('positif')}}">
                        @error('positif')
                           <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Jumlah Sembuh</b></label>
                        <input type="text" class="form-control" name="sembuh" value="{{@old('sembuh')}}">
                        @error('sembuh')
                           <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Jumlah Meninggal</b></label>
                        <input type="text" class="form-control" name="meninggal" value="{{@old('meninggal')}}">
                        @error('meninggal')
                           <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Tanggal</b></label>
                        <input type="date" class="form-control" name="tanggal" value="{{@old('tanggal')}}">
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

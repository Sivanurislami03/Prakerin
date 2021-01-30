@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Tambah Data Kecamatan</b></div>
               <div class="card-body">
                  <form action="{{ route('kecamatan.store') }}" method="POST">
                  @csrf
                     <div class="form-group">
                        <label for="" class="form-label"><b>Nama Kecamatan</b></label>
                        <input type="text" class="form-control" name="nama_kecamatan" value="{{@old('nama_kecamatan')}}">
                        @error('nama_kecamatan')
                           <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label"><b>Nama Kota</b></label>
                        <select class="form-control" name="id_kota">
                           @foreach($kota as $data)
                              <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Data</button>
                        <a href="{{ route('kecamatan.index') }}" type="button" class="btn btn-warning">Back</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

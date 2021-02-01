@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">
               <div class="d-flex align-items-center">
                  <h4 class="card-title">Edit Data Kota</h4>
               </div>
            </div>               
            <div class="card-body">
               <form action="{{ route('kota.update', $kota->id) }}" method="POST">
               @csrf
               @method('PUT')
                  <div class="form-group">
                     <label for="" class="form-label"><b>Kode Kota</b></label>
                     <input type="badge badge-danger" class="form-control" name="kode_kota" value="{{$kota->kode_kota}}">
                     @error('kode_kota')
                        <div class="badge badge-danger">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="form-group">
                     <label for="" class="form-label"><b>Nama Kota</b></label>
                     <input type="badge badge-danger" class="form-control" name="nama_kota" value="{{$kota->nama_kota}}">
                     @error('nama_kota')
                        <div class="badge badge-danger">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="form-group">
                     <label for="" class="form-label"><b>Nama Provinsi</b></label>
                     <select class="form-control" name="id_provinsi">
                     @foreach($provinsi as $data)
                     <option value="{{$data->id}}"
                        {{$data->id == $kota->id_provinsi ? "selected":""}}>{{$data->nama_provinsi}}</option>
                     @endforeach
                     </select>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary">Add Data</button>
                     <a href="{{ route('kota.index') }}" type="button" class="btn btn-warning">Back</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

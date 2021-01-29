@extends('layouts.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header"><b>Edit Data Kecamatan</b></div>
               <div class="card-body">
                  <form action="{{ route('kecamatan.update', $kecamatan->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                     <div class="form-group">
                        <label for="" class="form-label">Nama Kecamatan</label>
                        <input type="text" class="form-control" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}">
                        @error('nama_kecamatan')
                           <div class="badge badge-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="" class="form-label">Nama Kota</label>
                        <select class="form-control" name="id_kota">
                        @foreach($kota as $data)
                        <option value="{{$data->id}}"
                           {{$data->id == $kecamatan->id_kota ? "selected":""}}>{{$data->nama_kota}}</option>
                        @endforeach
                        </select>
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

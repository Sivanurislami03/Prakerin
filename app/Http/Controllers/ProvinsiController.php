<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function __construct() // memberi izin
   {
      $this->middleware('auth');
   }
   
   public function index()
   {
      $provinsi = Provinsi::all();
      return view('provinsi.index', compact('provinsi'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $provinsi = Provinsi::all();
      return view('provinsi.create', compact('provinsi'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      $request->validate([
         'kode_provinsi' => 'required',
         'nama_provinsi' => 'required',
      ],[
         'kode_provinsi.required' => 'Kode Provinsi tidak boleh kosong!',
         'nama_provinsi.required' => 'Nama Provinsi tidak boleh kosong!'
      ]);

      $provinsi = new Provinsi; //mengambil/Menampung
      $provinsi->kode_provinsi = $request->kode_provinsi;
      $provinsi->nama_provinsi = $request->nama_provinsi;
      $provinsi->save();
      return redirect()->route('provinsi.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Provinsi  $provinsi
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $provinsi = Provinsi::findOrFail($id);
      return view('provinsi.show', compact('provinsi'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Provinsi  $provinsi
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
      $provinsi = Provinsi::findOrFail($id);
      return view('provinsi.edit', compact('provinsi'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Provinsi  $provinsi
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
      $request->validate([
         'kode_provinsi' => 'required',
         'nama_provinsi' => 'required',
      ],[
         'kode_provinsi.required' => 'Kode Provinsi tidak boleh kosong!',
         'nama_provinsi.required' => 'Nama Provinsi tidak boleh kosong!'
      ]);
      
      $provinsi = Provinsi::findOrFail($id);
      $provinsi->kode_provinsi = $request->kode_provinsi;
      $provinsi->nama_provinsi = $request->nama_provinsi;
      $provinsi->save();
      return redirect()->route('provinsi.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Provinsi  $provinsi
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $provinsi = Provinsi::findOrFail($id);
      $provinsi->delete();
      return redirect()->route('provinsi.index');
   }
}

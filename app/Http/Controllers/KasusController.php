<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Rw;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kasus = Kasus::with('rw')->get();
        return view('kasus.index', compact('kasus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Rw::all();
        return view('kasus.create', compact('rw'));
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
            'id_rw' => 'required',
            'positif' => 'required',
            'sembuh' => 'required',
            'meninggal' => 'required',
            'tanggal' => 'required',
         ],[
            'id_rw.required' => 'Nama RW tidak boleh kosong!',
            'positif.required' => 'Jumlah Positif tidak boleh kosong!',
            'sembuh.required' => 'Jumlah Sembuh tidak boleh kosong!',
            'meninggal.required' => 'Jumlah Meninggal tidak boleh kosong!',
            'tanggal.required' => 'Tanggal tidak boleh kosong!'
         ]);

        $kasus = new Kasus;
        $kasus->id_rw = $request->id_rw;
        $kasus->positif = $request->positif;
        $kasus->sembuh = $request->sembuh;
        $kasus->meninggal = $request->meninggal;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kasus = Kasus::findOrFail($id);
        return view('kasus.show', compact('kasus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kasus = Kasus::findOrFail($id);
        $rw = Rw::all();
        return view('kasus.edit', compact('kasus', 'rw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_rw' => 'required',
            'positif' => 'required',
            'sembuh' => 'required',
            'meninggal' => 'required',
            'tanggal' => 'required',

         ],[
            'id_rw.required' => 'Nama RW tidak boleh kosong!',
            'positif.required' => 'Jumlah Positif tidak boleh kosong!',
            'sembuh.required' => 'Jumlah Sembuh tidak boleh kosong!',
            'meninggal.required' => 'Jumlah Meninggal tidak boleh kosong!',
            'tanggal.required' => 'Tanggal tidak boleh kosong!'
         ]);

        $kasus = Kasus::findOrFail($id);
        $kasus->id_rw = $request->id_rw;
        $kasus->positif = $request->positif;
        $kasus->sembuh = $request->sembuh;
        $kasus->meninggal = $request->meninggal;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasus = Kasus::findOrFail($id)->delete();
        return redirect()->route('kasus.index');
    }
}

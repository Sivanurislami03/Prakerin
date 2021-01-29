<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use App\Models\Kelurahan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class RwController extends Controller
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
        $rw = Rw::with('kelurahan')->get();
        return view('rw.index', compact('rw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('rw.create', compact('kelurahan'));
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
            'nama' => 'required',
            'id_kelurahan' => 'required',
         ],[
            'nama.required' => 'Nama RW tidak boleh kosong!',
            'id_kelurahan.required' => 'Nama Kelurahan tidak boleh kosong!',
         ]);

        $rw = new Rw;
        $rw->nama = $request->nama;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rw = Rw::findOrFail($id);
        return view('rw.show', compact('rw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rw = Rw::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('rw.edit', compact('rw', 'kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'id_kelurahan' => 'required',
         ],[
            'nama.required' => 'Nama RW tidak boleh kosong!',
            'id_kelurahan.required' => 'Nama Kelurahan tidak boleh kosong!',
         ]);
         
        $rw = Rw::findOrFail($id);
        $rw->nama = $request->nama;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rw = Rw::findOrFail($id)->delete();
        return redirect()->route('rw.index');
    }
}

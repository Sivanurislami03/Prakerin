<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $positif = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.sembuh','kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.positif');
        $sembuh = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.sembuh','kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.sembuh');
        $meninggal = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.positif','kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.meninggal');

        $provinsi = DB::table('provinsis')
        ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
        ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
        ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
        ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('kasuses', 'kasuses.id_rw', 'rws.id')
        ->select('kode_provinsi','nama_provinsi',
                DB::raw('sum(kasuses.positif) as positif'),
                DB::raw('sum(kasuses.sembuh) as sembuh'),
                DB::raw('sum(kasuses.meninggal) as meninggal'),
        )
        ->groupBy('kode_provinsi','nama_provinsi')
        ->get();

        return view('home ', compact('positif','sembuh','meninggal','provinsi'));
    }

    public function admin()
    {
        return view('layouts.master');
    }
}

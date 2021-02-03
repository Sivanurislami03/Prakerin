<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\RW;
use App\Models\Kasus;
use DB;

class ApiController extends Controller
{
    public function index() {

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

        $res = [
            'success' => true,
            'Data'              => 'Data Kasus Indonesia',
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninggal'  => $meninggal,
            'message' => 'Data Kasus Ditampilkan'
        ];

        return response()->json($res,200);

    }

    public function provinsi($id) {
        
        $positif = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.positif')
                ->where('provinsis.id', $id)
                ->sum('kasuses.positif');

        $sembuh = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.sembuh')
                ->where('provinsis.id', $id)
                ->sum('kasuses.sembuh');

        $meninggal = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.meninggal')
                ->where('provinsis.id', $id)
                ->sum('kasuses.meninggal');

        $provinsi = Provinsi::whereId($id)->first();
        // $provinsi = Provinsi::findOrFail($id, 'nama_provinsi');

        $data = [
            'success' => true,
            'Provinsi'          => $provinsi['nama_provinsi'],
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninggal'  => $meninggal,
            'message' => 'Data Kasus Ditampilkan'
        ];

        return response()->json($data,200);
    }

    // public function provinsi2() {
    //     $provinsi = DB::table('provinsis')
    //             ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
    //             DB::raw('SUM(kasuses.positif) as positif'),
    //             DB::raw('SUM(kasuses.sembuh) as sembuh'),
    //             DB::raw('SUM(kasuses.meninggal) as meninggal'));
        
    //     $data = [
    //         'success' => true,
    //         'Data' => $provinsi,
    //         'message' => 'Data Kasus Ditampilkan'
    //     ];
    // }
}

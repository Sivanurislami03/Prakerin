<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Kasus;
use DB;

class ApiController extends Controller
{
    // INDONESIA
    public function indonesia() {

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
            'success'           => true,
            'Data'              => 'Data Kasus Indonesia',
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninggal'  => $meninggal,
            'message'           => 'Data Kasus Ditampilkan'
        ];

        return response()->json($res,200);

    }

    // PROVINSI
    public function provinsi() {
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

        $data = [
            'status'  => true,
            'message' => 'Menampilkan Provinsi',
            'data'    => $provinsi,
        ];
   
        return response()->json($data, 200);

    }

    public function provinsiId($id) {
        
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

        // $provinsi = Provinsi::whereId($id)->first();
        $provinsi = Provinsi::findOrFail($id);

        $data = [
            'success'           => true,
            'Provinsi'          => $provinsi['nama_provinsi'],
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninggal'  => $meninggal,
            'message'           => 'Data Kasus Ditampilkan'
        ];

        return response()->json($data,200);
    }

    // KOTA
    public function kota() {
        $kota = DB::table('kotas')
                ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
                ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
                ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
                ->join('kasuses', 'kasuses.id_rw', 'rws.id')
                ->select('kode_kota','nama_kota',
                    DB::raw('sum(kasuses.positif) as positif'),
                    DB::raw('sum(kasuses.sembuh) as sembuh'),
                    DB::raw('sum(kasuses.meninggal) as meninggal'),
                )
                ->groupBy('kode_kota','nama_kota')
                ->get();

        $data = [
            'status'  => true,
            'message' => 'Menampilkan Kota',
            'data'    => $kota,
        ];
   
        return response()->json($data, 200);
    }

    public function kotaId($id) {
        
        $positif = DB::table('kotas')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.positif')
                ->where('kotas.id', $id)
                ->sum('kasuses.positif');

        $sembuh = DB::table('kotas')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.sembuh')
                ->where('kotas.id', $id)
                ->sum('kasuses.sembuh');

        $meninggal = DB::table('kotas')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.meninggal')
                ->where('kotas.id', $id)
                ->sum('kasuses.meninggal');

        $kota = Kota::findOrFail($id);

        $data = [
            'success'           => true,
            'Kota'              => $kota['nama_kota'],
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninggal'  => $meninggal,
            'message'           => 'Data Kasus Ditampilkan'
        ];

        return response()->json($data,200);
    }

    // KECAMATAN
    public function kecamatan() {
        $kecamatan = DB::table('kecamatans')
                ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
                ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
                ->join('kasuses', 'kasuses.id_rw', 'rws.id')
                ->select('nama_kecamatan',
                    DB::raw('sum(kasuses.positif) as positif'),
                    DB::raw('sum(kasuses.sembuh) as sembuh'),
                    DB::raw('sum(kasuses.meninggal) as meninggal'),
                )
                ->groupBy('nama_kecamatan')
                ->get();

        $data = [
            'status'  => true,
            'message' => 'Menampilkan Kecamatan',
            'data'    => $kecamatan,
        ];
   
        return response()->json($data, 200);
    }

    public function kecamatanId($id) {
        
        $positif = DB::table('kecamatans')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.positif')
                ->where('kecamatans.id', $id)
                ->sum('kasuses.positif');

        $sembuh = DB::table('kecamatans')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.sembuh')
                ->where('kecamatans.id', $id)
                ->sum('kasuses.sembuh');

        $meninggal = DB::table('kecamatans')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.meninggal')
                ->where('kecamatans.id', $id)
                ->sum('kasuses.meninggal');

        $kecamatan = Kecamatan::findOrFail($id);

        $data = [
            'success'           => true,
            'Kecamatan'         => $kecamatan['nama_kecamatan'],
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninggal'  => $meninggal,
            'message'           => 'Data Kasus Ditampilkan'
        ];

        return response()->json($data,200);
    }

    // KELURAHAN
    public function kelurahan() {
        $kelurahan = DB::table('kelurahans')
                ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
                ->join('kasuses', 'kasuses.id_rw', 'rws.id')
                ->select('nama_kelurahan',
                    DB::raw('sum(kasuses.positif) as positif'),
                    DB::raw('sum(kasuses.sembuh) as sembuh'),
                    DB::raw('sum(kasuses.meninggal) as meninggal'),
                )
                ->groupBy('nama_kelurahan')
                ->get();

        $data = [
            'status'  => true,
            'message' => 'Menampilkan Kelurahan',
            'data'    => $kelurahan,
        ];
   
        return response()->json($data, 200);
    }

    public function kelurahanId($id) {
        
        $positif = DB::table('kelurahans')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.positif')
                ->where('kelurahans.id', $id)
                ->sum('kasuses.positif');

        $sembuh = DB::table('kelurahans')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.sembuh')
                ->where('kelurahans.id', $id)
                ->sum('kasuses.sembuh');

        $meninggal = DB::table('kelurahans')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.meninggal')
                ->where('kelurahans.id', $id)
                ->sum('kasuses.meninggal');

        $kelurahan = Kelurahan::findOrFail($id);

        $data = [
            'success'           => true,
            'Kelurahan'         => $kelurahan['nama_kelurahan'],
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninggal'  => $meninggal,
            'message'           => 'Data Kasus Ditampilkan'
        ];

        return response()->json($data,200);
    }

    public function hari() {
        $kasus = Kasus::get('created_at')->last();
        $positif = Kasus::where('tanggal', date('Y-m-d'))->sum('positif');
        $sembuh = Kasus::where('tanggal', date('Y-m-d'))->sum('sembuh');
        $meninggal = Kasus::where('tanggal', date('Y-m-d'))->sum('meninggal');

        $join = DB::table('kasuses')
                ->select('positif','sembuh','meninggal')
                ->get();

        $arr1 = [
            'Data' => 'Data Kasus Seluruh Indonesia',
            'Jumlah Positif' => $join->sum('positif'),
            'Jumlah Sembuh' => $join->sum('sembuh'),
            'Jumlah Meninggal' => $join->sum('meninggal'),
        ];
        $arr2 = [
            'Data' => 'Data Kasus Hari Ini',
            'Jumlah Positif' => $positif,
            'Jumlah Sembuh' => $sembuh,
            'Jumlah Meninggal' => $meninggal,
        ];
        $arr = [
            'status' => 200,
            'data' => [
                'Hari Ini' => $arr2,
                'total' => $arr1
            ],
            'message' => 'Berhasil'
        ];
        
        return response()->json($arr, 200);    
    }

    public function global(){
        $url = Http::get('https://api.kawalcorona.com/')->json();
        $data = [
            'success' => true,
            'data' => $url,
            'message' => 'Menampilkan Global'
        ];

        return response()->json($data, 200);
    }
}

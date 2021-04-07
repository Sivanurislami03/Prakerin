<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelurahan = [
            ['id_kecamatan' => 1, 'nama_Kelurahan' => "LABUHAN BAJAU"],
            ['id_kecamatan' => 1, 'nama_Kelurahan' => "SUAK LAMATAN"],
            ['id_kecamatan' => 1, 'nama_Kelurahan' => "ANA AO"],
            ['id_kecamatan' => 1, 'nama_Kelurahan' => "LATALING"],
            ['id_kecamatan' => 2, 'nama_Kelurahan' => "TETE GOENAAI"],
            ['id_kecamatan' => 2, 'nama_Kelurahan' => "LAOWO HILIMBARUZO"],
            ['id_kecamatan' => 2, 'nama_Kelurahan' => "HILILAWAE"],
            ['id_kecamatan' => 2, 'nama_Kelurahan' => "TUHEWAEBU"],
            ['id_kecamatan' => 2, 'nama_Kelurahan' => "SISOBAHILI IRAONOHURA"],
            ['id_kecamatan' => 3, 'nama_Kelurahan' => "BULASAT"],
            ['id_kecamatan' => 3, 'nama_Kelurahan' => "SINAKA"],
            ['id_kecamatan' => 3, 'nama_Kelurahan' => "	MAKALO"],
            ['id_kecamatan' => 3, 'nama_Kelurahan' => "MALAKOPA"],
            ['id_kecamatan' => 3, 'nama_Kelurahan' => "TAIKAKO"],
            ['id_kecamatan' => 4, 'nama_Kelurahan' => "PANTAI"],
            ['id_kecamatan' => 4, 'nama_Kelurahan' => "AIR BULUH"],
            ['id_kecamatan' => 4, 'nama_Kelurahan' => "LUBUK RAMO"],
            ['id_kecamatan' => 4, 'nama_Kelurahan' => "KOTO CENGAR"],
            ['id_kecamatan' => 4, 'nama_Kelurahan' => "SEBERANG CENGAR"],
            ['id_kecamatan' => 5, 'nama_Kelurahan' => "LEMPUR MUDIK"],
            ['id_kecamatan' => 5, 'nama_Kelurahan' => "DUSUN BARU LEMPUR"],
            ['id_kecamatan' => 5, 'nama_Kelurahan' => "LEMPUR TENGAH"],
            ['id_kecamatan' => 5, 'nama_Kelurahan' => "LEMPUR HILIR"],
            ['id_kecamatan' => 5, 'nama_Kelurahan' => "PERIKAN TENGAH"],
            ['id_kecamatan' => 6, 'nama_Kelurahan' => "BANDAR JAYA"],
            ['id_kecamatan' => 6, 'nama_Kelurahan' => "KARANG ENDAH"],
            ['id_kecamatan' => 6, 'nama_Kelurahan' => "PAJAR BULAN"],
            ['id_kecamatan' => 6, 'nama_Kelurahan' => "PAGAR DEWA"],
            ['id_kecamatan' => 6, 'nama_Kelurahan' => "TANJUNG LENGKAYAP"],
            ['id_kecamatan' => 7, 'nama_Kelurahan' => "KETAPING"],
            ['id_kecamatan' => 7, 'nama_Kelurahan' => "TERULUNG"],
            ['id_kecamatan' => 7, 'nama_Kelurahan' => "MANGGUL"],
            ['id_kecamatan' => 7, 'nama_Kelurahan' => "TANJUNG BESAR"],
            ['id_kecamatan' => 7, 'nama_Kelurahan' => "LUBUK SIRIH ULU"],
        ];
        DB::table('kelurahans')->insert($kelurahan);
    }
}

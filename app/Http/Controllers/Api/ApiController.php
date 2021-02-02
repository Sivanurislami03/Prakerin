<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kasus;

class ApiController extends Controller
{
    public function index(){
        $kasus = Kasus::latest()->get();
        $res = [
            'success' => true,
            'data' => $kasus,
            'message' => 'Data Berhasil Ditampilkan'
        ];
        return response()->json($res,200);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;

    protected $table = "rws";
    protected $fillable = ['nama', 'id_kelurahan'];
    public $timestamps = true;

    public function kelurahan(){
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan');
    }

    public function kasus(){
        return $this->hasMany(Kasus::class, 'id_kasus');
    }
}

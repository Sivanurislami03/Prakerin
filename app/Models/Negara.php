<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    use HasFactory;

    protected $table = "negaras";

    public function kasus2(){
        return $this->hasMany(Kasus2::class);
    }
}

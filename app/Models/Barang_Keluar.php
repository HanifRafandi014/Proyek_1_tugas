<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Barang_Keluar extends Model
{
    use HasFactory;
    protected $table='barang_keluar';

    public function staff(){
        return $this->belongsTo(Staff::class);
    }

    public function barang(){
        return $this->hasMany(Barang::class);
    }
}

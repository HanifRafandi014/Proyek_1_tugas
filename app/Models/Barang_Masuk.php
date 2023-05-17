<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Barang_Masuk extends Model
{
    use HasFactory;

    protected $table='barang_masuk';

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function barang(){
        return $this->hasMany(Barang::class);
    }
}

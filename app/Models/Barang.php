<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang_Masuk;

class Barang extends Model
{
    use HasFactory;

    protected $table="barang"; 
    public $timestamps= false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_barang',
        'stok',
        'harga',
    ];

    public function barang_masuk(){
        return $this->belongsTo(Barang_Masuk::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table="mitra";

    protected $fillable = [
        'nama',
        'nomor',
        'alamat',
        'ktp',
        'foto',
    ];

    // protected $table = "kategori";

    // protected $fillable = [
    //     'layanan_servis',
      
    // ];
}
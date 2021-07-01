<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;
    
        protected $table = "mitra";
        protected $primaryKey = "id";
        protected $fillable = [
          'id','nama', 'nomor', 'alamat', 'layanan_servis', 'ktp',];
    
}

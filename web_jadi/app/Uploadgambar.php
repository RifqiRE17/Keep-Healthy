<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadgambar extends Model
{
    protected $table = "mitra";
    protected $primaryKey = "id";
    protected $fillable = [
      'id','nama', 'nomor', 'alamat', 'layanan_servis', 'ktp'];
}

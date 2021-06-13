<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadgambar extends Model
{
    protected $table = "uploadgambar";
    protected $primaryKey = "id";
    protected $fillable = [
      'id','nama', 'jabatan', 'alamat', 'upload_foto', 'upload_ktp'];
}

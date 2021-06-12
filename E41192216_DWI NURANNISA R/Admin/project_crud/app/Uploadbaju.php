<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadbaju extends Model
{
    protected $table = "uploadbaju";
    protected $primaryKey = "id";
    protected $fillable = [
      'id','nama', 'hargalayanan', 'alamat', 'upload_foto',];
}

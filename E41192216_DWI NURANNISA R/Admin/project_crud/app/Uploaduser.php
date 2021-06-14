<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploaduser extends Model
{
    protected $table = "uploaduser";
    protected $primaryKey = "id";
    protected $fillable = [
      'id','nama', 'jeniskelamin', 'alamat', 'upload_foto', 'upload_ktp'];
}
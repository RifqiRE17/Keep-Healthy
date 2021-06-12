<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadmotor extends Model
{
    protected $table = "uploadmotor";
    protected $primaryKey = "id";
    protected $fillable = [
      'id','nama', 'hargalayanan', 'alamat', 'upload_foto',];
}

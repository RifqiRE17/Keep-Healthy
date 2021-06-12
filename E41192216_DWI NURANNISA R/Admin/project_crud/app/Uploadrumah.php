<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadrumah extends Model
{
    protected $table = "uploadrumah";
    protected $primaryKey = "id";
    protected $fillable = [
      'id','nama', 'hargalayanan', 'alamat', 'upload_foto',];
}

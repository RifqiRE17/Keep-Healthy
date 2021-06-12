<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadsepatu extends Model
{
    protected $table = "uploadsepatu";
    protected $primaryKey = "id";
    protected $fillable = [
      'id','nama', 'hargalayanan', 'alamat', 'upload_foto',];
}

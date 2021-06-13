<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadsepatu extends Model
{
    protected $table = "uploadsepatu";
    protected $primaryKey = "id";
    protected $fillable = [
      'id', 'hargalayanan', 'upload_foto'];
}

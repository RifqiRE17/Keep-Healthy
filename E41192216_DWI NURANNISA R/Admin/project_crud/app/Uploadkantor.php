<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadkantor extends Model
{
    protected $table = "uploadkantor";
    protected $primaryKey = "id";
    protected $fillable = [
      'id', 'hargalayanan', 'upload_foto'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadbaju extends Model
{
    protected $table = "uploadbaju";
    protected $primaryKey = "id";
    protected $fillable = [
      'id', 'hargalayanan', 'upload_foto'];
}

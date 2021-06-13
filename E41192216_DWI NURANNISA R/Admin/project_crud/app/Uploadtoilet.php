<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadtoilet extends Model
{
    protected $table = "uploadtoilet";
    protected $primaryKey = "id";
    protected $fillable = [
      'id', 'hargalayanan', 'upload_foto'];
}
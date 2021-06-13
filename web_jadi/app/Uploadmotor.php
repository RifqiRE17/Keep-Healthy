<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadmotor extends Model
{
    protected $table = "uploadmotor";
    protected $primaryKey = "id";
    protected $fillable = [
      'id', 'hargalayanan', 'upload_foto'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadumum extends Model
{
    protected $table = "uploadumum";
    protected $primaryKey = "id";
    protected $fillable = [
      'id', 'hargalayanan', 'upload_foto'];
}

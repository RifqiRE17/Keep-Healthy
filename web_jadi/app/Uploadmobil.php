<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadmobil extends Model
{
    protected $table = "uploadmobil";
    protected $primaryKey = "id";
    protected $fillable = [
      'id', 'hargalayanan', 'upload_foto'];
    }
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploaduser extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
      'id','name', 'email', 'alamat', 'upload_foto', ];
}
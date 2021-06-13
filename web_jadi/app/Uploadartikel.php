<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadartikel extends Model
{
    protected $table = "uploadartikel";
    protected $primaryKey = "id";
    protected $fillable = [
      'id','namaartikel', 'isiartikel', 'upload_foto'];
}

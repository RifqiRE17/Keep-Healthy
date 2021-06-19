<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadartikels extends Model
{
    protected $table = "uploadartikels";
    protected $primaryKey = "id";
    protected $fillable = [
      'id','namaartikel', 'isiartikel', 'upload_foto'];
}

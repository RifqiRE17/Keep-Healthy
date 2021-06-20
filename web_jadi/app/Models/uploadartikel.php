<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadartikel extends Model
{
    use HasFactory;
    protected $table = "uploadartikels";
    protected $primaryKey = "id";
    protected $fillable = [
    'id','namaartikel', 'isiartikel','tanggal_upload', 'upload_foto'];
}

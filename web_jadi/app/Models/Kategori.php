<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Mockery\Matcher\Type;

class Kategori extends Model
{
    use HasFactory;
    protected $table="kategori";

    protected $fillable = [
        'layanan_servis',
      
    ];
}
 
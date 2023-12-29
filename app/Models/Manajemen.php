<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manajemen extends Model
{
    use HasFactory;
        protected $fillable = [
        'merek',
        'model',
        'no_plat',
        'tarif_perhari',
    ];
}

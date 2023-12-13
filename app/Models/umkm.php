<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'deskripsi', 'narahubung', 'ponsel', 'image', 'slug'
    ];

    protected $hidden = [];
}

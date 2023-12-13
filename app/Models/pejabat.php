<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pejabat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'jabatan', 'image'
    ];

    protected $hidden = [];
}

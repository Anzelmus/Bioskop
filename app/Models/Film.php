<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'kode',
        'judul',
        'tahun',
        'jam_tayang',
        'cover'
    ];
}
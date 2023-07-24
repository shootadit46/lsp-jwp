<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentar';

    protected $casts = [
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d',
    ];

    protected $fillable = ['id_mading', 'nama', 'email', 'komentar', 'likes'];
}

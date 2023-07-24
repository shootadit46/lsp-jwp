<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mading extends Model
{
    use HasFactory;

    protected $table = 'mading';

    protected $fillable = ['judul', 'deskripsi', 'gambar'];

    protected $casts = [
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d',
    ];

    public function komentars()
    {
        return $this->hasMany(Komentar::class, 'id_mading', 'id');
    }
}

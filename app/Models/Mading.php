<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mading extends Model
{
    use HasFactory;

    protected $table = 'mading';

    protected $fillable = ['judul', 'deskripsi', 'gambar'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    /** @use HasFactory<\Database\Factories\PengumumanFactory> */
    use HasFactory;
    protected $fillable = [
        'judul',
        'deskripsi_singkat',
        'konten',
        'gambar_pengumuman',
    ];
    
}

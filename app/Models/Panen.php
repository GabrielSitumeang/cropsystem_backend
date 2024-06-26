<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    use HasFactory;

    protected $table = 'panens';

    protected $fillable = ['namatanaman','judul', 'isi', 'gambar_tanaman', 'keterangan'];
}

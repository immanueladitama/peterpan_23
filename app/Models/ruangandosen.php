<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangandosen extends Model
{
    use HasFactory;
    protected $table = 'ruangandosen';
    protected $primarykey = 'id';
    protected $fillable = ['nama_ruangan','kategori','kapasitas','fasilitas'];
}

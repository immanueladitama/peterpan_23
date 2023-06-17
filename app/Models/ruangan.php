<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    use HasFactory;
    protected $table = 'ruangan';
    protected $primarykey = 'id';
    protected $fillable = ['nama_ruangan','kategori','kapasitas','fasilitas'];
}

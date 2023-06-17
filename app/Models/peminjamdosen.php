<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamdosen extends Model
{
    use HasFactory;
    protected $table = 'dosenpinjam';
    protected $primarykey = 'id';
    protected $fillable = ['nama','nik','fakultas','prodi','tgl_pinjam','jam_mulai','jam_selesai','ruangan'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjam extends Model
{
    use HasFactory;
    protected $table = 'peminjam';
    protected $primarykey = 'id';
    protected $fillable = ['nama','nim','prodi','tgl_pinjam','jam_mulai','jam_selesai','ruangan'];
}

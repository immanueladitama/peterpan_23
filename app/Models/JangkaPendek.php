<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JangkaPendek extends Model
{
    use HasFactory;

    protected $table = 'peminjaman_jangka_pendek';

    protected $guarded = [];
}

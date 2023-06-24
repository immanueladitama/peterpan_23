<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JangkaPanjang extends Model
{
    use HasFactory;

    protected $table = 'peminjaman_jangka_panjang';

    protected $guarded = [];
    protected $casts = [
        'hari' => 'array',
    ];

    public function setYourJsonColumnAttribute($value)
    {   
        $this->attributes['hari'] = json_encode($value);
    }
}

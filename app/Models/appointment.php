<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected $fillable = [
        'start_time',
        'finish_time',
        'comments',
        'mahasiswa_id',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class);
    }
 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $table = 'episodes';

    protected $guarded = [];

    public function series()
    {
        $this->belongsTo(Serie::class);
    }
}

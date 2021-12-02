<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mejoramiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'fortalezas',
        'aspectos_mejorar',
    ];

    protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'idevaluacion',
    //     'compromiso',
    //     'ciudad',
    //     'evaluador_dos',
    // ];

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $fillable = [
    //     // 'idevaluacion',
    //     'compromiso',
    //     'ciudad',
    //     'evaluador_dos',
    // ];

    public function getRouteKeyName()
    {
        return 'cc';
    }

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // public $timestamps = false;
}

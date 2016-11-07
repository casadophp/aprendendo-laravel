<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuarios extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'nome',
        'email',
        'senha',
    ];

}

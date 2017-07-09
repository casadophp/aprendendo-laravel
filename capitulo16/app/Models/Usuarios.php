<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Permissoes;

class Usuarios extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'nome',
        'email',
        'senha',
    ];

    public function permissoes()
    {
        return $this->belongsToMany(Permissoes::class, '');
    }
}

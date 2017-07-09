<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Usuarios;

class Permissoes extends Model
{
    protected $table = 'permissoes';

    public function usuarios()
    {
        return $this->belongsToMany(Usuarios::class, 'usuarios_permissoes');
    }
}

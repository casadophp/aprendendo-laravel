<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa';
    protected $fillable = [
        'nome'
    ];
    public $timestamps = false;

    public function telefones()
    {
        return $this->hasMany(Telefone::class);
    }
}

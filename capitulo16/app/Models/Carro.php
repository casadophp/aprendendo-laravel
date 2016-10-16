<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carro';
    public $timestamps = false;

    protected $fillable = [
        'descricao',
        'ano',
    ];

    public function marca()
    {
        return $this->hasOne(Marca::class);
    }
}
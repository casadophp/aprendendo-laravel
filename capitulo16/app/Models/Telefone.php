<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefone';
    protected $fillable = [
        'telefone'
    ];
    public $timestamps = false;
}

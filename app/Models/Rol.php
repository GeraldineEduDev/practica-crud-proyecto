<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public $table = "roles";

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function usuarios() {
        return $this->hasMany('App\Models\Usuario');
    }

}

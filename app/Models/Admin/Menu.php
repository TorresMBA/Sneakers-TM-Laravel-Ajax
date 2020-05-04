<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = [//cuales son los campos o atributos de la base de datos, o los campos pertenecientes a este modelo para poder crear masivamente
        'nombre',
        'url',
        'icono'
    ];
    protected $guarded = 'id';//Campos que laravel no va a dejar modificaar en este caso id
    //public $timestamps = false;//Permite usar 
}

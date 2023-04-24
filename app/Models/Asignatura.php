<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Asignatura;

class Asignatura extends Model
{
   
    use HasFactory;
public $timestamps = false;
protected $fillable =
['documento_identidad','nombre','apellido','email','telefono'];

}
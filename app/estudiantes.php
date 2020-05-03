<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{

protected $fillable = ['nombre', 'edad', 'sexo', 'seccion', 'grado'];

}

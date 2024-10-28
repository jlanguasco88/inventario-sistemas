<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelosToners extends Model
{
    use HasFactory;
    protected $table = "modelostoners";

    protected $fillable = [
        'nombre',
        'activo'
        
    ];

}

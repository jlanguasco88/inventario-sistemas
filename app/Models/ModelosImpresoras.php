<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelosImpresoras extends Model
{
    use HasFactory;
    protected $table = "modelosimpresoras";

    protected $fillable = [
        'marca',
        'modelo',
        'activo'
        
    ];

}

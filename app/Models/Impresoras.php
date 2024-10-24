<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impresoras extends Model
{
    use HasFactory;
    protected $table = "impresoras";

    protected $fillable = [
        'descripcion',
        'id_modelo',
        'orden',
        'ubicacion',       
    ];

    public function modelos()
    {
        return $this->belongsTo(Modelos::class, 'id_modelo', 'id');
    }
  

}

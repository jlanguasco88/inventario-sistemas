<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impresoras extends Model
{
    use HasFactory;
    protected $table = "impresoras";

    protected $fillable = [
        'id_modelo',
        'modelotonerid',
        'orden',
        'ubicacion',       
    ];

    public function modeloimpresora()
    {
        return $this->belongsTo(ModelosImpresoras::class, 'id_modelo', 'id');
    }
    public function modelotoner()
    {
        return $this->belongsTo(ModelosToners::class, 'id_modelo', 'id');
    }
  

}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toners extends Model
{
    use HasFactory;
    protected $table = "toners";

    protected $fillable = [
        'id',
        'id_modelo',
        'stock',
        'fecha_compra',
        'observaciones',
        
    ];
    
    public $timestamps = false;

    public function modelos()
    {
        return $this->belongsTo(ModelosToners::class, 'id_modelo', 'id');
    }
}

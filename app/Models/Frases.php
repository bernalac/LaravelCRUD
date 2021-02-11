<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frases extends Model
{
    use HasFactory;
    public $table = "frases";
    
    protected $fillable = [
        'descripcion', 'categoria', 'autor_id'
    ];
    public function autor() {
        return $this->belongsTo(Autor::class);
    }
}
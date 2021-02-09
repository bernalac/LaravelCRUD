<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    public $table = "autor";
    protected $fillable = [
        'name', 'fecha_nac'
    ];
    public function frases() {
        return $this->hasMany(Frases::class);
    }
}

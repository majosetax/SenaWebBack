<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    
    protected $table = 'pruebas';
    protected $guarded=('created_at');
    protected $fillable = [
    'descripcion',
    'fecha'
    ];

}
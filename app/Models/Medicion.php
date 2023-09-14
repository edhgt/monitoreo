<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicion extends Model
{
    use HasFactory;

    protected $table = 'mediciones';
    protected $fillable = ['valor', 'dispositivo_id', 'tipo_medicion_id'];
}

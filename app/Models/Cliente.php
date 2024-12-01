<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Aquí puedes definir los atributos que puedes llenar masivamente si es necesario
    protected $fillable = ['nombre', 'email', 'telefono'];
}

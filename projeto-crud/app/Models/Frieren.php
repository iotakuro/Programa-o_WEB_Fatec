<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frieren extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'idade', 'genero', 'raca', 'classe', 'objetivo'];
}

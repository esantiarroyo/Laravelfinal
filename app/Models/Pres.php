<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pres extends Model
{
    use HasFactory;

    protected $fillable = [

    'namePres',
    'nameIns',
    'cantidad',
    'fEntrada',
    ];
}

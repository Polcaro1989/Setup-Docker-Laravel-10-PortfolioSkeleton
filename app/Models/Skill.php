<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    // Definir quais campos podem ser atribuídos em massa
    protected $fillable = ['skills'];
}

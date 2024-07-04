<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class erreur extends Model
{
    protected $fillable =['nom','probleme','lang','image'];
    use HasFactory;
}

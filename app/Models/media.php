<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{

    protected $fillable = ['path', 'name', 'erreur_id', 'created_at', 'updated_at'];


    public function erreur()
    {
        return $this->belongsTo(erreur::class);

    }
    use HasFactory;
}

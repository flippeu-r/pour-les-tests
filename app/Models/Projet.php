<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [
        'nom',
        'client',
        'date_fin',
        'budget',
        'statut',
        'description',
    ];
}
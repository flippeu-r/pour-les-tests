<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Heure extends Model
{
    protected $fillable = [
        'nb_heures',
        'date_saisie',
        'commentaire',
        'ticket_id',
        'user_id',
    ];
}
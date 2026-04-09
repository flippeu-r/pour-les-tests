<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Ticket extends Model
{
    protected $fillable = [
        'sujet',
        'description',
        'type',
        'priorite',
        'estimation',
        'statut',
        'projet_id',
        'user_id',
    ];

    public function projet() {
        return $this->belongsTo(Projet::class);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function store(Request $request) {
    $donneesValidees = $request->validate([
        'title'       => 'required|max:255',
        'description' => 'required',
        'project'     => 'required',
        'type'        => 'required|in:inclus,facturable',
    ]);

    
    Ticket::create([
        'sujet' => $donneesValidees['title'],
        'description' => $donneesValidees['description'],
        'projet_id' => $donneesValidees['project'],
        'type' => $donneesValidees['type'],

        'priorite' => 'Moyenne',
        'user_id' => Auth::id(),
    ]);
    return redirect('/tickets');
    
}
}



<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\ProjetController;

use App\Http\Controllers\TicketController;


// Les routes POST (quand on valide un formulaire)
Route::post('/inscription', [AuthController::class, 'inscription']);
Route::post('/login', [AuthController::class, 'login']);


// La route pour se déconnecter
Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/projets/creer', [ProjetController::class, 'store']);

// Route::get('/', function () {
//     return view('dash_colab');
// });



//route Post pour créer un ticket
Route::post('/tickets/creer', [TicketController::class, 'store']);


// --- 1. ACCUEIL ET AUTHENTIFICATION ---
Route::get('/', function () {
    return view('accueil');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('/mot-de-passe-oublie', function () {
    return view('mdp_perdu'); 
});


// --- 2. ESPACE COLLABORATEUR (Général) ---
Route::get('/dashboard', function () {
    return view('dash_colab');
});

Route::get('/profil', function () {
    return view('profile'); 
});

Route::get('/parametres', function () {
    return view('settings'); 
});


// --- 3. GESTION DES PROJETS ---
Route::get('/projets', function () {
    return view('proj_colab');
});

Route::get('/projets/creer', function () {
    return view('creer_projet'); 
});

Route::get('/projets/{id}', function ($id) {
    return view('detail_projet'); 
});


// --- 4. GESTION DES TICKETS ---
Route::get('/tickets', function () {
    return view('ticket_colab');
});

Route::get('tickets/creer', [TicketController::class,'create']);

Route::get('/tickets/{id}', function ($id) {
    // Le {id} permet d'attraper le numéro du ticket dans l'URL !
    return view('ticket_detail');
});


// --- 5. GESTION DES HEURES ---
Route::get('/heures', function () {
    return view('heures'); 
});
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Permet de parler à la table users
use Illuminate\Support\Facades\Hash; // Pour crypter les mots de passe
use Illuminate\Support\Facades\Auth; // Pour gérer la session connectée

class AuthController extends Controller
{
    // --- 1. GÉRER L'INSCRIPTION ---
    public function inscription(Request $request)
    {
        // 1. On génère un "nom" par défaut à partir de l'email tapé (ex: pierre@mail.com -> Pierre)
        // (Car la table 'users' de Laravel exige un nom par défaut)
        $nom = ucfirst(explode('@', $request->email)[0]);

        // 2. On crée le nouvel utilisateur dans la base de données
        $user = User::create([
            'name' => $nom,
            'email' => $request->email,
            'password' => Hash::make($request->password), // 🔒 Très important : on crypte !
        ]);

        // 3. On le connecte automatiquement après son inscription
        Auth::login($user);

        // 4. On l'envoie vers son tableau de bord
        return redirect('/login');
    }

    // --- 2. GÉRER LA CONNEXION ---
    public function login(Request $request)
    {
        // On prépare les clés pour tester la serrure
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Auth::attempt va chercher l'email en base et vérifier si le mot de passe correspond
        if (Auth::attempt($credentials)) {
            // C'est le bon ! On sécurise la session et on l'envoie sur le dashboard
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        // C'est le mauvais mot de passe : on renvoie la page avec la variable $erreur
        return view('login', [
            'erreur' => 'Identifiants incorrects. Veuillez réessayer.'
        ]);
    }

    // --- 3. GÉRER LA DÉCONNEXION ---
    public function logout(Request $request)
    {
        Auth::logout(); // On détruit la session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}
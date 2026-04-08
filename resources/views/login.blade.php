<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Prisma</title>
    
    <link rel="stylesheet" href="{{ asset('css/style_log.css') }}">
</head>
<body>

<div class="container">
<form id="login_form" method="POST" action="/login">
        
        @csrf

        <h1>
            <p>Bienvenue</p>
        </h1>

        <input type="email" placeholder="Email" id="email" name="email">
        <div id="email_error" class="error-text titanic">L'adresse email est obligatoire.</div><br>

        <input type="password" placeholder="Mot de passe" id="password" name="password">
        <div id="password_error" class="error-text titanic">Le mot de passe est obligatoire.</div><br>
        <div id="password_len_error" class="error-text titanic">Le mot de passe doit contenir au moins 8 caractères.</div>

        <input type="submit" value="Connexion"><br>
        
        @if(isset($erreur))
            <p class="error-msg">{{ $erreur }}</p>
        @endif
        
        <a href="/mot-de-passe-oublie">Mot de passe oublié</a><br>
        <a href="/inscription">Créer un compte</a>

    </form>

    <script>
        console.log("coucou tout le monde !");
        let a = 3;
        let b = 4;
        console.log(a+b);
    </script>
    
    <script src="{{ asset('JS/script.js') }}"></script>
</div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Prisma</title>
    <link rel="stylesheet" href="{{ asset('css/styles_inscription.css') }}">
</head>
<body>

<div class="container">

    <form id="inscription_form" method="POST" action="/inscription">
        @csrf

        <h1>
            <p>Créer votre compte</p>
        </h1>

        <input type="email" placeholder="Email" id="email" name="email">
        <div id="email_error2" class="error-text titanic">L'adresse email est obligatoire.</div><br>

        <input type="password" placeholder="Mot de passe " id="password" name="password">
        <div id="password_error2" class="error-text titanic">Le mot de passe est obligatoire.</div><br>

        <input type="password" placeholder="Confirmer le Mot de passe " id="confirm_password" name="confirm_password">
        <div id="password2_error2" class="error-text titanic">Les mots de passe doivent correspondre</div><br>

        <input type="submit" value="Creer compte"><br>
        <div id="password_len_error2" class="error-text titanic">Le mot de passe doit contenir au moins 8 caractères.</div>
        
        <div class="Reconnexion">
            
            @if(isset($erreur))
                <p class="error-msg">{{ $erreur }}</p>
            @endif
            
            <p>Vous avez déjà un compte ? </p>
            <a href="/login"> Connexion</a>

        </div>
    </form>

    <script>
        console.log("coucou tout le monde !");
    </script>
    
    <script src="{{ asset('JS/script.js') }}"></script>
    
</div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié - Prisma</title>
    
    <link rel="stylesheet" href="{{ asset('css/style_log.css') }}">
</head>
<body>

<div class="container">
<form id="mdp_perdu" method="POST" action="/mot-de-passe-oublie">
        @csrf

        <h1>
            <p>Renseignez votre mail</p>
        </h1>

        <input type="email" placeholder="Email" id="mail_perdu" name="email"><br>
        <div id="email_error2" class="error-text titanic">L'adresse email est obligatoire.</div><br>
        
        <input type="submit" value="Réinitialiser mot de passe"><br>
        
        <a href="/inscription">Créer un compte</a>

    </form>

    <script>
        console.log("coucou tout le monde !");
    </script>
    
    <script src="{{ asset('JS/script.js') }}"></script>
</div>
    
</body>
</html>
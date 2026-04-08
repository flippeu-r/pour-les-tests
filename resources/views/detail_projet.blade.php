<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet : Refonte Site Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles_tick_colab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_tick_det.css') }}">
</head>
<body>

    <div class="dashboard-container">

        <nav class="sidebar">
            <div class="logo">
                <h2>Prisma <span style="font-weight: 300; font-size: 0.8em;">Tickets</span></h2>
            </div>
            <ul>
                <li><a href="/dashboard"><i class="fas fa-home"></i> Accueil </a></li>
                <li class="active"><a href="/projets"><i class="fas fa-project-diagram"></i> Projets </a></li>
                <li><a href="/tickets"><i class="fas fa-ticket-alt"></i> Tickets </a></li>
                <li><a href="/heures"><i class="fas fa-clock"></i> Mes Heures </a></li>
            </ul>
            <div class="Deconnexion">
                <a href="/login"><i class="fas fa-sign-out-alt"></i> Deconnexion </a>
            </div>
        </nav>

        <main class="main-content">
            
            <div class="ticket-header-wrapper">
                <div class="header-left">
                    <a href="/projets" class="btn-back"><i class="fas fa-arrow-left"></i> Liste des projets</a>
                    <h1 class="ticket-title">Refonte Site Web <span class="client-badge badge-align-middle">MCDONALDS</span></h1>
                </div>
                
                <a href="/projets/modifier/1" class="btn-create btn-create-outline">
                    <i class="fas fa-pen"></i> Modifier le projet
                </a>
            </div>

            <div class="ticket-grid">
                
                <div class="ticket-conversation">
                    <h3 class="section-subtitle">Tickets associés</h3>
                    
                    <table class="associated-tickets-table">
                        <thead>
                            <tr>
                                <th class="th-left">ID</th>
                                <th class="th-left">Sujet</th>
                                <th class="th-center">Statut</th>
                                <th class="th-center">Priorité</th>
                                <th class="th-center">Action</th>
                            </tr>
                        </thead>
                       <tbody>
                        
                        @if(isset($projets))
                            @foreach ($projets as $projet)
                            <tr>
                                <td><strong>#{{ $projet->id }}</strong></td>
                                <td>{{ $projet->nom }}</td>
                                <td><span class="client-badge">{{ $projet->client }}</span></td>
                                <td>{{ $projet->date_creation }}</td>
                                <td>{{ $projet->budget }} €</td>
                                <td class="th-center"><a href="/tickets/{{ $projet->id }}" class="btn-action"><i class="fas fa-eye"></i></a></td>
                            </tr>
                            @endforeach
                        @else
                            <tr><td colspan="6" class="th-center">Aucun ticket associé pour le moment.</td></tr>
                        @endif

                    </tbody>
                    </table>
                    
                    <a href="/tickets/creer" class="btn-add-time btn-add-ticket-link">
                        <i class="fas fa-plus"></i> Créer un nouveau ticket
                    </a>
                </div>

                <div class="ticket-sidebar">
                    
                    <div class="info-card">
                        <h3>Avancement Global</h3>
                        <div class="info-row">
                            <label>Progression</label>
                            <strong>75%</strong>
                        </div>
                        <div class="time-bar-bg">
                            <div class="time-bar-fill" style="width: 75%; background: #2ecc71;"></div>
                        </div>
                        <div class="info-row mt-15">
                            <label>Budget Heures</label>
                            <span>150h / 200h</span>
                        </div>
                    </div>

                    <div class="info-card">
                        <h3>Contexte</h3>
                        <p class="context-text">
                            "Refonte complète du site institutionnel avec intégration du module de commande en ligne et adaptation mobile (Responsive)."
                        </p>
                    </div>

                    <div class="info-card">
                        <h3>Équipe</h3>
                        <div class="collab-stack">
                            <span class="collab-name"><i class="fas fa-user-circle"></i> Alan Grant</span>
                            <span class="collab-name"><i class="fas fa-user-circle"></i> Olivier</span>
                            <span class="collab-name"><i class="fas fa-user-circle"></i> Ada</span>
                        </div>
                    </div>

                </div>

            </div>

        </main>

    </div>
    <script src="{{ asset('JS/script.js') }}"></script>
</body>
</html>
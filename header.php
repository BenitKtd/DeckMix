<?php
// Gestion de la déconnexion via l'URL
if (isset($_GET['logout'])) {
    setcookie('deckmix_auth', '', time() - 3600, '/', '', false, true);
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}
$estConnecte = isset($_COOKIE['deckmix_auth']) && $_COOKIE['deckmix_auth'] == '1';
$pageActuelle = isset($_GET['page']) ? $_GET['page'] : 'accueil';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>DeckMix</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --deck-orange: #FF9D00;
            --deck-bg-main: #06090E;
            --deck-bg-sidebar: #0A0E18;
            --deck-card-bg: #121824;
            --deck-border: #1F293D;
            --deck-text-gray: #CBD5E0;
        }

        body {
            background-color: var(--deck-bg-main) !important;
            color: #ffffff !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            margin: 0;
            display: flex;
        }

        #sidebar {
            width: 240px;
            background-color: var(--deck-bg-sidebar);
            border-right: 1px solid var(--deck-border);
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            padding: 24px 20px;
            display: flex;
            flex-direction: column;
            z-index: 100;
            box-sizing: border-box;
        }

        #sidebar h3 {
            color: var(--deck-orange);
            font-weight: 800;
            font-size: 22px;
            margin-bottom: 25px;
        }

        #sidebar .nav-link {
            color: var(--deck-text-gray);
            padding: 10px 0;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #sidebar .nav-link:hover, #sidebar .nav-link.active {
            color: #ffffff;
        }

        .sidebar-footer {
            margin-top: auto;
            padding-bottom: 90px;
        }

        #main-content {
            margin-left: 240px;
            flex: 1;
            padding: 30px 40px;
            padding-bottom: 160px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .search-bar {
            background-color: var(--deck-card-bg);
            border: 1px solid var(--deck-border);
            border-radius: 30px;
            padding: 10px 20px;
            color: #fff;
            width: 400px;
            font-size: 14px;
            outline: none;
        }
        .search-bar::placeholder {
            color: var(--deck-text-gray);
        }

        .user-pill {
            background-color: var(--deck-card-bg);
            border: 1px solid var(--deck-border);
            border-radius: 30px;
            padding: 6px 16px 6px 6px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .user-avatar {
            width: 28px;
            height: 28px;
            background-color: var(--deck-orange);
            color: var(--deck-bg-main);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 12px;
        }

        .btn-deckmix {
            background-color: var(--deck-orange);
            color: var(--deck-bg-main);
            font-weight: 700;
            border-radius: 20px;
            border: none;
            padding: 8px 20px;
        }
        .btn-deckmix:hover {
            background-color: #e08b00;
            color: var(--deck-bg-main);
        }

        .playlist-card {
            background-color: var(--deck-card-bg);
            border: 1px solid var(--deck-border);
            border-radius: 16px;
            padding: 16px;
        }

        .badge-tag {
            background-color: var(--deck-border);
            color: var(--deck-text-gray);
            font-size: 11px;
            font-weight: 500;
            border-radius: 6px;
            padding: 4px 10px;
            cursor: pointer;
            user-select: none;
        }

        .forum-title {
            color: #ffffff !important;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .bottom-player {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: var(--deck-bg-sidebar);
            border-top: 1px solid var(--deck-border);
            padding: 12px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
        }
    </style>
</head>
<body>

    <div id="sidebar">
        <h3>DECKMIX</h3>
        <nav class="nav flex-column">
            <a class="nav-link <?php echo ($pageActuelle=='accueil') ? 'active':''; ?>" href="?page=accueil">Accueil</a>
            <a class="nav-link <?php echo ($pageActuelle=='parcourir') ? 'active':''; ?>" href="?page=parcourir">Parcourir</a>
            <a class="nav-link <?php echo ($pageActuelle=='forum') ? 'active':''; ?>" href="?page=forum">Forum <?php if(!$estConnecte): ?>🔒<?php endif; ?></a>
            <a class="nav-link <?php echo ($pageActuelle=='lecteur') ? 'active':''; ?>" href="?page=lecteur">Lecteur</a>
            <a class="nav-link <?php echo ($pageActuelle=='profil') ? 'active':''; ?>" href="?page=profil">Mon profil <?php if(!$estConnecte): ?>🔒<?php endif; ?></a>
        </nav>
        
        <div class="sidebar-footer">
            <a href="?page=partager" class="btn btn-deckmix w-100 py-2 text-center text-dark text-decoration-none d-block shadow-sm">Partager une playlist</a>
        </div>
    </div>

    <div id="main-content">
        <div class="topbar">
            <input type="text" class="search-bar" placeholder="Rechercher une playlist, un artiste...">
            
            <div class="d-flex align-items-center gap-3">
                <?php if ($estConnecte): ?>
                    <div class="user-pill" onclick="window.location.href='?page=profil'">
                        <div class="user-avatar">J</div>
                        <span>@JohnDoe</span>
                    </div>
                    <a href="?logout=1" class="btn btn-outline-danger btn-sm rounded-pill px-3">Déconnexion</a>
                <?php else: ?>
                    <button class="btn btn-outline-light btn-sm rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</button>
                    <button class="btn btn-deckmix btn-sm rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#registerModal">Inscription</button>
                <?php endif; ?>
            </div>
        </div>
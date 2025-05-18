<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/user/dashboard.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="header-content">
      <a class="home-link" href="{{ route('home') }}">
        <i class="fas fa-chevron-left"></i>
        <span>Retour à la page d'accueil</span>
      </a>
      <div class="user-info">
        <span class="username">John Doe</span>
        <img src="" alt="Profile" class="user-avatar">
        <button class="logout-btn">
          <span class="logout-icon">
            <i class="fas fa-sign-out-alt"></i>
          </span>
          <span class="logout-text">Déconnexion</span>
        </button>
      </div>
    </div>
  </header>

  <div class="container">
    <nav class="nav">
      <ul class="nav-menu">
        <li>
          <a href="#" class="active">
            <i class="fas fa-home"></i>
            <span>Page d'accueil</span>
            <span class="active-indicator"></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-cog"></i>
            <span>Paramètres</span>
            <span class="active-indicator"></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-user"></i>
            <span>Paramètres du profil</span>
            <span class="active-indicator"></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-envelope"></i>
            <span>Messages</span>
            <span class="active-indicator"></span>
          </a>
        </li>
      </ul>
      <div class="nav-footer">
        <span class="current-time" id="currentTime"></span>
      </div>
    </nav>

    <main class="main-content">
      hi hamza
    </main>
  </div>
</body>

</html>

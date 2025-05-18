<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - MediConnect</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body class="auth-page">
  <a href="{{ route('home') }}">
    <img
      src="https://firebasestorage.googleapis.com/v0/b/rectweb.appspot.com/o/MEDIA%2F5973800.webp?alt=media&token=df370018-f731-4127-8b27-53762810b0ee"
      width="50px" alt="MediConnect" class="auth-bg-home">
  </a>
  <div class="auth-container">
    <div class="auth-box">
      <div class="logo">
        <i class="fas fa-heartbeat"></i>
        <h1>MediConnect</h1>
      </div>
      <h2>Welcome Back</h2>
      <p class="auth-subtitle">Please login to your account</p>
      <form method="POST" action="{{ route('login') }}" class="auth-form">
        @csrf
        <div class="form-group">
          <div class="input-group glass-effect">
            <i class="fas fa-user"></i>
            <input value="hamza@gmail.com" type="text" id="email" name="email" value="{{ old('email') }}"
              placeholder="Email or Username" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group glass-effect">
            <i class="fas fa-lock"></i>
            <input value="hamza1480" type="password" id="password" name="password" placeholder="Password" required>
          </div>
        </div>
        <div class="form-options">
          <label class="remember-me">
            <input type="checkbox">
            <span>Remember me</span>
          </label>
          <a href="#" class="forgot-password">Forgot Password?</a>
        </div>
        <button type="submit" class="auth-button">
          <span>Log In</span>
          <i class="fas fa-arrow-right"></i>
        </button>
      </form>
      <div class="auth-links">
        <p>New to MediConnect? <a href="{{ route('register') }}" class="signup-link">Create Account</a></p>
      </div>
    </div>
  </div>
  @if (session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Utilisateur créé',
        showConfirmButton: false,
        timer: 1500
      });
    </script>
  @endif
</body>

</html>

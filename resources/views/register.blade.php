<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - MediConnect</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body class="auth-page signup-page">
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
      <h2>Create Account</h2>
      <p class="auth-subtitle">Join our healthcare community</p>
      <form class="auth-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
          <div class="input-group glass-effect">
            <i class="fas fa-user"></i>
            <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
          </div>
        </div>
        @error('fullname') <div style="color: red; font-size: 12px; margin-bottom: 10px;">{{ $message }}</div> @enderror
        <div class="form-group">
          <div class="input-group glass-effect">
            <i class="fas fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="Email Address" required>
          </div>
        </div>
        @error('email') <div style="color: red; font-size: 12px; margin-bottom: 10px;">{{ $message }}</div> @enderror
        <div class="form-group">
          <div class="input-group glass-effect">
            <i class="fas fa-user-md"></i>
            <select name="role" id="role" required>
              <option value="doctor">Médecin</option>
              <option value="user">Utilisateur</option>
            </select>
          </div>
        </div>
        @error('role') <div style="color: red; font-size: 12px; margin-bottom: 10px;">{{ $message }}</div> @enderror
        <div class="form-group">
          <div class="input-group glass-effect">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Create Password" required>
          </div>
        </div>
        @error('password') <div style="color: red; font-size: 12px; margin-bottom: 10px;">{{ $message }}</div> @enderror
        <div class="form-group">
          <div class="input-group glass-effect">
            <i class="fas fa-shield-alt"></i>
            <input type="password" id="confirm-password" placeholder="Confirm Password" name="cpassword"
              required>
          </div> 
        </div>
        @error('confirm-password') <div style="color: red; font-size: 12px; margin-bottom: 10px;">{{ $message }}</div> @enderror
        <div class="form-options">
          <label class="terms-check">
            <input type="checkbox" required>
            <span>I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a></span>
          </label>
        </div>
        <button type="submit" class="auth-button">
          <span>Create Account</span>
          <i class="fas fa-arrow-right"></i>
        </button>
      </form>
      <div class="auth-links">
        <p>Already have an account? <a href="{{ route('login') }}" class="login-link">Log In</a></p>
      </div>
    </div>
  </div>
  <script>
    // full input to test the form
    document.getElementById('fullname').value = 'Hamza Bahjaoui';
    document.getElementById('email').value = 'hamza@gmail.com';
    document.getElementById('role').value = 'user';
    document.getElementById('password').value = 'hamza1480';
    document.getElementById('confirm-password').value = 'hamza1480';
    document.querySelector('.terms-check input').checked = true;
  </script>
</body>

</html>

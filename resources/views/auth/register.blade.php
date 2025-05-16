@extends('system.app')

@section('title', 'Registrazione - Bacheca')

@section('body-class', 'layout-sticky-footer')
@section('container-class', 'container-centered-content')

@section('header-title', 'La Mia Bacheca')

@section('navigation')

  {{-- Navigazione rimossa per la pagina di registrazione --}}
@endsection

@section('content')
  <div class="register-box">
    <h2>Crea un Account</h2>
    <form method="POST" action="{{ route('register') }}" class="register-form" id="register-id">
      {{-- In un'applicazione Laravel reale, qui useresti la direttiva @csrf --}}
      <div>
        <label for="username">Nome Utente:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div>
        <label for="confirm-password">Conferma Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
      </div>
      <button type="submit" id="register-button">Registrati</button>
    </form>
    <div class="login-link">
      Hai già un account? <a href="{{ url('/login') }}">Accedi</a> {{-- Usa helper url() o route() --}}
    </div>
  </div>
@endsection

@section('footer-class', 'footer-alt-bg')

@section('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.getElementById('register-form');
    const usernameInput = document.getElementById('username');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');

    if (registerForm) {
      registerForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const username = usernameInput.value.trim();
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();
        const confirmPassword = confirmPasswordInput.value.trim();

        if (username === "" || email === "" || password === "" || confirmPassword === "") {
          alert("Per favore, compila tutti i campi.");
          return;
        }

        if (password !== confirmPassword) {
          alert("Le password non coincidono.");
          return;
        }
        // tramite una richiesta AJAX o impostando l'action del form
        console.log('Tentativo di registrazione con:', username, email);
        alert('Registrazione simulata con successo! Sarai reindirizzato alla pagina di login.');

        window.location.href = '{{ url("/login") }}'; // Usa helper url() o route()
      });
    }
  });
</script>
@endsection

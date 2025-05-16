@extends('system.app')

@section('title', 'Login - Bacheca')

@section('body-class', 'layout-sticky-footer') {{-- Aggiunge la classe specifica al body --}}
@section('container-class', 'container-centered-content') {{-- Aggiunge la classe specifica al container --}}

@section('header-title', 'La Mia Bacheca') {{-- Titolo nell'header --}}

@section('navigation')
    {{-- Navigazione rimossa per la pagina di login --}}
@endsection

@section('content')
    <div class="login-box">
        <h2>Accedi</h2>


        <form method="POST" class="login-form" id="login-form" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="username">Nome Utente o Email:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" id="login-button">Accedi</button>
        </form>


        <div class="register-link">
            Non hai un account? <a href="{{ url('/register') }}">Crea account</a> {{-- Usa helper url() o route() --}}
        </div>
    </div>
@endsection

@section('footer-class', 'footer-alt-bg') {{-- Aggiunge la classe specifica al footer --}}

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const loginForm = document.getElementById('login-form');
            const usernameInput = document.getElementById('username');
            const passwordInput = document.getElementById('password');

            if (loginForm) {
                loginForm.addEventListener('submit', (event) => {
                    event.preventDefault();

                    const username = usernameInput.value.trim();
                    const password = passwordInput.value.trim();

                    if (username === "" || password === "") {
                        alert("Per favore, inserisci nome utente/email e password.");
                        return;
                    }

                    // In un'applicazione reale Laravel, qui invieresti i dati al server
                    // tramite una richiesta AJAX o impostando l'action del form
                    console.log('Tentativo di login con:', username);

                    // Simulazione di reindirizzamento dopo login (in Laravel reale, gestito dal backend)
                    window.location.href = '{{ url('/welcome') }}'; // Usa helper url() o route()
                });
            }
        });
    </script>
@endsection

@extends('system.app')
@section('content')
<div class="login-box">
    <h2>Accedi</h2>

    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <!-- Campo Email -->
        <div>
            <label for="email">Indirizzo Email</label>
            <input type="text" id="email" name="email" placeholder="Inserisci la tua email" required>
        </div>

        <!-- Campo Password -->
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Inserisci la tua password" required>
        </div>

        <!-- Pulsante Accedi -->
        <div>
            <button type="submit">Accedi</button>
        </div>
    </form>

    <!-- Link alla registrazione -->
    <div class="register-link">
        <p>Non hai un account? <a href="{{ route('register') }}">Registrati</a></p>
    </div>
</div>
@endsection
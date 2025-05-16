{{-- @extends('system.app') --}}
    <div class="login-container">
        <h1>Accedi</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Campo l'Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Indirizzo Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="Inserisci la tua email" required>
            </div>

            <!-- Campo la Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Inserisci la tua password" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Accedi</button>
            </div>
        </form>

        <div class="text-center">
            <p>Non hai un account? <a href="{{ route('register') }}">Registrati</a></p>
        </div>
    </div>

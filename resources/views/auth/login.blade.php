@extends('system.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="login-box">
                    <h2>Accedi</h2>

                    <!-- Visualizzazione Errori Generali e di Validazione -->
                    @if ($errors->any())
                        <div style="color: red; margin-bottom: 15px; border: 1px solid red; padding: 10px; border-radius: 5px; background-color: #ffebee;">
                            <strong style="display: block; margin-bottom: 5px;">Attenzione! Si sono verificati i seguenti errori:</strong>
                            <ul style="margin: 0; padding-left: 20px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

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
                            <input type="password" id="password" name="password" placeholder="Inserisci la tua password"
                                required>
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
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <img src="{{Storage::url('logo.png')}}" alt="">
            </div>
        </div>
    </div>
@endsection

@extends('system.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="register-box">
                    <h2>Registrati</h2>

                    <form method="POST" action="{{ route('register') }}" class="register-form">
                        @csrf

                        <!-- Campo Username -->
                        <div>
                            <label for="nameRegister">Username</label>
                            <input type="text" id="nameRegister" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="form-error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Campo Email -->
                        <div>
                            <label for="emailRegister">Email</label>
                            <input type="email" id="emailRegister" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="form-error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Campo Password -->
                        <div>
                            <label for="passwordRegister">Password</label>
                            <input type="password" id="passwordRegister" name="password" required>
                            @error('password')
                                <span class="form-error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Campo Conferma Password -->
                        <div>
                            <label for="passwordRegisterConfirmation">Conferma Password</label>
                            <input type="password" id="passwordRegisterConfirmation" name="password_confirmation" required>
                            @error('password_confirmation')
                                <span class="form-error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Pulsante Registra -->
                        <div>
                            <button type="submit" class="register-form button">Registrati</button>
                        </div>
                    </form>

                    <!-- Link al login -->
                    <div class="login-link">
                        <p>Sei già registrato? <a href="{{ route('login') }}">Login</a></p>
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <img src="{{ Storage::url('logo.png') }}" alt="">
            </div>
        </div>
    </div>
    </container>
@endsection

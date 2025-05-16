<div class="register-box">
    <h2>{{ __('ui.registrati') }}</h2>

    <form method="POST" action="{{ route('register') }}" class="register-form">
        @csrf

        <!-- Campo Username -->
        <div>
            <label for="nameRegister">Username</label>
            <input type="text" id="nameRegister" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div style="color: red; font-size: 0.875rem; margin-top: 0.3rem;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Campo Email -->
        <div>
            <label for="emailRegister">Email</label>
            <input type="email" id="emailRegister" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div style="color: red; font-size: 0.875rem; margin-top: 0.3rem;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Campo Password -->
        <div>
            <label for="passwordRegister">Password</label>
            <input type="password" id="passwordRegister" name="password" required>
            @error('password')
                <div style="color: red; font-size: 0.875rem; margin-top: 0.3rem;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Campo Conferma Password -->
        <div>
            <label for="passwordRegisterConfirmation">Conferma Password</label>
            <input type="password" id="passwordRegisterConfirmation" name="password_confirmation" required>
            @error('password_confirmation')
                <div style="color: red; font-size: 0.875rem; margin-top: 0.3rem;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Pulsante Registra -->
        <div>
            <button type="submit">{{ __('ui.registrati') }}</button>
        </div>
    </form>

    <!-- Link al login -->
    <div class="login-link">
        <p>{{ __('ui.seiGiàRegistrato') }}? <a href="{{ route('login') }}">{{ __('ui.login') }}</a></p>
    </div>
</div>

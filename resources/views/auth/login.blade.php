<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="container mt-5 p-4 border rounded shadow-sm bg-light">
        @csrf

        <h2 class="mb-4 text-center">{{ __('Login') }}</h2>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="form-control">
            <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control">
            <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
        </div>

        <!-- Remember Me -->
        <div class="form-check mb-3">
            <input id="remember_me" type="checkbox" name="remember" class="form-check-input">
            <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            @if (Route::has('password.request'))
                <div>
                    <a href="{{ route('register') }}" class="text-decoration-none">{{ __('Register') }}</a>
                    |
                    <a href="{{ route('password.request') }}" class="text-decoration-none">{{ __('Forgot your password?') }}</a>
                </div>
            @endif

            <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
        </div>
    </form>
</x-guest-layout>

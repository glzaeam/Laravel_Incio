<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="container mt-5 p-4 border rounded shadow-sm bg-light">
        @csrf

        <h2 class="mb-4 text-center">{{ __('Register') }}</h2>

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="form-control">
            <x-input-error :messages="$errors->get('name')" class="text-danger mt-1" />
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="form-control">
            <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control">
            <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control">
            <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-1" />
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('login') }}" class="text-decoration-none">{{ __('Already registered?') }}</a>
            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
        </div>
    </form>
</x-guest-layout>

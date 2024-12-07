<x-guest-layout>
    <style>
        .btn-login {
            background: #ff4500 !important;
            color: #fff !important;
        }

        .btn-login:hover {
            background: #e63900 !important;
        }
    </style>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address or NIM -->
        <div>
            <div id="loginWarning" class="text-red-500 mt-2 hidden"></div>
            <x-input-error :messages="$errors->get('id_user')" class="mt-2" />
            <x-input-label for="id_user" :value="__('NIM atau Email UPNVJ')" />
            <x-text-input id="id_user" class="block mt-1 w-full" type="text" name="id_user" :value="old('is_user')" required autofocus autocomplete="id_user" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 btn-login">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        document.querySelector('form').addEventListener('submit', async (e) => {
        e.preventDefault();
        const response = await fetch('/login', {
            method: 'POST',
            body: new FormData(e.target),
            headers: {
                'Accept': 'application/json'
            }
        });
        
        const data = await response.json();
        const loginWarning = document.getElementById('loginWarning');
        
        if (data.success) {
            localStorage.setItem('isLoggedIn', 'true');
            localStorage.setItem('name', data.user.name);
            localStorage.setItem('nim', data.user.nim);
            localStorage.setItem('profile_photo', data.user.foto);
            window.location.href = '/dashboard';
        } else {
            // Show warning if login fails
            loginWarning.textContent = 'NIM atau password yang Anda masukkan salah!';
            loginWarning.classList.remove('hidden');
        }
        });
    </script>
</x-guest-layout>
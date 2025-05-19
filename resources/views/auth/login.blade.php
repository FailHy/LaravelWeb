<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input 
                id="email" 
                type="email" 
                name="email" 
                :value="old('email')" 
                class="block mt-1 w-full" 
                required 
                autofocus 
                autocomplete="username" 
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input 
                id="password" 
                type="password" 
                name="password" 
                class="block mt-1 w-full" 
                required 
                autocomplete="current-password" 
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input 
                id="remember_me" 
                type="checkbox" 
                name="remember" 
                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
            >
            <label for="remember_me" class="ml-2 text-sm text-gray-600">
                {{ __('Remember me') }}
            </label>
        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Register Prompt -->
        <div class="mt-4 text-center text-sm text-gray-600">
            {{ __("Don't have an account?") }}
            <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">
                {{ __('Register') }}
            </a>
        </div>
    </form>

</x-guest-layout>

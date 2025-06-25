<x-guest-layout>
    <x-slot name="subTitle">
        <p class="text-sm text-gray-500 text-center">Makanya jangan di lupain</p>
    </x-slot>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Lupa password? Jangan khawatir. Masukkan email kamu dan kami akan mengirimkan tautan untuk mengatur ulang password.') }}
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Kirim Link Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

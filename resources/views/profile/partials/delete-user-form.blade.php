<section class="space-y-6 md:w-1/3">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <header>
            <h2 class="text-xl font-semibold text-red-600">
                {{ __('Hapus Akun Secara Permanen') }}
            </h2>

            <p class="mt-2 text-sm text-gray-600">
                {{ __('Setelah akun dihapus, semua data termasuk transaksi, riwayat, dan informasi pribadi akan dihapus selamanya. Sebelum melanjutkan, pastikan Anda telah:') }}
            </p>
            
            <ul class="mt-2 list-disc list-inside text-sm text-gray-600 space-y-1">
                <li>{{ __('Mengunduh semua data yang diperlukan') }}</li>
                <li>{{ __('Mencatat informasi penting') }}</li>
                <li>{{ __('Memahami konsekuensi penghapusan akun') }}</li>
            </ul>
        </header>

        <div class="mt-6">
            <x-danger-button
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                class="w-full justify-center"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                {{ __('Hapus Akun Saya') }}
            </x-danger-button>
        </div>

        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')

                <div class="text-center">
                    <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100">
                        <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <h2 class="mt-3 text-lg font-medium text-gray-900">
                        {{ __('Konfirmasi Penghapusan Akun') }}
                    </h2>
                </div>

                <p class="mt-4 text-sm text-gray-600 text-center">
                    {{ __('Tindakan ini tidak dapat dibatalkan. Semua data akan dihapus permanen.') }}
                </p>

                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('Masukkan Password Anda') }}" class="block text-sm font-medium text-gray-700" />
                    
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <x-text-input
                            id="password"
                            name="password"
                            type="password"
                            class="block w-full p-2 pr-10"
                            placeholder="{{ __('Password Anda') }}"
                            aria-describedby="password-error"
                        />
                        <button type="button" 
                                class="absolute inset-y-0 right-0 px-3 flex items-center justify-center text-gray-500 hover:text-gray-700"
                                onclick="togglePasswordVisibility('password')"
                                aria-label="Show password">
                            <svg id="password-eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                    
                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>

                <div class="mt-6 flex justify-between space-x-4">
                    <x-secondary-button 
                        x-on:click="$dispatch('close')"
                        class="w-full"
                    >
                        {{ __('Batalkan') }}
                    </x-secondary-button>

                    <x-danger-button class="w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        {{ __('Hapus Akun') }}
                    </x-danger-button>
                </div>
            </form>
        </x-modal>
    </div>
</section>

<script>
    function togglePasswordVisibility(fieldId) {
        const passwordInput = document.getElementById(fieldId);
        const eyeIcon = document.getElementById(`${fieldId}-eye-icon`);
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
            `;
            eyeIcon.parentElement.setAttribute('aria-label', 'Hide password');
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            `;
            eyeIcon.parentElement.setAttribute('aria-label', 'Show password');
        }
    }
</script>

<style>
    /* Password toggle button styling */
    .relative button {
        height: 100%;
        top: 0;
        right: 0;
        background: transparent;
        border: none;
    }
    
    /* Icon transitions */
    #password-eye-icon {
        transition: all 0.2s ease;
    }
    
    /* Focus state */
    #password:focus {
        outline: none;
        ring: 2px;
        ring-color: #f87171;
        ring-opacity: 50%;
    }
    
    /* Button spacing */
    .flex.justify-between button {
        min-width: 120px;
    }
</style>
<div class="mt-4 flex flex-col gap-6">
    <flux:text class="text-center">
        {{ __('Harap verifikasi alamat email Anda dengan mengklik tautan yang baru saja kami kirim melalui email kepada Anda.') }}
    </flux:text>

    @if (session('status') == 'verification-link-sent')
        <flux:text class="text-center font-medium !dark:text-green-400 !text-green-600">
            {{ __('Tautan verifikasi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.') }}
        </flux:text>
    @endif

    <div class="flex flex-col items-center justify-between space-y-3">
{{--        <flux:button wire:click="sendVerification" variant="primary" class="w-full">--}}
{{--            {{ __('Kirim ulang email verifikasi') }}--}}
{{--        </flux:button>--}}

        <button
            type="button"
            class="w-full py-2.5 px-4 rounded-lg text-white font-medium bg-gradient-to-r from-primary-500 to-secondary-500 hover:shadow-lg hover:from-[#0c91ce] hover:to-[#c935dd] transform hover:-translate-y-0.5 transition duration-200 relative min-h-[44px]"
            wire:click="sendVerification"
            wire:loading.attr="disabled"
        >
            <!-- Teks tombol normal -->
            <span wire:loading.remove>
                Kirim ulang email verifikasi
            </span>

            <!-- State loading -->
            <span
                class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center gap-2"
                wire:loading
            >
                <i class="fas fa-circle-notch fa-spin text-white"></i>
                <span class="text-sm">Loading...</span>
            </span>
        </button>

        <flux:link class="text-sm text-secondary-500 hover:text-primary-500 cursor-pointer" wire:click="logout">
            {{ __('Log out') }}
        </flux:link>
    </div>
</div>

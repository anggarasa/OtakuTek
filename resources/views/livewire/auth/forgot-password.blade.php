<div>
    <div class="text-center mb-8 md:mb-10">
        <a href="{{ route('home') }}" class="text-3xl md:text-4xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-[#0ea5e9] to-[#d946ef]">OtakuTek</a>
    </div>

     <div class="flex flex-col gap-6 bg-white rounded-xl shadow-lg p-6 md:p-8 transition-all duration-300 hover:shadow-xl">
    <x-auth-header :title="__('Lupa Kata Sandi')" :description="__('Masukkan email Anda untuk menerima tautan pengaturan ulang kata sandi')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Alamat Email')"
            type="email"
            required
            autofocus
            placeholder="email@example.com"
            viewable
        />

        <button
            type="submit"
            class="w-full py-2.5 px-4 rounded-lg text-white font-medium bg-gradient-to-r from-primary-500 to-secondary-500 hover:shadow-lg hover:from-[#0c91ce] hover:to-[#c935dd] transform hover:-translate-y-0.5 transition duration-200 relative min-h-[44px]"
            wire:loading.attr="disabled"
        >
            <!-- Teks tombol normal -->
            <span wire:loading.remove>
                Kirim link
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
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-400">
        {{ __('Or, return to') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('log in') }}</flux:link>
    </div>
</div>
</div>

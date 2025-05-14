<div class="flex flex-col gap-6">
    <div class="text-center mb-8 md:mb-10 z-20">
        <a href="{{ route('home') }}" class="text-3xl md:text-4xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-[#0ea5e9] to-[#d946ef]">OtakuTek</a>

        <p class="mt-3 text-gray-600">Masukkan detail Anda di bawah ini untuk membuat akun Anda</p>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 transition-all duration-300 hover:shadow-xl">
        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form wire:submit="register">
            <div class="space-y-5">
                <!-- Name -->
                <div>
                    <flux:input type="text" wire:model="name" label="Nama Lengkap" class:input="transition duration-200" placeholder="John Doe" />
                </div>

                <!-- Username -->
                <div>
                    <flux:input type="text" wire:model="username" label="Username" class:input="transition duration-200" placeholder="johndoe322" />
                </div>

                <!-- Email -->
                <div>
                    <flux:input type="email" wire:model="email" label="Email" class:input="transition duration-200" placeholder="email@example.com" />
                </div>

                <!-- Password -->
                <div>
                    <flux:input type="password" wire:model="password" label="Password" class:input="transition duration-200" placeholder="Password" viewable />
                </div>

                <!-- Konfirmasi Password -->
                <div>
                    <flux:input type="password" wire:model="password_confirmation" label="Konfirmasi Password" class:input="transition duration-200" placeholder="Konfirmasi Password" viewable/>
                </div>

                <div class="pt-2 space-y-3">
                    <button
                        type="submit"
                        class="w-full py-2.5 px-4 rounded-lg text-white font-medium bg-gradient-to-r from-primary-500 to-secondary-500 hover:shadow-lg hover:from-[#0c91ce] hover:to-[#c935dd] transform hover:-translate-y-0.5 transition duration-200 relative min-h-[44px]"
                        wire:click="register"
                        wire:loading.attr="disabled"
                        wire:target="register"
                    >
                        <!-- Teks tombol normal -->
                        <span wire:loading.remove wire:target="register">
                            Daftar
                        </span>

                        <!-- State loading -->
                        <span
                            class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center gap-2"
                            wire:loading
                            wire:target="register"
                        >
                            <i class="fas fa-circle-notch fa-spin text-white"></i>
                            <span class="text-sm">Loading...</span>
                        </span>
                    </button>

                    <!-- Tombol Login Google -->
                    <a
                        href="{{ route('google-redirect') }}"
                        class="flex items-center justify-center w-full py-2.5 px-4 rounded-lg font-medium bg-white border border-gray-300 hover:bg-gray-50 transform hover:-translate-y-0.5 transition duration-200 text-gray-700"
                    >
                        <img
                            src="https://developers.google.com/identity/images/g-logo.png"
                            alt="Google Logo"
                            class="w-5 h-5 mr-3"
                        >
                        <span>Masuk dengan Google</span>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <div class="text-center mt-8">
        <p class="text-sm text-gray-600"> Sudah punya akun?
            <a href="{{ route('login') }}" wire:navigate class="font-medium text-[#d946ef] hover:text-[#0ea5e9] transition duration-200"> Masuk </a>
        </p>
    </div>
</div>

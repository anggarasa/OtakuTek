<div>
    <div class="text-center mb-8 md:mb-10 z-20">
        <a href="{{ route('home') }}" class="text-3xl md:text-4xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-[#0ea5e9] to-[#d946ef]">OtakuTek</a>

        <p class="mt-3 text-gray-600">Masukkan email dan kata sandi Anda di bawah ini untuk masuk</p>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 transition-all duration-300 hover:shadow-xl">
        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form wire:submit="login">
            <div class="space-y-5">
                <div>
                    <flux:input type="email" wire:model="email" label="Email" icon="envelope" class:input="transition duration-200" placeholder="your@example.com" required />
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" wire:navigate class="text-xs font-medium text-accent-500 hover:text-primary-500 hover:underline transition duration-200"> Forgot Password? </a>
                        @endif
                    </div>

                    <div>
                        <flux:input type="password" wire:model="password" id="password" icon="lock-closed" class:input="transition duration-200" placeholder="******" viewable required />
                    </div>
                </div>

                <div class="flex items-center">
                    <input id="remember-me" wire:model="remember" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-primary-500 focus:ring-accent-500 cursor-pointer"/>

                    <label for="remember-me" class="ml-2 block text-sm text-gray-700 cursor-pointer"> Remember me </label>
                </div>

                <div class="pt-2">
                    <button
                        type="submit"
                        class="w-full py-2.5 px-4 rounded-lg text-white font-medium bg-gradient-to-r from-primary-500 to-secondary-500 hover:shadow-lg hover:from-[#0c91ce] hover:to-[#c935dd] transform hover:-translate-y-0.5 transition duration-200 relative min-h-[44px]"
                        wire:click="login"
                        wire:loading.attr="disabled"
                        wire:target="login"
                    >
                        <!-- Teks tombol normal -->
                        <span wire:loading.remove wire:target="login">
                            Masuk
                        </span>

                        <!-- State loading -->
                        <span
                            class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center gap-2"
                            wire:loading
                            wire:target="login"
                        >
                            <i class="fas fa-circle-notch fa-spin text-white"></i>
                            <span class="text-sm">Loading...</span>
                        </span>
                    </button>


                    <button type="button" class="mt-3 w-full py-2.5 px-4 rounded-lg font-medium bg-white border border-gray-400 hover:bg-gray-50 transform hover:-translate-y-0.5 transition duration-200">
                        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo" class="w-7 h-7 mr-2 inline">
                        Masuk dengan Google
                    </button>

                </div>
            </div>
        </form>
    </div>

    <div class="text-center mt-8">
        <p class="text-sm text-gray-600"> Belum punya akun?
            <a href="{{ route('register') }}" wire:navigate class="font-medium text-[#d946ef] hover:text-[#0ea5e9] transition duration-200"> Buat Akun </a>
        </p>
    </div>
</div>

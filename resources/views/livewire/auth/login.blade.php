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
            <div class="relative">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"> <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path> <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </span>

                    <flux:input type="email" wire:model="email" id="email" icon="envelope" class:input="transition duration-200" placeholder="your@example.com" />
                </div>
            </div>

            <div class="relative">
                <div class="flex items-center justify-between mb-1"> <label for="password" class="block text-sm font-medium text-gray-700">Password</label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" wire:navigate class="text-xs font-medium text-accent-500 hover:text-primary-500 hover:underline transition duration-200"> Forgot Password? </a>
                @endif
                </div>

                <div class="relative">
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 116 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>

                    <flux:input type="password" wire:model="password" id="password" icon="lock-closed" class:input="transition duration-200" placeholder="******" viewable />
                </div>
            </div>

            <div class="flex items-center">
                <input id="remember-me" wire:model="remember" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-primary-500 focus:ring-accent-500 cursor-pointer"/>

                <label for="remember-me" class="ml-2 block text-sm text-gray-700 cursor-pointer"> Remember me </label>
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full py-2.5 px-4 rounded-lg text-white font-medium bg-gradient-to-r from-primary-500 to-secondary-500 hover:shadow-lg hover:from-[#0c91ce] hover:to-[#c935dd] transform hover:-translate-y-0.5 transition duration-200">
                    Masuk
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

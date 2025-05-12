<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body>
    <div id="webcrumbs">
        <div class="w-full min-h-screen flex flex-col md:flex-row font-sans">
            <div class="w-full md:w-1/2 bg-gradient-to-br from-slate-900 to-slate-800 relative hidden md:block z-0">
                <div class="absolute inset-0 bg-gradient-to-r to-transparent">
                    <img src="{{ asset('imgs/login.png') }}" alt="Futuristic anime tech background" class="w-full h-full object-cover mix-blend-overlay opacity-60" keywords="anime, futuristic, cyberpunk, technology"/>
                </div>

                <div class="absolute bottom-10 left-10 z-20">
                    <h2 class="text-4xl font-bold text-white mb-2">OtakuTek</h2>

                    <p class="text-blue-100 text-lg">Dimensi Digitalmu Dimulai di Sini</p>
                </div>
            </div>

            <div class="w-full md:w-1/2 bg-slate-50 flex items-center justify-center p-6 md:p-12 z-10">
                <div class="max-w-md w-full space-y-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
        @fluxScripts
    </body>
</html>

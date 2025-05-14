<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            if (!$googleUser || !$googleUser->email) {
                return redirect()->route('login')->with('error', 'Gagal mendapatkan data dari Google. Silakan coba lagi.');
            }

            $user = User::where('email', $googleUser->email)->first();

            if (!$user) {
                // Generate username
                $emailParts = explode('@', $googleUser->email);
                $baseUsername = preg_replace('/[^a-zA-Z0-9]/', '', $emailParts[0]);
                $baseUsername = strtolower(substr($baseUsername, 0, 20)); // Batasi panjang username

                $username = $baseUsername;
                $counter = 1;

                while (User::where('username', $username)->exists()) {
                    $username = $baseUsername . $counter;
                    $counter++;

                    if ($counter > 100) { // Batasi percobaan
                        throw new \Exception('Tidak dapat membuat username unik');
                    }
                }

                $user = User::create([
                    'name' => $googleUser->name,
                    'username' => $username,
                    'email' => $googleUser->email,
                    'password' => Hash::make(Str::random(32))
                ]);

                if (!$user) {
                    throw new \Exception('Gagal membuat akun baru');
                }
            }

            Auth::login($user);

            return redirect()->intended(route('dashboard'));

        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('Google Auth Error: ' . $e->getMessage());

            // Pesan error yang ramah pengguna
            $errorMessage = 'Terjadi kesalahan saat proses login. Silakan coba lagi atau hubungi tim support.';

            // Pesan lebih spesifik untuk error tertentu
            if ($e instanceof \Laravel\Socialite\Two\InvalidStateException) {
                $errorMessage = 'Sesi login telah kadaluarsa. Silakan coba lagi.';
            } elseif (strpos($e->getMessage(), 'Invalid token') !== false) {
                $errorMessage = 'Token tidak valid. Silakan login ulang.';
            }

            return redirect()->route('login')->with('error', $errorMessage);
        }
    }
}

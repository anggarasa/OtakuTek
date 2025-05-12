<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public string $name = '';

    public string $username = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:3', 'max:255', 'unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email:dns,rfc,strict', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));
        $user->assignRole('user');

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }

    protected $messages = [
        'username.unique' => 'Username sudah digunakan.',
        'email.unique' => 'Email sudah digunakan.',
        'password.confirmed' => 'Password tidak sama.',
        'password.min' => 'Password minimal 8 karakter.',
        'password.max' => 'Password maksimal 255 karakter.',
        'password.required' => 'Password wajib diisi.',
        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Email tidak valid.',
        'username.required' => 'Username wajib diisi.',
        'username.min' => 'Username minimal 3 karakter.',
        'username.max' => 'Username maksimal 255 karakter.',
        'name.required' => 'Nama wajib diisi.',
        'name.max' => 'Nama maksimal 255 karakter.',
        'name.string' => 'Nama harus berupa string.',
        'email.string' => 'Email harus berupa string.',
        'email.lowercase' => 'Email harus berupa huruf kecil.',
    ];
}

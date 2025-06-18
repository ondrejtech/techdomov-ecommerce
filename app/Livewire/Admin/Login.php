<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Rule('required|email')]
    public string $username = '';

    #[Rule('required')]
    public string $password = '';

    public function loginAuth()
    {
        $this->validate();

        if (Auth::attempt([
            'email' => $this->username,
            'password' => $this->password
        ])) {
            session()->regenerate();
            return redirect()->route('index');
        }

        $this->addError('username', 'Nesprávné přihlašovací údaje.');
    }

    public function render()
    {
        return view('livewire.admin.login')->layout('components.layouts.app');
    }
}

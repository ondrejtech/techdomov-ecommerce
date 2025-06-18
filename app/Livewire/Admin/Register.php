<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Register extends Component
{
    #[Rule('nullable|string|max:20')]
    public string $ico = '';

    #[Rule('nullable|string|max:100')]
    public string $companyName = '';

    #[Rule('nullable|string|max:20')]
    public string $dic = '';

    #[Rule('required|string|max:100')]
    public string $street = '';

    #[Rule('required|string|max:100')]
    public string $city = '';

    #[Rule('required|string|max:7')]
    public string $zip = '';

    #[Rule('required|string')]
    public string $country = 'Czech Republic';

    #[Rule('required|string|max:20')]
    public string $firstName = '';

    #[Rule('required|string|max:100')]
    public string $lastName = '';

    #[Rule('required|string|max:20')]
    public string $phone = '';

    #[Rule('required|email|max:100|unique:users,email')]
    public string $email = '';

    #[Rule('nullable|string|max:255')]
    public string $note = '';

    #[Rule('required|string|min:6|max:100')]
    public string $password = '';

    #[Rule('required|string|min:6|max:100')]
    public string $confirm_password = '';

    public function register()
    {
        $this->validate();

        // Ověření, že hesla se shodují
        if ($this->password !== $this->confirm_password) {
            $this->addError('confirm_password', 'Hesla se neshodují.');
            return;
        }

        User::create([
            'name' => $this->firstName,
            'surname' => $this->lastName,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'ic' => $this->ico,
            'dic' => $this->dic,
            'company_name' => $this->companyName,
            'address' => $this->street,
            'city' => $this->city,
            'postcode' => $this->zip,
            'state' => $this->country,
            'note' => $this->note,
        ]);

        return redirect()->route('admin.login');
    }
    public function render()
    {
        return view('livewire.admin.register');
    }
}

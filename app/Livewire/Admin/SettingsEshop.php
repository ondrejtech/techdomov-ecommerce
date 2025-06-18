<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class SettingsEshop extends Component
{
    public function render()
    {
        return view('livewire.admin.settings-eshop');
    }

    public function save_settings()
    {
        $this->dispatch('message', [
            'text' => '„Nastavení e-shopu bylo úspěšně uloženo.',
            'type' => 'success',
            'status' => '200',
        ]);

        return redirect()->route('admin.my-settings.settings-eshop');
    }
}

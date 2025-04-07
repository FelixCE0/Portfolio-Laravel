<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class DarkModeToggle extends Component
{
    public $darkMode = false;

    public function mount()
    {
        $this->darkMode = Cookie::get('dark_mode') === 'true';
    }

    public function toggleDarkMode()
    {
        $this->darkMode = !$this->darkMode;
        Cookie::queue('dark_mode', $this->darkMode ? 'true' : 'false', 60 * 24 * 365); // 1 year
        $this->dispatch('darkModeToggled', darkMode: $this->darkMode);
    }

    public function render()
    {
        return view('livewire.dark-mode-toggle');
    }
}

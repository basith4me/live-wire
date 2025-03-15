<?php

namespace App\Livewire;

use Livewire\Component;

class LazyLoading extends Component
{
    public function mount() {
        sleep(3);
    }
    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <!-- Loading spinner... -->
            <p>Loading Message...</p>
        </div>
        HTML;
    }
    public function render()
    {
        return view('livewire.lazy-loading');
    }
}

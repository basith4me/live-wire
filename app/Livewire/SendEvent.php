<?php

namespace App\Livewire;

use Livewire\Component;

class SendEvent extends Component
{
    public string $message;
    public function sendMessage()
    {
        $this->dispatch('messageToComponent', $this->message);
    }

    public function resetMessage()
    {
        $this->dispatch('resetMessage');
    }
    public function render()
    {
        return view('livewire.send-event');
    }
}

<?php

namespace App\Livewire;
use Livewire\Attributes\On;

use Livewire\Component;

class ReceiveEvent extends Component
{
    public string $message = 'No message received yet';

    #[On('messageToComponent')]
    public function handleMessage($newMessage)
    {
        
            $this->message = $newMessage;
        
    }

    #[On('resetMessage')]
    public function resetMessage()
    {
        $this->reset();
    }
    public function render()
    {
        return view('livewire.receive-event');
    }
}

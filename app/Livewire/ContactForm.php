<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;

class ContactForm extends Component
{
    #[Rule('required|min:3')]
    public $name = '';

    #[Rule('required|email')]
    public $email = '';

    #[Rule('required|min:10')]
    public $message = '';

    public $successMessage = '';

    public function submit()
    {
        $this->validate();

        // In a real app, you would send an email or save to DB here.
        // For this portfolio, we'll just show a success state.
        
        $this->successMessage = "Thanks, {$this->name}! Your message has been sent. I'll get back to you shortly.";
        
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

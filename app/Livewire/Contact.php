<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;

class Contact extends Component
{
    #[Validate('required|string|max:100')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('required|string|max:50')]
    public string $phone = '';

    #[Validate('required|string|max:100')]
    public string $company = '';

    #[Validate('required|string|min:20|max:2000')]
    public string $message = '';

    // Honeypot field - should remain empty
    public string $website = '';

    // Timestamp for time-based validation
    public int $formLoadedAt;

    public bool $submitted = false;

    public function mount()
    {
        $this->formLoadedAt = time();
    }

    public function submit()
    {
        // Honeypot check - bots fill this in
        if (!empty($this->website)) {
            // Silently reject but appear successful
            $this->submitted = true;
            return;
        }

        // Time-based check - form submitted too fast (< 3 seconds)
        if (time() - $this->formLoadedAt < 3) {
            // Silently reject but appear successful
            $this->submitted = true;
            return;
        }

        $this->validate();

        // Send notification email (configure in .env)
        // Mail::to(config('mail.contact_to'))->send(new \App\Mail\ContactFormSubmission($this));

        // For now, just log it
        logger()->info('Contact form submission', [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'company' => $this->company,
            'message' => $this->message,
        ]);

        $this->submitted = true;
    }

    public function render()
    {
        return view('livewire.contact')
            ->layout('components.layouts.public', ['title' => 'Contact Us']);
    }
}

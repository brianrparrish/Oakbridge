<?php

namespace App\Livewire;

use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.minimal')]
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
            $this->submitted = true;
            return;
        }

        // Time-based check - form submitted too fast (< 3 seconds)
        if (time() - $this->formLoadedAt < 3) {
            $this->submitted = true;
            return;
        }

        $this->validate();

        // Send email notification
        Mail::to('info@oakbridgepcs.com')->send(
            new ContactFormSubmission(
                name: $this->name,
                email: $this->email,
                phone: $this->phone,
                company: $this->company,
                contactMessage: $this->message,
            )
        );

        // Also log it
        logger()->info('Oakbridge contact form submission', [
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
        return view('livewire.contact');
    }
}

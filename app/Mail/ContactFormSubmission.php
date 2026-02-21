<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $name,
        public string $email,
        public string $phone,
        public string $company,
        public string $contactMessage,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Form Submission from ' . $this->name,
            replyTo: [$this->email],
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact-form',
        );
    }
}

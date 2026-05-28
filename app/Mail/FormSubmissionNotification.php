<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class FormSubmissionNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $formType,
        public array $payload,
    ) {}

    public static function dispatchToAdmin(string $formType, array $payload): void
    {
        $recipients = array_filter(array_map('trim', explode(',', (string) env('MAIL_ADMIN_ADDRESS'))));

        if (empty($recipients)) {
            return;
        }

        try {
            Mail::to($recipients)->send(new self($formType, $payload));
        } catch (\Throwable $e) {
            Log::error('Failed to send '.$formType.' notification email', [
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function envelope(): Envelope
    {
        $subjects = [
            'contact'     => 'New contact enquiry from website',
            'admissions'  => 'New admissions application from website',
            'newsletter'  => 'New newsletter subscriber',
        ];

        $envelope = new Envelope(
            subject: $subjects[$this->formType] ?? 'New website form submission',
        );

        $replyEmail = $this->payload['email'] ?? $this->payload['parent_email'] ?? null;
        if ($replyEmail) {
            $replyName = $this->payload['name'] ?? $this->payload['parent_name'] ?? null;
            $envelope->replyTo = [new Address($replyEmail, $replyName ?? '')];
        }

        return $envelope;
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.form-submission',
            with: [
                'formType' => $this->formType,
                'payload'  => $this->payload,
            ],
        );
    }
}

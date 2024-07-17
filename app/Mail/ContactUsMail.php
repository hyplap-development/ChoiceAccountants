<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;
    public $emailData;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailData, $subject)
    {
        $this->emailData = $emailData;
        $this->subject = $subject;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        $view = '';

        switch ($this->subject) {
            case 'Contact Us':
                $view = 'emails.ContactUsMail';
                break;
            case 'Contact Us Admin':
                $view = 'emails.ContactUsMailAdmin';
                break;
            case 'Enquire':
                $view = 'emails.ContactUsMail';
                break;
            case 'Enquire Admin':
                $view = 'emails.ContactUsMailAdmin';
                break;
            default:
                $view = 'emails.default';
                break;
        }

        return new Content(
            markdown: $view,
        );
    }
    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}

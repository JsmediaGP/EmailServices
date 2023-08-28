<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class testingmail extends Mailable
{
 
   
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     */
    private string $recipientEmail;
    private string $email_template;
    public function __construct(string $email_template)
    {
        //$this->recipientEmail = $recipientEmail;
        $this->email_template = $email_template;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to SkillsForge',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.emailtemplate',
            with: ['email_template'=> $this->email_template,                  
                ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NoticeMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;



    /**
     * Create a new message instance.
     *
     * @return void
     * 
     * 
     */
     public $subject;
     public $body;

    public function __construct( $subject, $body)
    {

        $this->subject = $subject;
        $this->body = $body;
    }

    public function build()
    {
        return $this->markdown('admin.mail.mailMarkdown');
    }   

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */


    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'view.name',
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
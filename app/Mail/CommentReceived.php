<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Team;
use Illuminate\Mail\Mailables\Address;

class CommentReceived extends Mailable
{
    use Queueable, SerializesModels;

    protected $team;
    protected function setTeam($team){
        $this->team= $team;
    }
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Team $team)
    {
        $this->setTeam($team);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            to:[new Address(
                $this->team->email,
                $this->team->name
                )],
            subject: 'Comment Received',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.comment-received',
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

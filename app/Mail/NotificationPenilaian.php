<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotificationPenilaian extends Mailable
{
    use Queueable, SerializesModels;

    public $event_penilaian;
    public $announcement;

    /**
     * Create a new message instance.
     */
    public function __construct($event_penilaian, $announcement)
    {
        $this->event_penilaian = $event_penilaian;
        $this->announcement = $announcement;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Notikasi Halaman Penilaian',
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    public function build()
    {
        return $this->subject('Notikasi Halaman Penilaian')
                    ->view('email.halaman_nilai');
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

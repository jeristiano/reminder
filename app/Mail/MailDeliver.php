<?php

namespace App\Mail;

use App\Models\Note;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class MailDeliver
 * @package App\Mail
 */
class MailDeliver extends Mailable
{
    use Queueable, SerializesModels;

    protected $mail;

    /**
     * Create a new message instance.
     * @return void
     */
    public function __construct ($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Build the message.
     * @return $this
     */
    public function build ()
    {
        return $this->with(['messages' => $this->mail])
            ->markdown('emails.deliver');
    }
}

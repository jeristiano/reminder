<?php

namespace App\Mail;

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

    protected $content;

    /**
     * Create a new message instance.
     * @return void
     */
    public function __construct ($mail)
    {
        //
        $this->content = $mail;
    }

    /**
     * Build the message.
     * @return $this
     */
    public function build ()
    {

        return $this->with(['messages' => $this->content])->markdown('emails.deliver');
    }
}

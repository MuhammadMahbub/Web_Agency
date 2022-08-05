<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TeamMailSend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $client_name;
    public $client_email;
    public $client_phone;
    public $message_subject;
    public $message_details;

    public function __construct($client_name, $client_email,  $client_phone, $message_subject, $message_details)
    {
        $this->client_name = $client_name;
        $this->client_email = $client_email;
        $this->client_phone = $client_phone;
        $this->message_subject = $message_subject;
        $this->message_details = $message_details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Test mail for all team member individually')->view('emails_send.team_mail_send');
    }
}

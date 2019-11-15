<?php

namespace App\Mail\Web;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $app_nick;
    public $mail_name;
    public $mail_address;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
      $this->user = $user;
      $this->app_nick = env('APP_NICK');
      $this->mail_name = env('MAIL_FROM_NAME');
      $this->mail_address = env('MAIL_FROM_ADDRESS');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->subject('Welcome To ' . $this->app_nick .' - '.$this->user->name)
				->from($this->mail_address, $this->mail_name)
				->view('modules.emails.welcome');
    }
}

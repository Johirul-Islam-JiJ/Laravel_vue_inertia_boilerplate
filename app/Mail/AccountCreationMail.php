<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountCreationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $password;

    public function __construct(User $user, $password)
    {
        $this->password = $password;
        $this->user = $user;
    }
    
    public function build()
    {
        return $this->markdown('mails.account-creation')->subject('Account Created');
    }
}

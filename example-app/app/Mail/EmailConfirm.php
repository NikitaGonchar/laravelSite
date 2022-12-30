<?php

namespace App\Mail;

use App\Events\UserRegistered;
use App\Models\User;
use DateTime;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class EmailConfirm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public User $user)
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $ttl = new DateTime();
        $ttl->modify('+45 minutes');
        $link = URL::temporarySignedRoute(
            'verify.email',
            $ttl,
            [
                'id' => $this->user->id,
                'hash' => sha1($this->user->email),
            ]
        );
        return $this
            ->subject('Please confirm your email!')
            ->view('emails.confirm', [
                'name' => $this->user->name,
                'link' => $link,
            ]);
    }

}

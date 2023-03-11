<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use App\Events\SendEmail;
use App\Mail\NoticeMail;
use Illuminate\Support\Facades\Mail;


class SendEmailListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(SendEmail $event)
    {   
        $users = User::all();
   
        foreach ($users as $i => $user) {

            $multiplier = $i + 1;
            $email = new NoticeMail($event->subject, $event->body);
            $when = now()->addSeconds($multiplier * 10);
            $email->subject = $event->subject;
            Mail::to($user)->later($when,$email);
        }
    }
}
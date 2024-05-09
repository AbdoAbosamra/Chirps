<?php

namespace App\Listeners;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\NewChirp;

class SendChirpNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        foreach (User::whereNot('id' , $event->chirp->user_id)->cursor() as $user ){
            $user->notify(new NewChirp($event->chirp));
        }
    }
}

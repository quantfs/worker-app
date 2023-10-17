<?php

namespace App\Listeners\Worker;

use App\Models\Profile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateProfileListener
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
        //dd($event->model);
        Profile::create([
            'worker_id' => $event->model->id,
        ]);
    }
}

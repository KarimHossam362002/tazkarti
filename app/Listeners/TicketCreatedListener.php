<?php

namespace App\Listeners;

use App\Events\TicketCreated;
use App\Models\Tazkara;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TicketCreatedListener
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
    public function handle(TicketCreated $event): void
    {
        $latestTazkara = Tazkara::orderBy('tazkara', 'desc')->first();
        $tazkaraNumber = ($latestTazkara) ? $latestTazkara->tazkara + 1 : 1;
    
        $event->tazkara->create(['tazkara' => $tazkaraNumber]);
    }
}

<?php

namespace App\Events;

use App\Models\Tazkara;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class TicketCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $tazkara;
    /**
     * Create a new event instance.
     */
    public function __construct($tazkara)
    {
        $this->tazkara = $tazkara;
    }
    public function handle(TicketCreated $event)
{
   
}
    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}

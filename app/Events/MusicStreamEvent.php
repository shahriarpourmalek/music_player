<?php

namespace App\Events;

use App\Models\Song;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MusicStreamEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public function __construct(public Song $song)
    {
    }

    public function broadcastOn()
    {
        return  new Channel('music-stream');
    }

    public function broadcastAs()
    {
        return 'streaming';
    }

    public function broadcastWith()
    {
        return ['url' => $this->song->file];
    }
}

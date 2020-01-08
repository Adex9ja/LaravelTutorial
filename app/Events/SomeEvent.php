<?php


namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
class SomeEvent extends Event
{

    use SerializesModels;
    /**
     * SomeEvent constructor.
     */
    public function __construct()
    {
    }

    public function broadcastOn(){
        return [];
    }
}

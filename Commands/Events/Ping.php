<?php
namespace Wandu\Event\Events;

use Wandu\Event\Contracts\ViaQueue;

class Ping implements ViaQueue
{
    /** @var string */
    protected $message;

    /**
     * @param string $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}

<?php

namespace MikeIceman\Events\Emitters;

use MikeIceman\Events\Events\ActivateEvent;
use MikeIceman\Events\Events\FinishedEvent;
use MikeIceman\Events\Events\SubscribeEvent;
use MikeIceman\Events\Events\UnSubscribeEvent;
use MikeIceman\Events\Interfaces\EventEmitterInterface;
use MikeIceman\Events\Interfaces\EventInterface;

class EventEmitter implements EventEmitterInterface
{
    /**
     * @var string[]
     */
    private $map = [
        EventEmitterInterface::EVENT_SUBSCRIBE => SubscribeEvent::class,
        EventEmitterInterface::EVENT_UNSUBSCRIBE => UnSubscribeEvent::class,
        EventEmitterInterface::EVENT_ACTIVATE => ActivateEvent::class,
        EventEmitterInterface::EVENT_FINISHED => FinishedEvent::class,
    ];

    public function emit(array $data, int $event): void
    {
        if (in_array($event, $this->map, true)) {
            (new $this->map[$event]())->emit($data);
        }
    }

    /**
     * @param array $data
     * @param int $mask
     */
    public function emitMultiple($data, $mask): void
    {
        /**
         * @var int $id
         * @var EventInterface $event
         */
        foreach ($this->map as $id => $event) {
            if ($mask & $id) {
                (new $event())->emit($data);
            }
        }
    }
}

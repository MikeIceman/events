<?php

namespace MikeIceman\Events\Events;

use MikeIceman\Events\Interfaces\EventInterface;

class ActivateEvent implements EventInterface
{
    public function emit($data)
    {
        echo 'ActivateEvent called with following data:' . PHP_EOL;
        print_r($data);
    }
}

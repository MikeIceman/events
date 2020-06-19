<?php

namespace MikeIceman\Events\Events;

use MikeIceman\Events\Interfaces\EventInterface;

class FinishedEvent implements EventInterface
{
    public function emit($data)
    {
        echo 'FinishedEvent called with following data:' . PHP_EOL;
        print_r($data);
    }
}

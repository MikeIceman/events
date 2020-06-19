<?php

namespace MikeIceman\Events\Events;

use MikeIceman\Events\Interfaces\EventInterface;

class SubscribeEvent implements EventInterface
{
    public function emit($data)
    {
        echo 'SubscribeEvent called with following data:' . PHP_EOL;
        print_r($data);
    }
}

<?php

namespace MikeIceman\Events\Events;

use MikeIceman\Events\Interfaces\EventInterface;

class UnSubscribeEvent implements EventInterface
{
    public function emit($data)
    {
        echo 'UnSubscribeEvent called with following data:' . PHP_EOL;
        print_r($data);
    }
}

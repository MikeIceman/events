<?php

require_once __DIR__ . '/../vendor/autoload.php';

use MikeIceman\Events\Emitters\EventEmitter;
use MikeIceman\Events\Interfaces\EventEmitterInterface as Events;

# Let's test it
(new EventEmitter())->emitMultiple(
    ['message' => 'Hello world!'],
    Events::EVENT_SUBSCRIBE | Events::EVENT_ACTIVATE
);

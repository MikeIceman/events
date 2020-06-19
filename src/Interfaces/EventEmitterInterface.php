<?php

namespace MikeIceman\Events\Interfaces;

interface EventEmitterInterface
{
    public const EVENT_SUBSCRIBE = 2;
    public const EVENT_UNSUBSCRIBE = 4;
    public const EVENT_ACTIVATE = 8;
    public const EVENT_FINISHED = 16;

    /**
     * Emit single event
     *
     * @param array $data
     * @param int $mask
     *
     * @return void
     */
    public function emit(array $data, int $mask): void;

    /**
     * Emit multiple events
     *
     * @param array $data
     * @param int $mask
     *
     * @return void
     */
    public function emitMultiple(array $data, int $mask): void;
}

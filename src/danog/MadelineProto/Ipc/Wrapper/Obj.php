<?php

declare(strict_types=1);

namespace danog\MadelineProto\Ipc\Wrapper;

use danog\MadelineProto\Ipc\Wrapper;
use Generator;

/**
 * Generic callback wrapper object.
 */
class Obj
{
    /**
     * Method list.
     *
     * @var array<string, int>
     */
    private array $methods = [];
    /**
     * Wrapper.
     */
    private Wrapper $wrapper;
    /**
     * Constructor.
     */
    public function __construct(Wrapper $wrapper, array $methods)
    {
        $this->wrapper = $wrapper;
        $this->methods = $methods;
    }
    /**
     * Call method.
     *
     * @return Generator<mixed, mixed, mixed, mixed>
     */
    public function __call(string $name, array $arguments = [])
    {
        return $this->wrapper->__call($this->methods[$name], $arguments);
    }
}

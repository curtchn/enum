<?php

namespace Greg0ire\Enum\Tests\Fixtures;

use Greg0ire\Enum\AbstractEnum;

final class AllEnum extends AbstractEnum
{
    protected static function getEnumTypes()
    {
        return [
            'originally' => FooInterface::class,
            DummyEnum::class,
        ];
    }
}

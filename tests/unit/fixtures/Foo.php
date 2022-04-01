<?php

namespace tests\unit\fixtures;

class Foo
{
    public function __toString(): string
    {
        return 'to_string';
    }
}

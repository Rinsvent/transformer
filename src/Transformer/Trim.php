<?php
declare(strict_types=1);

namespace Rinsvent\Transformer\Transformer;

#[\Attribute(\Attribute::TARGET_ALL|\Attribute::IS_REPEATABLE)]
class Trim extends Meta
{
    public function __construct(
        public array $tags = ['default'],
        public string $characters = " \t\n\r\0\x0B"
    ) {
        parent::__construct(...func_get_args());
    }
}
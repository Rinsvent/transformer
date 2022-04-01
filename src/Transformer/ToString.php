<?php
declare(strict_types=1);

namespace Rinsvent\Transformer\Transformer;

#[\Attribute(\Attribute::TARGET_ALL|\Attribute::IS_REPEATABLE)]
class ToString extends Meta
{
    public function __construct(
        public array $tags = ['default'],
    ) {
        parent::__construct(...func_get_args());
    }
}

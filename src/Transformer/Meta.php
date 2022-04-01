<?php
declare(strict_types=1);

namespace Rinsvent\Transformer\Transformer;

#[\Attribute(\Attribute::TARGET_ALL|\Attribute::IS_REPEATABLE)]
abstract class Meta
{
    public const TYPE = 'simple';
    public ?string $returnType = null;
    public ?bool $allowsNull = null;

    public function __construct(
        public array $tags = ['default']
    ) {}
}
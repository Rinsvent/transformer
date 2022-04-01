<?php
declare(strict_types=1);

namespace Rinsvent\Transformer\Transformer;

interface TransformerInterface
{
    public function transform(mixed $data, Meta $meta): mixed;
}
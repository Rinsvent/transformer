<?php
declare(strict_types=1);

namespace Rinsvent\Transformer\Resolver;

use Rinsvent\Transformer\Transformer\Meta;
use Rinsvent\Transformer\Transformer\TransformerInterface;

interface TransformerResolverInterface
{
    public function resolve(Meta $meta): TransformerInterface;
}
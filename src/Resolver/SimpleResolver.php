<?php
declare(strict_types=1);

namespace Rinsvent\Transformer\Resolver;

use Rinsvent\Transformer\Transformer\Meta;
use Rinsvent\Transformer\Transformer\TransformerInterface;

class SimpleResolver implements TransformerResolverInterface
{
    public function resolve(Meta $meta): TransformerInterface
    {
        $metaClass = $meta::class;
        $transformerClass = $metaClass . 'Transformer';
        return new $transformerClass;
    }
}
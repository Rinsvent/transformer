<?php
declare(strict_types=1);

namespace Rinsvent\Transformer;

use Rinsvent\Transformer\Resolver\TransformerResolverStorage;
use Rinsvent\Transformer\Transformer\Meta;
use Rinsvent\Transformer\Transformer\TransformerInterface;

class Transformer
{
    public function transform(mixed $value, Meta $meta): mixed
    {
        $transformer = $this->grabTransformer($meta);
        $transformer->transform($value, $meta);
        return $value;
    }

    private function grabTransformer(Meta $meta): TransformerInterface
    {
        $storage = TransformerResolverStorage::getInstance();
        $resolver = $storage->get($meta::TYPE);
        return $resolver->resolve($meta);
    }
}

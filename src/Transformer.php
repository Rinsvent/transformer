<?php
declare(strict_types=1);

namespace Rinsvent\Transformer;

use Rinsvent\Transformer\Resolver\TransformerResolverStorage;
use Rinsvent\Transformer\Transformer\Meta;
use Rinsvent\Transformer\Transformer\TransformerInterface;

class Transformer
{
    public function transform(mixed $value, Meta $meta, array $tags = ['default']): mixed
    {
        $filteredTags = array_diff($tags, $meta->tags);
        if (count($filteredTags) === count($tags)) {
            return $value;
        }
        $transformer = $this->grabTransformer($meta);
        return $transformer->transform($value, $meta);
    }

    private function grabTransformer(Meta $meta): TransformerInterface
    {
        $storage = TransformerResolverStorage::getInstance();
        $resolver = $storage->get($meta::TYPE);
        return $resolver->resolve($meta);
    }
}

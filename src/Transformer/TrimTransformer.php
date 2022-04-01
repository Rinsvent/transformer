<?php
declare(strict_types=1);

namespace Rinsvent\Transformer\Transformer;

class TrimTransformer implements TransformerInterface
{
    /**
     * @param string|null $data
     * @param Trim $meta
     */
    public function transform(mixed $data, Meta $meta): mixed
    {
        if ($data === null) {
            return $data;
        }
        return trim($data, $meta->characters);
    }
}
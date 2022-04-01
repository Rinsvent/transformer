<?php
declare(strict_types=1);

namespace Rinsvent\Transformer\Transformer;

use function PHPUnit\Framework\equalTo;

class ToStringTransformer implements TransformerInterface
{
    /**
     * @param string|null $data
     * @param ToString $meta
     * @return string|null
     */
    public function transform(mixed $data, Meta $meta): mixed
    {
        if ($data === null) {
            return $data;
        }
        try {
            return (string)$data;
        } catch (\Throwable) {
            return $data;
        }
    }
}

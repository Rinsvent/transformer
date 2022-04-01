<?php
declare(strict_types=1);

namespace Rinsvent\Transformer\Transformer;

class DateTimeFormatTransformer implements TransformerInterface
{
    /**
     * @param \DateTimeImmutable|\DateTime|null $data
     * @param DateTimeFormat $meta
     */
    public function transform(mixed $data, Meta $meta): mixed
    {
        if ($data === null) {
            return $data;
        }
        return $data->format($meta->format);
    }
}
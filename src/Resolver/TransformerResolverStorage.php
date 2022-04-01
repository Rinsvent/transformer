<?php
declare(strict_types=1);

namespace Rinsvent\Transformer\Resolver;

class TransformerResolverStorage
{
    private array $items = [];

    public static function getInstance(): self
    {
        static $instance = null;

        if ($instance) {
            return $instance;
        }

        $instance = new self();
        $instance->add('simple', new SimpleResolver());

        return $instance;
    }

    public function add(string $code, TransformerResolverInterface $transformerResolver): void
    {
        $this->items[$code] = $transformerResolver;
    }

    public function get(string $code): TransformerResolverInterface
    {
        return $this->items[$code];
    }

    private function __clone() {}
    private function __construct() {}
}
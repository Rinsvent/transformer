<?php

namespace Rinsvent\DTO2Data\Tests\Converter;

use tests\unit\fixtures\Foo;
use Rinsvent\Transformer\Transformer;

class ToStringTransformTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    // tests
    public function testSuccessFillRequestData()
    {
        $t = new Transformer();
        $actual = $t->transform(new Foo(), new Transformer\ToString());
        $this->assertEquals('to_string', $actual);
    }
}

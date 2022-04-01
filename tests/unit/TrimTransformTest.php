<?php

namespace Rinsvent\DTO2Data\Tests\Converter;

use Rinsvent\Transformer\Transformer;

class FillTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    // tests
    public function testSuccessFillRequestData()
    {
        $t = new Transformer();
        $actual = $t->transform('  asdas  ', new Transformer\Trim());
        $this->assertEquals('asdas', $actual);
    }
}

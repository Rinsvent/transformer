<?php

namespace Rinsvent\DTO2Data\Tests\Converter;

use Rinsvent\Transformer\Transformer;

class DateTimeFormatTransformTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    // tests
    public function testSuccessFillRequestData()
    {
        $t = new Transformer();
        $dt = new \DateTime('2022-04-01');
        $dt->setTime(5, 23, 21);
        $actual = $t->transform($dt, new Transformer\DateTimeFormat());
        $this->assertEquals('2022-04-01T05:23:21+00:00', $actual);
    }
}

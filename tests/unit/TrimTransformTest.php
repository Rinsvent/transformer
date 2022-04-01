<?php

namespace Rinsvent\DTO2Data\Tests\Converter;

use Rinsvent\DTO2Data\Dto2DataConverter;
use Rinsvent\DTO2Data\Tests\unit\Converter\fixtures\FillTest\Author;
use Rinsvent\DTO2Data\Tests\unit\Converter\fixtures\FillTest\Bar;
use Rinsvent\DTO2Data\Tests\unit\Converter\fixtures\FillTest\BuyRequest;
use Rinsvent\DTO2Data\Tests\unit\Converter\fixtures\FillTest\Collection;
use Rinsvent\DTO2Data\Tests\unit\Converter\fixtures\FillTest\CollectionItem;
use Rinsvent\DTO2Data\Tests\unit\Converter\fixtures\FillTest\HelloRequest;
use Rinsvent\DTO2Data\Tests\unit\Converter\fixtures\FillTest\HelloSchema;
use Rinsvent\DTO2Data\Tests\unit\Converter\fixtures\FillTest\UUID;
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

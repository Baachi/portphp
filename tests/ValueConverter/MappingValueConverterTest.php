<?php
namespace Port\Tests\ValueConverter;

use Port\ValueConverter\MappingValueConverter;

class MappingValueConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Port\Exception\UnexpectedValueException
     * @expectedExceptionMessage Cannot find mapping for value "unexpected value"
     */
    public function testConvert()
    {
        $converter = new MappingValueConverter(array(
            'source' => 'destination'
        ));

        $this->assertSame('destination', call_user_func($converter, 'source'));
        call_user_func($converter, 'unexpected value');
    }
}

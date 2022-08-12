<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Utils\CommonFunc;

class URLTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testSluggifyReturnsSluggifiedString()
    {
        $originalString = 'This string will be sluggified';
        $expectedResult = 'this-string-will-be-sluggified';
        
        $func = new CommonFunc();
        $result = $func->sluggify($originalString);
        
        $this->assertEquals($expectedResult, $result);
    }
}

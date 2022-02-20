<?php

use PHPUnit\Framework\TestCase;

require_once  "vendor/autoload.php";
require_once "app/functions.php";

class CutStringTest extends TestCase
{
    public function testEmtpy()
    {
        $this->assertEquals('', cutString('', 20));
    }

    public function testShortString()
    {
        $this->assertEquals('short', cutString('short', 20));
    }

    public function testCut()
    {
        $this->assertEquals('long string shoul...',
            cutString('long string should be cut', 20));
    }

    public function testBeyondTheLimit()
    {
        $this->assertEquals('beyondl...', cutString('beyondlimit', 10));
    }

    public function testLimitCondition()
    {
        $this->expectException(InvalidArgumentException::class);
        cutString('limit', 4);
    }
}
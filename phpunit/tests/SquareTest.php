<?php

class SquareTest extends PHPUnit_Framework_TestCase
{
    public function testArea()
    {
        $width = 2;
        $length = 4;
        $square = new Square($width, $length);
        $this->assertEquals($square->area(), $width * $length);
    }

    public function testTrue()
    {
        $bool = true;
        $this->assertTrue($bool);
    }
}

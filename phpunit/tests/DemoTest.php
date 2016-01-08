<?php

class DemoTest extends PHPUnit_Framework_TestCase
{
    public function testDemo()
    {
        $halo = 'halo';
        $this->assertEquals($halo, 'halo');
    }
}

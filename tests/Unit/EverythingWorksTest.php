<?php

use MaximYugov\SimpleProject\EverythingWorks;
use PHPUnit\Framework\TestCase;

class EverythingWorksTest extends TestCase
{
    /**
     * @test
     */
    public function test_hello_world()
    {
        $hello = new EverythingWorks();
        $this->assertEquals("Hello, World!", $hello->helloWorld());
    }
}
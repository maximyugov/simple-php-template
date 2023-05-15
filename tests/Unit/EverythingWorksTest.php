<?php

namespace Tests;

use MaximYugov\SimpleProject\EverythingWorks;
use PHPUnit\Framework\TestCase;

class EverythingWorksTest extends TestCase
{
    /**
     * @test
     */
    public function testHelloWorld()
    {
        $hello = new EverythingWorks();
        $this->assertEquals("Hello, World!", $hello->helloWorld());
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hello()
    {
        $this->assertTrue(true);

        $arr = [];
        $this->assertEmpty($arr);

        $text = "Hello World";
        $this->assertEquals("Hello World", $text);
    }
}

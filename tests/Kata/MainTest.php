<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Main;

class MainTest extends TestCase
{
    private Main $main;

    protected function setUp(): void
    {
        $this->main = new Main();
    }

    public function testShallPass(): void
    {
        $actual = $this->main->handle([10, 1, 2, 3, 2]);

        $this->assertEquals([1, 2, 2, 3, 10], $actual);
    }

}

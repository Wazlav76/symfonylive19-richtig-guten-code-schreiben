<?php declare(strict_types=1);
namespace IrishGauge;

use PHPUnit\Framework\TestCase;

final class CubeTest extends TestCase
{
    public function testCanBeBlack(): void
    {
        $cube = Cube::black();

        $this->assertTrue($cube->isBlack());
    }
}
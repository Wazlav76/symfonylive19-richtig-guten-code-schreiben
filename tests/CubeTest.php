<?php declare(strict_types=1);
namespace IrishGauge;

use PHPUnit\Framework\TestCase;

/**
 * @covers \IrishGauge\Cube
 * @covers \IrishGauge\BlackCube
 * @covers \IrishGauge\PinkCube
 * @covers \IrishGauge\WhiteCube
 */
final class CubeTest extends TestCase
{
    public function testCanBeBlack(): void
    {
        $cube = Cube::black();

        $this->assertTrue($cube->isBlack());
        $this->assertFalse($cube->isPink());
        $this->assertFalse($cube->isWhite());
    }

    public function testCanBePink(): void
    {
        $cube = Cube::pink();

        $this->assertFalse($cube->isBlack());
        $this->assertTrue($cube->isPink());
        $this->assertFalse($cube->isWhite());
    }

    public function testCanBeWhite(): void
    {
        $cube = Cube::white();

        $this->assertFalse($cube->isBlack());
        $this->assertFalse($cube->isPink());
        $this->assertTrue($cube->isWhite());
    }
}
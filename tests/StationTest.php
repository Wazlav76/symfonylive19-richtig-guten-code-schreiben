<?php declare(strict_types=1);

namespace IrishGauge;

use PHPUnit\Framework\TestCase;

/**
 * @covers \IrishGauge\Station
 *
 * @uses \IrishGauge\Cube
 * @uses \IrishGauge\WhiteCube
 */
final class StationTest extends TestCase
{
    public function testCanBeInATown(): void
    {
        $station = new Station(null);

        $this->assertTrue($station->inTown());
        $this->assertFalse($station->inCity());
    }

    public function testCanBeInACity(): void
    {
        $station = new Station(Cube::white());

        $this->assertTrue($station->inCity());
        $this->assertFalse($station->inTown());
    }
}

<?php declare(strict_types=1);
namespace IrishGauge;

use PHPUnit\Framework\TestCase;


final class RailwayTest extends TestCase
{
    public function isPayingCityAndTown(): void
    {
        $railway = new Railway(Station::city(Cube::black()), Station::town());
        $this->assertTrue($railway->connectsTownAndCity());
    }
    
    public function isPayingTwoCities(): void
    {
        $railway = new Railway(Station::city(Cube::black()), Station::town());
        $this->assertTrue($railway->connectsCityAndCity());
    }
}

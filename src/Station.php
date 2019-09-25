<?php declare(strict_types=1);

namespace IrishGauge;

final class Station
{
    /**
     * @var ?Cube
     */
    private $specialInterest;

    public function __construct(?Cube $specialInterest)
    {
        $this->specialInterest = $specialInterest;
    }

    public function inTown(): bool
    {
        return $this->specialInterest === null;
    }

    public function inCity(): bool
    {
        return $this->specialInterest !== null;
    }
}

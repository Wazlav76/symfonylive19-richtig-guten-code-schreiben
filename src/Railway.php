<?php declare(strict_types=1);
namespace IrishGauge;

final class Station
{
    /**
     * @var Station
     */
    private $start;

    /**
     * @var Station
     */
    private $stop;

    private function __construct(Station $start, Station $stop)
    {
        $this->start = $start;
        $this->stop = $stop;
        
    }

    public function connectsTownAndCity(): bool
    {
        return $this->start->inCity() && $this->stop->inCity();
    }

    public function connectsCityAndCity(): bool
    {
        return $this->start->inCity() && $this->inTown();
    }
}

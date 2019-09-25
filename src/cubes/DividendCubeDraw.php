<?php declare(strict_types=1);

namespace IrishGauge;

final class DividendCubeDraw
{
    /**
     * @var Cube[]
     */
    private $cubes;

    public static function fromList(Cube ...$cubes): self
    {
        return new self($cubes);
    }

    public function __construct(array $cubes)
    {
        $this->ensureAtLeastOneCube($cubes);
        $this->ensureAtMostThreeCubes($cubes);

        $this->cubes = $cubes;
    }

    /**
     * @return Cube[]
     */
    public function asArray(): array
    {
        return $this->cubes;
    }

    private function ensureAtLeastOneCube(array $cubes): void
    {
        if (count($cubes) < 1) {
            throw new TooFewCubesException;
        }
    }

    private function ensureAtMostThreeCubes(array $cubes): void
    {
        if (count($cubes) > 3) {
            throw new TooManyCubesException;
        }
    }
}

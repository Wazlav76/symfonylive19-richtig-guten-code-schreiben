<?php declare(strict_types=1);

namespace IrishGauge;

final class Cube
{
    public static function black(): self
    {
        return new self;
    }

    public function isBlack(): bool
    {
        return true;
    }
}

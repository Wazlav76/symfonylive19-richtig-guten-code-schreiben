<?php declare(strict_types=1);

namespace IrishGauge;

final class Cube
{
    private const BLACK = 0;

    private const PINK = 1;

    private const WHITE = 2;

    /**
     * @var int
     */
    private $color;

    public static function black(): self
    {
        return new self(self::BLACK);
    }

    public static function pink(): self
    {
        return new self(self::PINK);
    }

    public static function white(): self
    {
        return new self(self::WHITE);
    }

    private function __construct(int $color)
    {
        $this->color = $color;
    }

    public function isBlack(): bool
    {
        return $this->color === self::BLACK;
    }

    public function isPink(): bool
    {
        return $this->color === self::PINK;
    }

    public function isWhite(): bool
    {
        return $this->color === self::WHITE;
    }
}

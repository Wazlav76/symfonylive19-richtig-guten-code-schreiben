<?php declare(strict_types=1);

namespace IrishGauge;

abstract class Cube
{
    public static function black(): BlackCube
    {
        return new BlackCube;
    }

    public static function pink(): PinkCube
    {
        return new PinkCube;
    }

    public static function white(): WhiteCube
    {
        return new WhiteCube;
    }

    public function isBlack(): bool
    {
        return false;
    }

    public function isPink(): bool
    {
        return false;
    }

    public function isWhite(): bool
    {
        return false;
    }
}

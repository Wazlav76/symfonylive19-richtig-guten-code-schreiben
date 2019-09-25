<?php declare(strict_types=1);
namespace IrishGauge;

use PHPUnit\Framework\TestCase;

final class DividendCubeDrawTest extends TestCase
{
    public function testCanBeCreatedFromOneCube(): void
    {
        $black = Cube::black();

        $draw = DividendCubeDraw::fromList($black);

        $this->assertContains($black, $draw->asArray());
    }

    public function testCanBeCreatedFromTwoCubes(): void
    {
        $black = Cube::black();
        $pink  = Cube::pink();

        $draw = DividendCubeDraw::fromList($black, $pink);

        $this->assertContains($black, $draw->asArray());
        $this->assertContains($pink, $draw->asArray());
    }

    public function testCanBeCreatedFromThreeCubes(): void
    {
        $black = Cube::black();
        $pink  = Cube::pink();
        $white = Cube::white();

        $draw = DividendCubeDraw::fromList($black, $pink, $white);

        $this->assertContains($black, $draw->asArray());
        $this->assertContains($pink, $draw->asArray());
        $this->assertContains($white, $draw->asArray());
    }

    public function testCannotBeCreatedFromLessThanOneCube(): void
    {
        $this->expectException(TooFewCubesException::class);

        DividendCubeDraw::fromList();
    }

    public function testCannotBeCreatedFromMoreThanThreeCubes(): void
    {
        $black = Cube::black();
        $pink  = Cube::pink();
        $white = Cube::white();

        $this->expectException(TooManyCubesException::class);

        DividendCubeDraw::fromList($black, $pink, $white, $white);
    }
}
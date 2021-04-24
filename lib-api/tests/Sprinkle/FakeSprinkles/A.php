<?php declare(strict_types=1);

namespace UserFrosting\System\Tests\Sprinkle\FakeSprinkles;

use UserFrosting\System\Sprinkle\Sprinkle;
use UserFrosting\System\Tests\Sprinkle\FakeSprinkles\B;

class A extends Sprinkle
{
    public static function requiredSprinkles() : array
    {
        return [
            B::class,
        ];
    }
}

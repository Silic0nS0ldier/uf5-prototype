<?php declare(strict_types=1);

namespace UserFrosting\System\Tests\Sprinkle\FakeSprinkles;

use UserFrosting\System\Sprinkle\Sprinkle;
use UserFrosting\System\Tests\Sprinkle\FakeSprinkles\C;
use UserFrosting\System\Tests\Sprinkle\FakeSprinkles\D;

class B extends Sprinkle
{
    public static function requiredSprinkles() : array
    {
        return [
            C::class,
            D::class,
        ];
    }
}

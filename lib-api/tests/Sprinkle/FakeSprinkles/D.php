<?php declare(strict_types=1);

namespace UserFrosting\System\Tests\Sprinkle\FakeSprinkles;

use UserFrosting\System\Sprinkle\Sprinkle;

class D extends Sprinkle
{
    public static function requiredSprinkles() : array
    {
        return [];
    }
}

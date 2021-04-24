<?php declare(strict_types=1);

namespace UserFrosting\System\Tests\Sprinkle;

use PHPUnit\Framework\TestCase;
use UserFrosting\System\Sprinkle\SprinkleManager;
use Ds\Set;
use UserFrosting\System\Tests\Sprinkle\FakeSprinkles\A;

final class SprinkleManagerTest extends TestCase
{
    public function testRegisterSprinkle(): void
    {
        $sprinkleManager = new SprinkleManager();

        $resolved = new Set();
        $sprinkleManager->registerSprinkle(A::class, $resolved, new Set());
        echo(json_encode($resolved));
    }
}

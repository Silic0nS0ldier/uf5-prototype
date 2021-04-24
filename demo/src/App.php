<?php declare(strict_types=1);

namespace UF5Demo;

use UserFrosting\System\UserFrosting;
use UserFrosting\System\Sprinkle\Sprinkle;

final class App extends Sprinkle
{
    public static function main(string $mode): void
    {
        UserFrosting::main($mode, self::class);
    }
    
    public function __construct()
    {
        // Sprinkles are loaded via registration
        // If a sprinkle depends on another sprinkle, it is responsible for registering it
        // This ensures dependency ordering is automatically correct
        // Actual acquisition done with composer.json
        // If in traditional MVC project with client assets, bakery CLI is responsible for sprinkle discovery
        // this eliminates the need for sprinkles.json, meaning better runtime performance
        //$uf->registerSprinkle();
    }
}

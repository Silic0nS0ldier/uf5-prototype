<?php declare(strict_types=1);

namespace UserFrosting\System;

use UserFrosting\System\Sprinkle\Sprinkle;

class UserFrosting
{
    /**
     * We use a static method wrapper to keep everything isolated.
     * Minimizing the API surface will aid future updates.
     * @param 'web'|'cli' $mode UF operation mode.
     * @todo Use enum for mode once PHP 8.1 is the minimum version.
     * @param string $mainSprinkle The main entry point sprinkle.
     */
    public static function main(string $mode, string $mainSprinkle): void
    {
        // TODO Start common lifecycle methods
        if ($mode === 'web') {
            // TODO Start web lifecycle methods
        } else {
            // TODO Start cli lifecycle methods
        }
    }
}

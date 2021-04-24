<?php declare(strict_types=1);

namespace UserFrosting\System\Sprinkle;

/**
 * Represents a sprinkle (plugin, theme, site, etc), and the code required to boot up that sprinkle.
 */
abstract class Sprinkle
{
    /**
     * Sprinkles this sprinkle depends on.
     * @return string[] Fully qualified sprinkle class names.
     */
    public static function requiredSprinkles() : array
    {
        return [];
    }

    // TODO Hook to register sprinkles that may be requested to load later (e.g. user theme)
}

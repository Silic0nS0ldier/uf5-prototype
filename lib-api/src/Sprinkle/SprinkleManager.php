<?php declare(strict_types=1);

namespace UserFrosting\System\Sprinkle;

use UserFrosting\System\Sprinkle\Sprinkle;
use Ds\Set;

class SprinkleManager
{
    /** @var Sprinkle[] Loaded sprinkles. */
    protected array $sprinkles = [];

    // TODO Track late loading sprinkles that have yet to be fully loaded

    /**
     * @todo Surely we can do this without reflection
     */
    public function registerSprinkle(string $sprinkle, Set $resolved, Set $processing): void
    {
        // Must be a valid FQDN of a sprinkle
        if (!is_a($sprinkle, Sprinkle::class, true)) {
            throw new \Exception();
        }

        // Recursion guard, circular dependencies
        if ($processing->contains($sprinkle)) {
            // Sprinkle is already being processed, meaning it depends on itself
            // Engaging circular dependency guard (total fucking panic, dead people and bullshit)
            // TODO We can point fingers by catching the exception and adding info (cause recursion)
            throw new \Exception('circular deps');
        }
        
        // Guard against reprocessing
        if ($resolved->contains($sprinkle)) {
            // Already resolved
            return;
        }

        // Mark as processing
        $processing->add($sprinkle);

        /** @var string[] */
        $requiredSprinkles = $sprinkle::requiredSprinkles();

        foreach ($requiredSprinkles as $requiredSprinkle) {
            $this->registerSprinkle($requiredSprinkle, $resolved, $processing);
        }

        $processing->remove($sprinkle);
        $resolved->add($sprinkle);
    }
}
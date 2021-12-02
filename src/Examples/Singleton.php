<?php

declare(strict_types=1);

namespace Otis22\PhpSkeleton\Examples;

final class Singleton
{
    private static array $instances = [];

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new self();
        }

        return self::$instances[$cls];
    }

    public function someBusinessLogic(): int
    {
        return 1;
    }
}

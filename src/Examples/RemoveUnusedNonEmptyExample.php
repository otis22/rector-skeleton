<?php
/**
 * Еще в первых числах ноября 2021 ректор бы сломал этот код удалив if
 */
declare(strict_types=1);

namespace Otis22\PhpSkeleton\Examples;

final class RemoveUnusedNonEmptyExample
{
    private function sum($arr)
    {
        if (!empty($arr)) {
            $sum = 0;
            foreach ($arr as $item) {
                $sum += $item;
            }
            return $sum;
        }
    }
    public function wrongSum(): int
    {
        return $this->sum(null);
    }
}

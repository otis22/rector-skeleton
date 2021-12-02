<?php
/**
 * Еще в первых числах ноября 2021 ректор бы сломал метод rectorDoesNotDeleteIfEmpty удалив if
 * Сейчас(02.12.2021) эта проблема уже устранена и if удаляется безопасно.
 */
declare(strict_types=1);

namespace Otis22\PhpSkeleton\Examples;

final class RemoveUnusedNonEmptyExample
{
    public function rectorDoesNotDeleteIfEmpty($arr)
    {
        $sum = 0;
        if (!empty($arr)) {
            foreach ($arr as $item) {
                $sum += $item;
            }
        }
        return $sum;
    }

    public function rectorDeletesIfEmpty(array $arr)
    {
        $sum = 0;
        foreach ($arr as $item) {
            $sum += $item;
        }
        return $sum;
    }
}

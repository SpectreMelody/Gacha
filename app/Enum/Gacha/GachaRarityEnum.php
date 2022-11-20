<?php

namespace App\Enum\Gacha;

use Closure;
use Spatie\Enum\Enum;
/**
 * @method static self SSR()
 * @method static self SR()
 * @method static self R()
 * @method static self UC()
 * @method static self C()
 */
class GachaRarityEnum extends Enum
{
    protected static function values(): Closure
    {
        return function (string $name): string|int {
            return mb_strtolower($name);
        };
    }
}
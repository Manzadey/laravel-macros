<?php

namespace Manzadey\LaravelMacros\Str;

class Declination
{
    public const NAME = 'declination';

    public function __invoke() : \Closure
    {
        return static function(int $number, array $words) : string {
            $cases = [2, 0, 1, 1, 1, 2];
            $word  = $words[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];

            return $number . ' ' . $word;
        };
    }
}

<?php

namespace Manzadey\LaravelMacros\Str;

use Illuminate\Support\Str;

class DeclinationRuble
{
    public const NAME = 'declinationRuble';

    public function __invoke() : \Closure
    {
        return function(int $value) : string {
            return Str::declination($value, ['рубль', 'рубля', 'рублей']);
        };
    }
}

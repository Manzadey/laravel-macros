<?php

namespace Manzadey\LaravelMacros\Str;

class CountWords
{
    public const NAME = 'countWords';

    public function __invoke() : \Closure
    {
        return static function($value) : int {
            return count(preg_split('/\W+/u', $value, -1, PREG_SPLIT_NO_EMPTY));
        };
    }
}

<?php

namespace Manzadey\LaravelMacros\Str;

class CountLetters
{
    public const NAME = 'countLetters';

    public function __invoke() : \Closure
    {
        return static function($value) : int {
            return strlen(utf8_decode($value));
        };
    }
}

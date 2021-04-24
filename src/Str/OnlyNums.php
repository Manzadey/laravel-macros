<?php

namespace Manzadey\LaravelMacros\Str;

class OnlyNums
{
    public const NAME = 'onlyNums';

    public function __invoke() : \Closure
    {
        return static function($value) : int {
          return (int) preg_replace('/[\D]/', '', $value);
        };
    }
}

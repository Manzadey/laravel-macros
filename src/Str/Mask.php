<?php

namespace Manzadey\LaravelMacros\Str;

class Mask
{
    public const NAME = 'mask';

    public function __invoke() : \Closure
    {
        return function($pattern, $replacement, $value) : string {
            return preg_replace($pattern, $replacement, $value);
        };
    }
}

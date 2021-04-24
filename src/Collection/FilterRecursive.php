<?php

namespace Manzadey\LaravelMacros\Collection;

class FilterRecursive
{
    public const NAME = 'filterRecursive';

    public function __invoke() : \Closure
    {
        return function() {
            /* @var \Illuminate\Support\Collection $this */
            return $this->filter();
        };
    }
}

<?php

namespace Manzadey\LaravelMacros\Blueprint;

class Active
{
    public const NAME = 'active';

    public function __invoke() : \Closure
    {
        return function(string $name = 'active') {
            /* @var \Illuminate\Database\Schema\Blueprint $this */

            $this->boolean($name);
        };
    }
}

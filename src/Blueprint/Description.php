<?php

namespace Manzadey\LaravelMacros\Blueprint;

class Description
{
    public function __invoke() : \Closure
    {
        return function(string $name = 'description') {
            /* @var \Illuminate\Database\Schema\Blueprint $this */

            return $this->text($name);
        };
    }
}

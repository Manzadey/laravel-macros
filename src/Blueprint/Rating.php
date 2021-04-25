<?php

namespace Manzadey\LaravelMacros\Blueprint;

class Rating
{
    public function __invoke() : \Closure
    {
        return function(string $name = 'rating') {
            /* @var \Illuminate\Database\Schema\Blueprint $this */

            return $this->unsignedBigInteger($name)->default(0);
        };
    }
}

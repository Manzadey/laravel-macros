<?php

namespace Manzadey\LaravelMacros\Blueprint;

class Slug
{
    public function __invoke() : \Closure
    {
        return function() {
            /* @var \Illuminate\Database\Schema\Blueprint $this */

            $this->string('slug');
        };
    }
}

<?php

namespace Manzadey\LaravelMacros;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Manzadey\LaravelMacros\Collection\FilterRecursive;
use Manzadey\LaravelMacros\Str\CountLetters;
use Manzadey\LaravelMacros\Str\CountWords;
use Manzadey\LaravelMacros\Str\Declination;
use Manzadey\LaravelMacros\Str\DeclinationRuble;
use Manzadey\LaravelMacros\Str\Mask;
use Manzadey\LaravelMacros\Str\OnlyNums;
use Manzadey\LaravelMacros\Str\UcFirst;
use Manzadey\LaravelMacros\Str\YoutubeCodeFromUrl;

class MacrosServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        $this->inject($this->strMacros());
    }

    private function inject(array $macros) : void
    {
        Collection::make($macros)
            ->reject(static fn($class, $macro) => Str::hasMacro($macro))
            ->each(static fn($class, $macro) => Str::macro($macro, app($class)()));
    }

    private function strMacros() : array
    {
        return [
            Declination::NAME        => Declination::class,
            DeclinationRuble::NAME   => DeclinationRuble::class,
            YoutubeCodeFromUrl::NAME => YoutubeCodeFromUrl::class,
            OnlyNums::NAME           => OnlyNums::class,
            CountLetters::NAME       => CountLetters::class,
            CountWords::NAME         => CountWords::class,
            Mask::NAME               => Mask::class,
        ];
    }
}

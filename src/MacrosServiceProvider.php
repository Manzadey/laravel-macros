<?php

namespace Manzadey\LaravelMacros;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Manzadey\LaravelMacros\Blueprint\Active;
use Manzadey\LaravelMacros\Blueprint\Description;
use Manzadey\LaravelMacros\Blueprint\Rating;
use Manzadey\LaravelMacros\Blueprint\Slug;
use Manzadey\LaravelMacros\Str\CountLetters;
use Manzadey\LaravelMacros\Str\CountWords;
use Manzadey\LaravelMacros\Str\Declination;
use Manzadey\LaravelMacros\Str\DeclinationRuble;
use Manzadey\LaravelMacros\Str\Mask;
use Manzadey\LaravelMacros\Str\OnlyNums;
use Manzadey\LaravelMacros\Str\YoutubeCodeFromUrl;

class MacrosServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        $this->inject($this->strMacros(), Str::class);
        $this->inject($this->blueprintMacros(), Blueprint::class);
    }

    private function inject(array $macros, string $class) : void
    {
        Collection::make($macros)
            ->reject(static fn($macro) => $class::hasMacro(lcfirst(class_basename($macro))))
            ->each(static fn($macro) => $class::macro(lcfirst(class_basename($macro)), app($macro)()));
    }

    private function strMacros() : array
    {
        return [
            Declination::class,
            DeclinationRuble::class,
            YoutubeCodeFromUrl::class,
            OnlyNums::class,
            CountLetters::class,
            CountWords::class,
            Mask::class,
        ];
    }

    private function blueprintMacros() : array
    {
        return [
            Active::class,
            Rating::class,
            Slug::class,
            Description::class,
        ];
    }
}

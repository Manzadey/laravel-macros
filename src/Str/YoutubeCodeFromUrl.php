<?php

namespace Manzadey\LaravelMacros\Str;

class YoutubeCodeFromUrl
{
    public const NAME = 'youtubeCodeFromUrl';

    public function __invoke() : \Closure
    {
        return static function(string $url) : string {
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);

            if(isset($match[1])) {
                return $match[1];
            }

            return $url;
        };
    }
}

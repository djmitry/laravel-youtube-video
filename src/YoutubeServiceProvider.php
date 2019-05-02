<?php

namespace Djmitry\Youtube;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class YoutubeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('youtube', function($expression) {
            return '<iframe width="560" height="315" src="' . $expression . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        });
    }   
}
<?php
namespace Xiaj\LaravelSeafile\Facades;

use Illuminate\Support\Facades\Facade;

class Seafile extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-seafile';
    }
}
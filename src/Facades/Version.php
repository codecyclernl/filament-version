<?php

namespace Codecycler\FilamentVersion\Facades;

use Codecycler\FilamentVersion\VersionManager;
use Illuminate\Support\Facades\Facade;

class Version extends Facade
{
    protected static function getFacadeAccessor()
    {
        return VersionManager::class;
    }
}
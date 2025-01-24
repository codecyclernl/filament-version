<?php

namespace Codecycler\FilamentVersion;

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\ServiceProvider;

class VersionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'version');

        $this->mergeConfigFrom(__DIR__ . '/../config/version.php', 'version');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'version');

        $this->app->singleton(VersionManager::class, fn () => new VersionManager());
    }

    public function boot()
    {
        Filament::serving(function () {
            FilamentView::registerRenderHook(PanelsRenderHook::AUTH_LOGIN_FORM_AFTER, fn () => view('version::components.login-version'));
        });
    }
}

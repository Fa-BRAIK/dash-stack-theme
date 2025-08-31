<?php

namespace Nuxtifyts\DashStackTheme\Support\Assets;

use Illuminate\Support\Facades\Route;
use Nuxtifyts\DashStackTheme\Http\Controllers\AssetsController;

readonly class Manager
{
    public function boot(): void
    {
        $this->registerRoutes();
    }

    protected function registerRoutes(): void
    {
        Route::prefix('_filament-dash-stack-theme')->group(static function (): void {
            Route::get('assets/{fileName}', AssetsController::class)
                ->name('filament-dash-stack-theme.assets');
        });
    }
}

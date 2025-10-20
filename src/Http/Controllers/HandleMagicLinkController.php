<?php

namespace Seeders\FilamentPasswordless\Http\Controllers;

use Seeders\FilamentPasswordless\FilamentPasswordlessPlugin;
use Filament\Facades\Filament;
use Filament\Auth\Http\Responses\Contracts\LoginResponse;
use Illuminate\Routing\Controller;

class HandleMagicLinkController extends Controller
{
    public function __invoke(string $key, bool $remember = false): LoginResponse
    {
        $model = app(FilamentPasswordlessPlugin::class)->getModelByRouteKey($key);

        Filament::auth()->login($model, $remember);

        return app(LoginResponse::class);
    }
}

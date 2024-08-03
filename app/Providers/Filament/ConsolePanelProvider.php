<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Firefly\FilamentBlog\Blog;
use Awcodes\Curator\CuratorPlugin;
use Filament\Support\Colors\Color;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Joaopaulolndev\FilamentGeneralSettings\FilamentGeneralSettingsPlugin;

class ConsolePanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('console')
            ->path('console')
            ->brandLogo(asset('images/radgifts-logo.svg'))
            ->brandLogoHeight('4rem')
            ->favicon(asset('images/icons/favicon.png'))
            ->login()
            ->colors([
                'primary' => Color::rgb('rgb(78,62,99)'),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class
            ])
            ->plugins([
                FilamentShieldPlugin::make(),
                FilamentGeneralSettingsPlugin::make()
                    ->canAccess(fn() => auth()->user()->id === 1)
                    ->setSort(2)
                    ->setIcon('heroicon-o-cog')
                    ->setNavigationGroup('Settings')
                    ->setTitle('General Settings')
                    ->setNavigationLabel('General Settings'),
                Blog::make(),
                CuratorPlugin::make()
                    ->label('Upload Images')
                    ->pluralLabel('Upload Images')
                    ->navigationIcon('heroicon-o-photo')
                    ->navigationGroup('Manage Media')
                    ->navigationCountBadge()
                    ->navigationSort(2)
                    /*
                    ->registerNavigation(false)
                    ->defaultListView('grid' || 'list')
                    ->resource(\App\Filament\Resources\CustomMediaResource::class) */
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->viteTheme('resources/css/filament/console/theme.css');
    }
}

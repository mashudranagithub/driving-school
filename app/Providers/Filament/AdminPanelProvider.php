<?php

namespace App\Providers\Filament;

use App\Filament\Resources\AboutFeatureResource;
use App\Filament\Resources\AboutResource;
use App\Filament\Resources\BookingResource;
use App\Filament\Resources\GalleryResource;
use App\Filament\Resources\PackageResource;
use App\Filament\Resources\ReviewResource;
use App\Filament\Resources\ServiceResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->maxContentWidth(null) // REMOVE width limit
            ->id('admin')
            ->path('admin')
            ->resources([
                \App\Filament\Resources\PackageResource::class,
                \App\Filament\Resources\ServiceResource::class,
                \App\Filament\Resources\GalleryResource::class,
                \App\Filament\Resources\BookingResource::class,
                \App\Filament\Resources\GalleryResource::class,
                \App\Filament\Resources\ReviewResource::class,
                \App\Filament\Resources\AboutResource::class,
                \App\Filament\Resources\AboutFeatureResource::class,
            ])
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
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
            ]);
    }

    public function navigation(NavigationBuilder $builder): NavigationBuilder
    {
        return $builder
            ->groups([
                NavigationGroup::make()
                    ->label('Website Content')
                    ->items([
                        AboutResource::getNavigationItem(),
                        AboutFeatureResource::getNavigationItem(),
                        PackageResource::getNavigationItem(),
                        ServiceResource::getNavigationItem(),
                        BookingResource::getNavigationItem(),
                        GalleryResource::getNavigationItem(),
                        ReviewResource::getNavigationItem(),
                    ]),
            ]);
    }


}

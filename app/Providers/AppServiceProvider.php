<?php

namespace App\Providers;

use App\Http\Controllers\FarmController;
use App\Interfaces\Factories\AnimalFactoryInterface;
use App\Interfaces\Factories\ProductSingletonFactoryInterface;
use App\Interfaces\FarmInterface;
use App\Interfaces\Services\AnimalServiceInterface;
use App\Interfaces\Services\FarmServiceInterface;
use App\Interfaces\Services\ProductServiceInterface;
use App\Models\Animals\AnimalFactory;
use App\Models\Farm;
use App\Models\Products\Egg;
use App\Models\Products\Milk;
use App\Models\Products\ProductSingletonFactory;
use App\Services\AnimalService;
use App\Services\FarmService;
use App\Services\ProductService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Egg::class);
        $this->app->singleton(Milk::class);

        $this->app->when(FarmController::class)
            ->needs(FarmServiceInterface::class)
            ->give(FarmService::class);

        $this->app->when(FarmService::class)
            ->needs(FarmInterface::class)
            ->give(Farm::class);

        $this->app->when(FarmService::class)
            ->needs(AnimalServiceInterface::class)
            ->give(AnimalService::class);

        $this->app->when(FarmService::class)
            ->needs(ProductServiceInterface::class)
            ->give(ProductService::class);

        $this->app->when(AnimalService::class)
            ->needs(AnimalFactoryInterface::class)
            ->give(AnimalFactory::class);

        $this->app->when(ProductService::class)
            ->needs(ProductSingletonFactoryInterface::class)
            ->give(ProductSingletonFactory::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

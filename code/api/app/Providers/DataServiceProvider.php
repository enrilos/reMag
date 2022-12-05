<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Contracts\Services\Data\IProductService;
use App\Services\Data\ProductService;

class DataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IProductService::class, ProductService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

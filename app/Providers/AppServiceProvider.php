<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //supports the schema in the boot function
//use Illuminate\Http\Resources\Json\Resource; //supports Resource::withoutWrapping
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // creates default length for fields like email
        //prevents length error from happening


             /*this help remove the default "Data" 
            object in jso data returned when an api requst is made
            */
            // Resource::withoutWrapping();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

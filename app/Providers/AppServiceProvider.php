<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // \Validator::extend('cpf', function ($attribute, $value, $parameters, $validator) {
        //     return (new Cpf())->isValid($value);
        //   });
    }
}

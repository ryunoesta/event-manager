<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('validateChar', function ($attribute, $value, $parameters, $validator) {
            // バリデーションロジックをここに記述
            // バリデーションが成功した場合は true、それ以外は false を返す
        });
    }
}

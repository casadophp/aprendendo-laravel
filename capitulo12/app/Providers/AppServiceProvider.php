<?php

namespace App\Providers;

use App\Validators\MeuValidator;
use Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->validator->resolver(function($translator, $data, $rules, $messages) {
            return new MeuValidator($translator, $data, $rules, $messages);
        });
    }

    public function register()
    {

    }
}

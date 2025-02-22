<?php

namespace App\Providers;

use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserService::class, function ($app){
            $users = [
                [
                    'name' => 'John Doe',
                    'gender' => 'Male'
                ],
                [
                    'name' => 'Jane Doe',
                    'gender' => 'Female'
                ]
            ];
            return new UserService($users);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

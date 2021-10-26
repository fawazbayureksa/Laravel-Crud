<?php

namespace App\Providers;
use App\Policies\PostPolicy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
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
        // $this->registerPolicies();

        Gate::define('isAdmin', function ($user){
            return $user->role == 'admin';
        });
        Gate::define('isSiswa', function ($user){
            return $user->role == 'siswa';
        });
        Gate::define('isAdminSiswa', function ($user){
            return $user->role == 'siswa' or 'admin';
        });

    }
}

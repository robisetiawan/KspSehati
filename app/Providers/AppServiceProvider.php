<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\User;
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
        Blade::directive('currency', function ($expression) {
            return "Rp. <?php echo number_format($expression,0,',','.'); ?>";
        });

        Gate::define('fo', function (User $user) {
            return $user->roles === 'FO';
        });
        Gate::define('anggota', function (User $user) {
            return $user->roles === 'Anggota';
        });
        Gate::define('bm', function (User $user) {
            return $user->roles === 'BM';
        });
    }
}

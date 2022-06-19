<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Definiranje vlastitih vrata (Gate)

        Gate::define('logged-in', function ($user) {
            return $user;
        });

        Gate::define('is-admin', function ($user) {
            return $user->hasAnyRole('Admin');
            // return $user->hasAnyRole(['Admin', 'Moderator']); // Ako želimo da imaju iste role
        });

        Gate::define('is-super-admin', function ($user) {
            return $user->hasAnyRole('Super Admin');
        });
    }
}

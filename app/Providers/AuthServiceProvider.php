<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
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
        Gate::define("Admin", function(User $user){
            return $user->hasRole("Admin");
        });

        Gate::define("Manager", function(User $user){
            return $user->hasRole("Manager");
        });

        Gate::define("Employe", function(User $user){
            return $user->hasRole("Employe");
        });

        Gate::after(function (User $user) {
            return $user->hasRole("Super Admin");
        });
    }
}

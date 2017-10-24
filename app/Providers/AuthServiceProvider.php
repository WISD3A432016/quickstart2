<?php

namespace App\Providers;

use App\Policies\TaskPolicy;
use App\Task;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * 應用程式的原則對應。
     *
     * @var array
     */
    protected $policies = [
        Task::class => TaskPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}

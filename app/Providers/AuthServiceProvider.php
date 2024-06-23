<?php

namespace App\Providers;
use App\Policies\PemilihPolicy;
use App\Policies\KematianPolicy;
use App\Models\Pemilih;
use App\Models\Kematian;



// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Pemilih::class => PemilihPolicy::class,
       
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

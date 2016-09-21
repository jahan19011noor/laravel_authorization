<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Porducts' => 'App\Policies\ProductPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //define a gate called “show-product”
        //which has a call back function
        //having arguments of “user” and “product”
        //if the “users->id” does not match the “product->supplier_id”
        //then the entry is restricted

        $gate->define('show-product', function($user, $product){
            return $user->id == $product->supplier_id;
        });
        
        $gate->define('policy_for_product', function($user, $product){
            return $user->id == $product->supplier_id;
        });

    }
}

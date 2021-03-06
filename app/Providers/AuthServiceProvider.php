<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Recipe' => 'App\Policies\RecipePolicy',
        'App\RecipeCategory' => 'App\Policies\RecipeCategoryPolicy',
        'App\Ingredient' => 'App\Policies\IngredientPolicy',
        'App\Measurement' => 'App\Policies\MeasurementPolicy',

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

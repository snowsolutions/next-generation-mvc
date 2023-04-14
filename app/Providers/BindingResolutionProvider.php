<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BindingResolutionProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        /**
         * Resolve all contracts / interfaces with concrete implementations here
         */

        /**
         * Load all *.php files from ./BindingResolution and merge into a single array
         */
        $contextualBindingMap = [];

        foreach ($contextualBindingMap as $contextClass => $binding) {
            $interface = array_key_first($binding);
            $concreteClass = $binding[$interface];
            app()->when($contextClass)->needs($interface)->give($concreteClass);
        }

        /**
         * Load all *.php files from ./BindingResolution/NonContextual/Instance and merge into a single array
         */
        $nonContextualBindingMap = [];

        foreach ($nonContextualBindingMap as $interface => $concreteClass) {
            app()->bind($interface, $contextClass);
        }

        /**
         * Load all *.php files from ./BindingResolution/NonContextual/Singleton and merge into a single array
         */
        $singletonBindingMap = [];

        foreach ($singletonBindingMap as $interface => $concreteClass) {
            app()->singleton($interface, $contextClass);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace Shopex\CrudGenerator;

use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(){

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'Shopex\CrudGenerator\Commands\CrudCommand',
            'Shopex\CrudGenerator\Commands\CrudControllerCommand',
            'Shopex\CrudGenerator\Commands\CrudModelCommand',
            'Shopex\CrudGenerator\Commands\CrudMigrationCommand',
            'Shopex\CrudGenerator\Commands\CrudViewCommand',
            'Shopex\CrudGenerator\Commands\CrudLangCommand'
        );
    }
}

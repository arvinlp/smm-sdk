<?php
/*
 * @Author: arvinlp 
 * @Date: 2022-03-28 17:44:38 
 * Copyright by Arvin Loripour 
 * WebSite : http://www.arvinlp.ir 
 * @Last Modified by:   Arvin.Loripour 
 * @Last Modified time: 2022-03-28 17:44:38 
 */

namespace Arvinlp\SmmSDK;

use Arvinlp\SmmSDK\ISmmSDK\ISmmSDK;
use Illuminate\Support\ServiceProvider;

/**
 * Class AdminPanelServiceProvider.
 */
class SmmSDKServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    //    protected $defer = true;

    public function boot()
    {
        $this->publishes(
            [__DIR__.'/config/smm_api.php' => config_path('smm_api.php')], 'config'
        );
    }

    public function register()
    {
        $this->app->singleton(ISmmSDK::class, function ($app) {
            return new SmmSDK(config('smm_api.key'),config('smm_api.url'));
        });
    }
}

<?php
namespace Metamorphosis;

use Illuminate\Support\ServiceProvider;

class MetamorphosisServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/kafka.php' => config_path('kafka.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__.'/../config/kafka.php', 'kafka');
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: brian@brokerbin.com
 * Date: 6/8/16
 * Time: 1:59 PM
 * License: The MIT License (MIT)
 * Copyright: (c) <Broker Exchange Network>
 */
namespace ElasticQueue;

use Illuminate\Queue\QueueManager;
use Illuminate\Support\ServiceProvider;

class ElasticQueueServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //extend queue to add elasticsearch driver
        resolve(QueueManager::class)->extend('elasticsearch', function() {
            return new ElasticsearchConnector(config('queue.connections.elasticsearch'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

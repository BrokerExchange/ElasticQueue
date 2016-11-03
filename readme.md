# ElasticQueue
Laravel Queue Driver for Elasticsearch

## License
ElasticQueue is released under the MIT Open Source License, <https://opensource.org/licenses/MIT>

## Copyright
ElasticQueue &copy; Broker Exchange Network

## Installation
1) `composer require brokerexchange\elasticqueue`
2) Add `ElasticQueue\ElasticQueueServiceProvider::class,` to config/app.php
3) Add to config/queue.php 

```php
        'elasticsearch' => [
            'driver' => 'elasticsearch',
            'host' => explode(',',env('ELASTICSEARCH_HOST','localhost:9200')),
            'index' => 'jobs',
            'queue' => 'default',
            'retry_after' => 60,
        ],
```

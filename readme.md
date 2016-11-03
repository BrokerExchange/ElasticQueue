[![Latest Stable Version](https://poser.pugx.org/brokerexchange/elasticqueue/v/stable)](https://packagist.org/packages/brokerexchange/elasticqueue)
[![Latest Unstable Version](https://poser.pugx.org/brokerexchange/elasticqueue/v/unstable)](https://packagist.org/packages/brokerexchange/elasticqueue)
[![Total Downloads](https://poser.pugx.org/brokerexchange/elasticqueue/downloads)](https://packagist.org/packages/brokerexchange/elasticqueue)
[![License](https://poser.pugx.org/brokerexchange/elasticqueue/license)](https://packagist.org/packages/brokerexchange/elasticqueue)
[![composer.lock](https://poser.pugx.org/brokerexchange/elasticqueue/composerlock)](https://packagist.org/packages/brokerexchange/elasticqueue)

# ElasticQueue
Laravel Queue Driver for Elasticsearch

## License
ElasticQueue is released under the MIT Open Source License, <https://opensource.org/licenses/MIT>

## Copyright
ElasticQueue &copy; Broker Exchange Network

## Installation
 * run command `composer require brokerexchange\elasticqueue`
 * Add `ElasticQueue\ElasticQueueServiceProvider::class,` to config/app.php
 * Add to config/queue.php 

```php
        'elasticsearch' => [
            'driver' => 'elasticsearch',
            'host' => explode(',',env('ELASTICSEARCH_HOST','localhost:9200')),
            'index' => 'jobs',
            'queue' => 'default',
            'retry_after' => 60,
        ],
```

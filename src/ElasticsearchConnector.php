<?php
/**
 * Created by PhpStorm.
 * User: bmix
 * Date: 11/2/16
 * Time: 8:20 PM
 */

namespace ElasticQueue;

use Illuminate\Queue\Connectors\ConnectorInterface;
use Illuminate\Support\Arr;
use Elasticsearch;

class ElasticsearchConnector implements ConnectorInterface
{
    /**
     * Establish a queue connection.
     *
     * @param  array  $config
     * @return \Illuminate\Contracts\Queue\Queue
     */
    public function connect(array $config)
    {
        $client = Elasticsearch\ClientBuilder::create()->setHosts(Arr::get($config, 'host', ['localhost:9200']))->build();

        return new ElasticsearchQueue(
            $client,
            Arr::get($config, 'index', 'jobs'),
            Arr::get($config, 'queue', 'default'),
            Arr::get($config, 'retry_after', 60)
        );
    }
}

<?php namespace Search;

use Illuminate\Support\Manager;
use Elasticsearch\Client as ElasticsearchClient;

class SearchManager extends Manager {

    /**
     * Create an instance of the Elasticsearch driver.
     *
     * @return void
     */
    protected function createElasticsearchDriver()
    {
        $elasticsearch = new ElasticsearchClient;

        return new ElasticsearchSearch($elasticsearch);
    }

    /**
     * Get the search connection configuration.
     *
     * @param  string  $name
     * @return array
     */
    protected function getConfig($name)
    {
        return $this->app['config']["search.connections.{$name}"];
    }

    /**
     * Get the default search driver name.
     *
     * @return void
     */
    public function getDefaultDriver()
    {
        return $this->app['config']['search.default'];
    }

}
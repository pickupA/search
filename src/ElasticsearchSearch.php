<?php namespace Search;

use Elasticsearch\Client as ElasticsearchClient;

class ElasticsearchSearch extends Search implements SearchInterface {

    /**
     * Elasticsearch instance.
     *
     * @var Elasticsearch\Client
     */
    protected $elasticsearch;

    /**
     * Create a new Elasticsearch instance.
     *
     * @param  \Elasticsearch\Client  $elasticsearch
     * @return \Search\ElasticsearchSearch
     */
    public function __construct(ElasticsearchClient $elasticsearch)
    {
        $this->elasticsearch = $elasticsearch;
    }

}
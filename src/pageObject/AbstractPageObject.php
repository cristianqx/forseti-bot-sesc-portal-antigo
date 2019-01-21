<?php

namespace Forseti\Bot\Sesc\pageObject;
use GuzzleHttp\Client;

abstract class AbstractPageObject

{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
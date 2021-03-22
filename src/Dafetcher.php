<?php
namespace Apsg\Dafetcher;

use Psr\Http\Client\ClientInterface;

class Dafetcher
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function fetch()
    {
    }
}

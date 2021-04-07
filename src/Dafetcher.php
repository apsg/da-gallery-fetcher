<?php
namespace Apsg\Dafetcher;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use kamermans\OAuth2\GrantType\ClientCredentials;
use kamermans\OAuth2\OAuth2Middleware;

class Dafetcher
{
    const PER_PAGE = 24;
    const GALLERY_URL = 'https://www.deviantart.com/api/v1/oauth2/gallery/all';

    const FILTER_OUT_CATEGORIES = [
        'apps',
    ];

    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /** @var string */
    protected $username;

    public function __construct()
    {
        $this->username = config('dafetcher.username');

        $reauth_client = new Client([
            'base_uri' => config('dafetcher.oauth.token_url'),
        ]);
        $reauth_config = [
            "client_id"     => config('dafetcher.oauth.client_id'),
            "client_secret" => config('dafetcher.oauth.secret'),
        ];
        $grant_type = new ClientCredentials($reauth_client, $reauth_config);
        $oauth = new OAuth2Middleware($grant_type);

        $stack = HandlerStack::create();
        $stack->push($oauth);

        $this->client = new Client([
            'handler' => $stack,
            'auth'    => 'oauth',
        ]);
    }

    public function forUser(string $username) : self
    {
        $this->username = $username;

        return $this;
    }

    public function fetch(int $page = 1) : array
    {
        $data = json_decode($this->client->get('https://www.deviantart.com/api/v1/oauth2/gallery/all', [
            'query' => $this->buildQuery($page),
        ])->getBody()->getContents());

        return $this->filterResults(object_get($data, 'results', []));
    }

    protected function buildQuery(int $page)
    {
        return [
            'username' => $this->username,
            'limit'    => static::PER_PAGE,
            'offset'   => ($page - 1) * static::PER_PAGE,
        ];
    }

    protected function filterResults(array $data) : array
    {
        return array_filter($data, function ($item) {
            return !in_array($item->category_path, static::FILTER_OUT_CATEGORIES);
        });
    }
}

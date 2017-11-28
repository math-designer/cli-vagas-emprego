<?php

namespace App\Repositories;

use App\Vaga;
use GuzzleHttp\Client;

class VagasRepositoryWS implements VagasRepositoryInterface
{
    private $clientApi;
    private $responseBody;

    public function __construct()
    {
        $this->clientApi = new Client(['base_uri' => 'http://localhost:1010/api/']);
    }

    public function getAll()
    {
        $response = $this->clientApi->request('get', 'vagas');
        return $this->makeDataModel($this->decodeResponseBody($response)['data']);
    }

    public function create($data)
    {
        $response = $this->clientApi->request('post', 'vagas', [\GuzzleHttp\RequestOptions::JSON => $data]);
        return $this->decodeResponseBody($response);
    }

    public function getByField($field, $value)
    {
        // TODO: Implement getByField() method.
    }

    private function makeDataModel($data)
    {
        return Vaga::hydrate($data);
    }

    private function decodeResponseBody($response)
    {
        $body = $response->getBody()->getContents();
        return \GuzzleHttp\json_decode($body, true);
    }
}
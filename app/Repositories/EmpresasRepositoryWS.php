<?php

namespace App\Repositories;

use App\Empresa;
use GuzzleHttp\Client;

class EmpresasRepositoryWS implements EmpresasRepositoryInterface
{
    private $clientApi;

    public function __construct()
    {
        $this->clientApi = new Client(['base_uri' => 'http://localhost:1011/api/']);
    }

    public function getAll()
    {
        $response = $this->clientApi->request('get', 'empresas');
        return $this->makeDataModel($this->decodeResponseBody($response)['data']);
    }

    public function create($data)
    {
        $response = $this->clientApi->request('post', 'empresas', [\GuzzleHttp\RequestOptions::JSON => $data]);
        return $this->decodeResponseBody($response);
    }

    public function getByField($field, $value)
    {
        // TODO: Implement getByField() method.
    }

    private function makeDataModel($data)
    {
        return Empresa::hydrate($data);
    }

    private function decodeResponseBody($response)
    {
        $body = $response->getBody()->getContents();
        return \GuzzleHttp\json_decode($body, true);
    }
}
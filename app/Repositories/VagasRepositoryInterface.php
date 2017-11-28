<?php

namespace App\Repositories;

interface VagasRepositoryInterface
{
    public function getAll();

    public function create($data);

    public function getByField($field, $value);
}
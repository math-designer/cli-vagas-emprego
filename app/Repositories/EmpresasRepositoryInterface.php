<?php

namespace App\Repositories;

interface EmpresasRepositoryInterface
{
    public function getAll();

    public function create($data);

    public function getByField($field, $value);
}
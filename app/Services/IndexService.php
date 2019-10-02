<?php

namespace App\Services;

use App\Repositories\IndexRepository;

class IndexService
{
    public function __construct(IndexRepository $repository)
    {
        $this->repository = $repository;
    }

    public function sayHello()
    {
        return $this->repository->getFirstUserName();
    }
}

<?php

namespace Domains\Authentication\Tasks;

use Domains\Authentication\Data\Repositories\Interface\UserRepositoryInterface;
use Domains\Shared\Tasks\Tasks;

class UserRegisterTask extends Tasks
{
    protected $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function run($data)
    {
        return $this->repository->create($data);
    }
}

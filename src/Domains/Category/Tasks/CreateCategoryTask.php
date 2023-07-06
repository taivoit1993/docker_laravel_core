<?php
namespace Domains\Category\Tasks;

use Domains\Category\Data\Repositories\Interface\CategoryRepositoryInterface;
use Domains\Shared\Actions\Action;

class CreateCategoryTask extends Action
{
    protected $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data = [])
    {
        $this->repository->create($data);
    }
}

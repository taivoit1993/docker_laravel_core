<?php
namespace Domains\Category\Data\Repositories\Implement;
use Domains\Category\Data\Repositories\Interface\CategoryRepositoryInterface;
use Domains\Category\Models\Category;
use Domains\Shared\Data\Repositories\Implement\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface {

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Category::class;
    }
}

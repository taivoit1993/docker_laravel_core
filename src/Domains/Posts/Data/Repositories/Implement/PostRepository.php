<?php

namespace Domains\Posts\Data\Repositories\Implement;

use Domains\Authentication\Data\Repositories\Interface\UserRepositoryInterface;
use Domains\Authentication\Models\Users;
use Domains\Shared\Data\Repositories\Implement\BaseRepository;

class PostRepository extends BaseRepository implements UserRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Post::class;
    }
}

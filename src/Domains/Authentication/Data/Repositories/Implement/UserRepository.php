<?php
namespace Domains\Authentication\Data\Repositories\Implement;
use Domains\Authentication\Data\Repositories\Interface\UserRepositoryInterface;
use Domains\Authentication\Models\Users;
use Domains\Shared\Data\Repositories\Implement\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Users::class;
    }
}

<?php namespace Lavoaster\LightBlog\User\Repositories\Eloquent;

use Lavoaster\LightBlog\User\Storage\UserInterface;
use Lavoaster\LightBlog\User\Repositories\UserRepositoryInterface;
use Lavoaster\LightBlog\User\Storage\Eloquent\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Create a user
     *
     * @param array $attributes
     * @return UserInterface
     */
    public function create(array $attributes)
    {
        $this->user->create($attributes);
    }

    /**
     * Find a user by their id
     *
     * @param int $id
     * @return UserInterface
     */
    public function find($id)
    {
        $this->user->find($id);
    }

    public function findByEmail($email)
    {
        $this->user->where('email', $email)->first();
    }

}
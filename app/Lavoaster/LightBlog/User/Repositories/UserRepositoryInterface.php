<?php namespace Lavoaster\LightBlog\User\Repositories;

use Lavoaster\LightBlog\User\Storage\UserInterface;

interface UserRepositoryInterface
{
    /**
     * Create a user
     *
     * @param array $attributes
     * @return UserInterface
     */
    public function create(array $attributes);

    /**
     * Find a user by their id
     *
     * @param int $id
     * @return UserInterface
     */
    public function find($id);
}
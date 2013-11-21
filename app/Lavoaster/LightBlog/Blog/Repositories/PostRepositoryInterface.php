<?php namespace Lavoaster\LightBlog\Blog\Repositories;

use Lavoaster\LightBlog\Blog\Storage\BlogPostInterface;
use Lavoaster\LightBlog\User\Storage\UserInterface;

interface PostRepositoryInterface
{
    /**
     * Create a blog post
     *
     * @param array $attributes
     * @param \Lavoaster\LightBlog\User\Storage\UserInterface $author
     * @return BlogPostInterface
     */
    public function create(array $attributes, UserInterface $author);

    /**
     * Find a blog post by its id
     *
     * @param int $id
     * @return BlogPostInterface
     */
    public function find($id);

    /**
     * Returns all posts
     *
     * @param string $order
     * @return BlogPostInterface[]
     */
    public function all($order = 'asc');
}
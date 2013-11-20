<?php namespace Lavoaster\LightBlog\Blog\Repositories;

use Lavoaster\LightBlog\Blog\Storage\BlogPostInterface;

interface PostRepositoryInterface
{
    /**
     * Create a blog post
     *
     * @param array $attributes
     * @return BlogPostInterface
     */
    public function create(array $attributes);

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
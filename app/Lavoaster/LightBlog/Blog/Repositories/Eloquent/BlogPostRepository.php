<?php namespace Lavoaster\LightBlog\Blog\Repositories\Eloquent;

use Lavoaster\LightBlog\Blog\Repositories\BlogPostRepositoryInterface;
use Lavoaster\LightBlog\Blog\Storage\BlogPostInterface;
use Lavoaster\LightBlog\Blog\Storage\Eloquent\BlogPost;

class BlogPostRepository implements BlogPostRepositoryInterface
{
    protected $post;

    public function __construct(BlogPost $post)
    {
        $this->post = $post;
    }

    /**
     * Create a blog post
     *
     * @param array $attributes
     * @return BlogPostInterface
     */
    public function create(array $attributes)
    {
        return $this->post->create($attributes);
    }

    /**
     * Find a blog post by its id
     *
     * @param int $id
     * @return BlogPostInterface
     */
    public function find($id)
    {
        return $this->post->find($id);
    }
}
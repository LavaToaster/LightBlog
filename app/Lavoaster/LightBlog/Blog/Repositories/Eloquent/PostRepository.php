<?php namespace Lavoaster\LightBlog\Blog\Repositories\Eloquent;

use Lavoaster\LightBlog\Blog\Repositories\PostRepositoryInterface;
use Lavoaster\LightBlog\Blog\Storage\BlogPostInterface;
use Lavoaster\LightBlog\Blog\Storage\Eloquent\Post;

class PostRepository implements PostRepositoryInterface
{
    protected $post;

    public function __construct(Post $post)
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

    /**
     * Returns all posts
     *
     * @return BlogPostInterface[]
     */
    public function all()
    {
        return $this->post->all();
    }


}
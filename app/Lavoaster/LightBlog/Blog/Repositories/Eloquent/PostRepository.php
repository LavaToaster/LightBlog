<?php namespace Lavoaster\LightBlog\Blog\Repositories\Eloquent;

use Lavoaster\LightBlog\Blog\Repositories\PostRepositoryInterface;
use Lavoaster\LightBlog\Blog\Storage\BlogPostInterface;
use Lavoaster\LightBlog\Blog\Storage\Eloquent\Post;
use Lavoaster\LightBlog\User\Storage\UserInterface;

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
     * @param \Lavoaster\LightBlog\User\Storage\UserInterface $author
     * @return BlogPostInterface
     */
    public function create(array $attributes, UserInterface $author)
    {
        return $this->post->create($attributes + ['user_id' => $author->getId()]);
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
     * @param string $order
     * @return BlogPostInterface[]
     */
    public function all($order = 'asc')
    {
        return $this->post->orderBy('published_at', $order)->get();
    }


}
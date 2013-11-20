<?php namespace Lavoaster\LightBlog\Blog\Controllers;

use Lavoaster\LightBlog\Blog\Repositories\PostRepositoryInterface;

class BlogController extends \BaseController
{

    protected $post;

    public function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $this->layout->content = \View::make('blogs.index')->with('posts', $this->post->all('desc'));
    }

}
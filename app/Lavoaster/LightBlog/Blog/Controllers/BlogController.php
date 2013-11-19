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
        //TODO
    }
}
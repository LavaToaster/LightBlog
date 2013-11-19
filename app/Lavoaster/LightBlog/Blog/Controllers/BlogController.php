<?php namespace Lavoaster\LightBlog\Blog\Controllers;

use Lavoaster\LightBlog\Blog\Repositories\PostRepositoryInterface;

class BlogController extends \BaseController
{

    protected $blogs;

    public function __construct(PostRepositoryInterface $blogs)
    {
        $this->blogs = $blogs;
    }

    public function index()
    {
        //TODO
    }
}
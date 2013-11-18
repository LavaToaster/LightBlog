<?php namespace Lavoaster\LightBlog\Blog\Controllers;

use Lavoaster\LightBlog\Blog\Repositories\BlogPostRepositoryInterface;

class BlogController extends \BaseController
{

    protected $blogs;

    public function __construct(BlogPostRepositoryInterface $blogs)
    {
        $this->blogs = $blogs;
    }

    public function index()
    {
        //TODO
    }
}
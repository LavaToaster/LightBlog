<?php namespace Lavoaster\LightBlog\Blog\Controllers;

use Lavoaster\LightBlog\Blog\Repositories\PostRepositoryInterface;

class PostController extends \BaseController
{

    protected $post;

    public function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }

    public function store()
    {
        $input = \Input::only('post-title', 'post-content');

        $post = $this->post->create([
            'title' => $input['post-title'],
            'content' => $input['post-content'],
            'published_at' => \Carbon\Carbon::now()
        ], \Auth::getUser());

        return \Response::json(['success' => true]);
    }
}
<?php namespace Lavoaster\LightBlog\Blog\Controllers;

use Lavoaster\LightBlog\Blog\Repositories\PostRepositoryInterface;
use Lavoaster\LightBlog\Blog\Helpers\SirTrevorHelper;


class PostController extends \BaseController
{

    protected $post;
    protected $sirTrevor;

    public function __construct(PostRepositoryInterface $post, SirTrevorHelper $sirTrevor)
    {
        $this->post = $post;
        $this->sirTrevor = $sirTrevor;
    }

    public function create()
    {
        return \View::make('blogs.create');
    }

    public function store()
    {
        $input = \Input::only('post-title', 'post-content');

        if(empty($input['post-title'])) {
            return \Response::json(['success' => false], 400);
        };

        if(empty($input['post-content'])) {
            return \Response::json(['success' => false], 400);
        };

        $post = $this->post->create([
            'title' => $input['post-title'],
            'content' => $input['post-content'],
            'published_at' => \Carbon\Carbon::now()
        ], \Auth::getUser());

        $this->sirTrevor->setContent($post->getContent());
        $post->setContent($this->sirTrevor->toHtml());

        return \Response::json([
            'success' => true,
            'html' => (string) \View::make('blogs.post')->with('post', $post)
        ]);
    }
}
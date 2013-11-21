<?php namespace Lavoaster\LightBlog\Blog\Controllers;

use Doctrine\DBAL\Platforms\PostgreSqlPlatform;
use Lavoaster\LightBlog\Blog\Helpers\SirTrevorHelper;
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
        $posts = $this->post->all('desc');
        $sirTrevor = new SirTrevorHelper(new \dflydev\markdown\MarkdownParser());

        foreach($posts as $post) {
            if (str_contains($post->getContent(), '{')) {
                $sirTrevor->setContent($post->getContent());
                $post->setContent($sirTrevor->toHtml());
            }
        }

        $this->layout->content = \View::make('blogs.index')->with('posts', $posts);
    }

}
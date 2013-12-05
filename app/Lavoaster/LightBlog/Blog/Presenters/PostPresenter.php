<?php namespace Lavoaster\LightBlog\Blog\Presenters;

use Lavoaster\LightBlog\Blog\Helpers\SirTrevorHelper;
use Lavoaster\LightBlog\Blog\Storage\PostInterface;
use McCool\LaravelAutoPresenter\BasePresenter;

class PostPresenter extends BasePresenter
{
    protected $sirTrevor;

    public function __construct(PostInterface $post, SirTrevorHelper $sirTrevor = null)
    {
        $this->resource = $post;
        $this->sirTrevor = $sirTrevor ?: \App::make('Lavoaster\LightBlog\Blog\Helpers\SirTrevorHelper');
    }

    public function getContent()
    {
        return $this->sirTrevor->render($this->resource->getContent());
    }
}
<?php namespace Lavoaster\LightBlog\Blog\Storage\Eloquent;

use Lavoaster\LightBlog\Blog\Storage\PostInterface;
use Lavoaster\LightBlog\User\Storage\UserInterface;

class Post extends \Eloquent implements PostInterface
{
    protected $guarded = [];

    public $presenter = 'Lavoaster\LightBlog\Blog\Presenters\PostPresenter';

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor(UserInterface $author)
    {
        $this->user_id = $author->getId();
    }

    public function getPublishDate()
    {
        return $this->published_at;
    }

    public function setPublishDate($date)
    {
        $this->published_at = $date;
    }

}
<?php namespace Lavoaster\LightBlog\Blog\Storage\Eloquent;

use Lavoaster\LightBlog\Blog\Storage\BlogPostInterface;

class Post extends \Eloquent implements BlogPostInterface
{
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

    public function setAuthor($author)
    {
        $this->author = $author;
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
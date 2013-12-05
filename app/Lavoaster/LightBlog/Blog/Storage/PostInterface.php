<?php namespace Lavoaster\LightBlog\Blog\Storage;

use Lavoaster\LightBlog\User\Storage\UserInterface;

interface PostInterface
{

    public function getId();

    public function getTitle();

    public function setTitle($title);

    public function getContent();

    public function setContent($content);

    public function getAuthor();

    public function setAuthor(UserInterface $author);

    public function getPublishDate();

    public function setPublishDate($date);

    public function save();

}
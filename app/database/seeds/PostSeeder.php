<?php

class PostSeeder extends DatabaseSeeder
{
    public function run()
    {
        $post = new \Lavoaster\LightBlog\Blog\Storage\Eloquent\Post;
        $post->setAuthor(\Lavoaster\LightBlog\User\Storage\Eloquent\User::find(1));
        $post->setTitle('Test Post');
        $post->setContent('Test test test test test test test test test test test test test test test test test');
        $post->setPublishDate(\Carbon\Carbon::now());
        $post->save();
    }
}
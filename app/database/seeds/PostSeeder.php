<?php

class PostSeeder extends DatabaseSeeder
{
    public function run()
    {
        $post = new \Lavoaster\LightBlog\Blog\Storage\Eloquent\Post;
        $post->setAuthor(\Lavoaster\LightBlog\User\Storage\Eloquent\User::find(1));
        $post->setTitle('Test Post');
        $post->setContent('{"data":[{"type":"text","data":{"text":"Test test test test test test test test test test test test test test test test test"}}]}');
        $post->setPublishDate(\Carbon\Carbon::yesterday());
        $post->save();

        $post = new \Lavoaster\LightBlog\Blog\Storage\Eloquent\Post;
        $post->setAuthor(\Lavoaster\LightBlog\User\Storage\Eloquent\User::find(1));
        $post->setTitle('Lorem Ipsum');
        $post->setContent('{"data":[{"type":"text","data":{"text":"Etiam aliquam sem ac velit feugiat elementum. Nunc eu elit velit, nec vestibulum nibh. Curabitur ultrices, diam non ullamcorper blandit, nunc lacus ornare nisi, egestas rutrum magna est id nunc. Pellentesque imperdiet malesuada quam, et rhoncus eros auctor eu. Nullam vehicula metus ac lacus rutrum nec fermentum urna congue. Vestibulum et risus at mi ultricies sagittis quis nec ligula. Suspendisse dignissim dignissim luctus. Duis ac dictum nibh. Etiam id massa magna. Morbi molestie posuere posuere.\n\n"}}]}');
        $post->setPublishDate(\Carbon\Carbon::now());
        $post->save();
    }
}
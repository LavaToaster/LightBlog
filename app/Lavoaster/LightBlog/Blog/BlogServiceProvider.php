<?php namespace Lavoaster\LightBlog\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{

    public function boot()
    {
        include __DIR__ . '/routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Lavoaster\LightBlog\Blog\Repositories\PostRepositoryInterface',
            'Lavoaster\LightBlog\Blog\Repositories\Eloquent\PostRepository'
        );

        $this->app->bind(
            'Lavoaster\LightBlog\Blog\Storage\PostInterface',
            'Lavoaster\LightBlog\Blog\Storage\Eloquent\Post'
        );
    }

}
<?php namespace Lavoaster\LightBlog\User;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
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
            'Lavoaster\LightBlog\User\Repositories\UserRepositoryInterface',
            'Lavoaster\LightBlog\User\Repositories\Eloquent\UserRepository'
        );

        $this->app->bind(
            'Lavoaster\LightBlog\User\Storage\UserInterface',
            'Lavoaster\LightBlog\User\Storage\Eloquent\User'
        );
    }

}
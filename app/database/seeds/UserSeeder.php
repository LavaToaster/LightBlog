<?php

class UserSeeder extends DatabaseSeeder {
    public function run()
    {
        $user = new \Lavoaster\LightBlog\User\Storage\Eloquent\User;
        $user->setEmail('adam@lavoaster.co.uk');
        $user->setPassword('test');
        $user->setName('Adam Lavin');
        $user->save();
    }
}
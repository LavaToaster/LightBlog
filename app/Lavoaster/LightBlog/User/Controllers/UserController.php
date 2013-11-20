<?php namespace Lavoaster\LightBlog\User\Controllers;

use Lavoaster\LightBlog\User\Repositories\UserRepositoryInterface;

class UserController extends \BaseController
{

    protected $user;

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function login()
    {
        // Login form
    }

    public function authenticate()
    {
        $validation = \Validator::make(\Input::input(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validation->fails()) {
            return [
                'success' => false,
                'errors' => $validation->errors()->toArray()
            ];
        }

        if(\Auth::attempt(['email' => \Input::input('email'), 'password' => \Input::input('password')], \Input::input('rememberme', false))) {
            return [
                'success' => true,
                'user' => \Auth::getUser()->toArray()
            ];
        }

        return [
            'success' => false,
            'errors' => [
                'wrong' => ['Whoops, looks like you\'ve a wrong email or password :(']
            ]
        ];
    }
}
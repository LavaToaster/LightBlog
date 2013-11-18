<?php namespace Lavoaster\LightBlog\User\Storage\Eloquent;

class User extends \Eloquent implements \Lavoaster\LightBlog\User\Storage\UserInterface
{

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = \Hash::make($password);
    }

    public function checkPassword($password)
    {
        return \Hash::check($password, $this->getPassword());
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function setName($name)
    {
        // TODO: Implement setName() method.
    }

    public function save()
    {
        // TODO: Implement save() method.
    }

}
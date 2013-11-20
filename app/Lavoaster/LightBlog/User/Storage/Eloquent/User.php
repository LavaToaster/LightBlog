<?php namespace Lavoaster\LightBlog\User\Storage\Eloquent;

class User extends \Eloquent implements \Lavoaster\LightBlog\User\Storage\UserInterface
{

    protected $hidden = ['password'];

    public function getId()
    {
        return $this->id;
    }

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
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return 'username';
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->getPassword();
    }
}

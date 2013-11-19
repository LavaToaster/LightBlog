<?php namespace Lavoaster\LightBlog\User\Storage;

interface UserInterface extends \Illuminate\Auth\UserInterface
{
    public function getId();

    public function getEmail();

    public function setEmail($email);

    public function getPassword();

    public function setPassword($password);

    public function checkPassword($password);

    public function getName();

    public function setName($name);

    public function save();
}
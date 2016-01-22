<?php declare(strict_types = 1);

/**
 * Created by PhpStorm.
 * User: Dominik
 */
class Blog
{
    private $name;
    private $owner;
    private $posts = [];

    public function __construct(String $name, User $owner) {
        $this->name = $name;
        $this->owner = $owner;
    }

    public function getName() {
        return $this->name;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function addPost($post)
    {
        array_push($this->posts, $post);
    }

    public function getPosts()
    {
        return $this->posts;
    }

}
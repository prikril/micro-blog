<?php

/**
 * Created by PhpStorm.
 * Date: 22.01.16
 * Time: 13:53
 */
class Post
{
    private $message;

    public function __construct(String $message)
    {
        if (strlen($message) > 80) {
            throw new InvalidArgumentException("Message must be smaller than 80 characters");
        }
        $this->message = $message;
    }

    public function getMessage() {
        return $this->message;
    }

}
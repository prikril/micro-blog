<?php

/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 23.10.2015
 * Time: 14:38
 */
class Article
{
    private $headline;
    private $body;
    private $tags = [];

    public function __construct(String $headline, String $body, $tags) {
        $this->headline = $headline;
        $this->body = $body;
        $this->tags = $tags;
    }

    public function headline() {
        return $this->headline();
    }

    public function body() {
        return $this->body;
    }

    public function tags() {
        return $this->tags;
    }
}
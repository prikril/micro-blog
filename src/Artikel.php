<?php

/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 27.11.2015
 * Time: 09:32
 */
class Artikel
{
    private $headline;
    private $body;
    private $tags;
    private $author;

    public function __construct($headline, $body, $tag) {
        $this->$headline = $headline;
        $this->$body = $body;
        $this->tags[] = $tag;
    }

    public function tags(): array {
        return $this->tags->getArray();
    }

    public function addTag(Tag $newTag) {
        bla?
    }
}
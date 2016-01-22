<?php

/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 23.10.2015
 * Time: 15:07
 */
class BlogRenderer
{
    private $blog;

    public function render() {
        $articles = $this->blog;
        foreach ($articles as $article) {
            var_dump($article);
        }
    }

}
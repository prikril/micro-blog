<?php

/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 27.11.2015
 * Time: 09:16
 */
 require(__DIR__ . "/../../Autoload.php");

$blogname = "Ein Blog";
$eigentuemer = new Benutzer("eigentuemer@blog.com");
$autor = new Benutzer("autor@blog.com");

$blog = new Blog($blogname, $eigentuemer);
$blog->artikelVeroeffentlichen($eigentuemer, createArtikel("Artikel 1"));
$blog->artikelVeroeffentlichen($autor, createArtikel("Artikel2"));

$renderer = new PlainTextBlogRenderer($blog);
$renderer->render();

function createArtikel($headline) {
    $tags = [createTag("X"), createTag("Y")];
    $body = createBody("bodytext...");
    $artikel = new Artikel($headline, $body);
    $artikel->addTag($tags[tand(0, 1)]);

    return $artikel;
}

function createBody($bodyText) {
    return new Body($bodyText);
}
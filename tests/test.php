<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 23.10.2015
 * Time: 14:36
 */
echo __DIR__;
require(__DIR__ . "/../src/Article.php");
require(__DIR__ . "/../src/Blog.php");
require(__DIR__ . "/../src/BlogRenderer.php");

$sampletags = array("news", "tech", "developer");
$sampletexts = array("text1", "text2", "text3");

echo "Starte generieren des Blogs \n";

$articles = [];

for ($i=0; $i < 5; $i++) {
    $tags = [];
    $tagcount = rand(1, 3);
    for ($t=0; $t<$tagcount; $t++) {
        array_push($tags, $sampletags[rand(0,2)]);
    };
    $body = $sampletexts[rand(0,2)];
    array_push($articles, new Article($i, $body, $tags));
}

$blog = new Blog("mein Blog", $articles);
$article = new Article("letzter Artikel", "lorem ipsum", "nichts");
$blog->addArticle($article);

var_dump($blog);
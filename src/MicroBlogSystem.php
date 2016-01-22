<?php declare(strict_types = 1);

/**
 * Created by PhpStorm.
 * User: Dominik
 */
class MicroBlogSystem
{
    private $blogs = [];


    public function addBlog($blog)
    {
        array_push($this->blogs, $blog);
    }

    public function getBlogsFromUser(User $user)
    {
        foreach($this->blogs as $blog) {
            /**
             * @var Blog $blog
             */
            if ($blog->getOwner() == $user) {
                return $blog;
            }
        }
    }

    public function getAllBlogs()
    {
        return $this->blogs;
    }

}
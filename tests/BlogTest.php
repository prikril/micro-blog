<?php
/**
 * @covers Blog
 * @uses User
 * @uses Post
 */

class BlogTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Blog
     */
    private $blog;

    /**
     * @var User
     */
    private $owner;

    /**
     * @var String
     */
    private $name;


    public function setUp()
    {
        $this->name = "meinBlog";
        $this->owner = new User("nick", "mail@mail.com");
        $this->blog = new Blog($this->name, $this->owner);
    }

    public function testNameCanBeRetrived() {
        $this->assertEquals($this->blog->getName(), $this->name);
    }

    public function testOwnerCanBeRetrived() {
        $this->assertEquals($this->blog->getOwner(), $this->owner);
    }

    public function testOwnerCanAddPost() {
        $post = new Post("testNachricht");
        $this->blog->addPost($post);
        $this->assertNotEmpty($this->blog->getPosts());
    }

}
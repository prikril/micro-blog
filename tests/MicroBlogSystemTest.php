<?php
/**
 * @covers MicroBlogSystem
 * @uses User
 * @uses Post
 * @uses Blog
 */

class MicroBlogSystemTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Blog
     */
    private $blog;

    /**
     * @var User
     */
    private $userA;

    /**
     * @var User
     */
    private $userB;

    /**
     * @var User
     */
    private $userC;

    /**
     * @var String
     */
    private $blogName;

    /**
     * @var MicroBlogSystem
     */
    private $blogSystem;


    public function setUp()
    {
        $this->blogName = "meinBlog";
        $this->userA = new User("nickA", "mail@mail.com");
        $this->userB = new User("nickB", "mail@mail.com");
        $this->userC = new User("nickC", "mail@mail.com");
        $this->blog = new Blog($this->blogName, $this->userA);
        $this->blogSystem = new MicroBlogSystem();
    }

    public function testCanAddBlog() {

        $this->blogSystem->addBlog($this->blog);
        $this->assertNotEmpty($this->blogSystem->getAllBlogs());
    }

    public function testCanRetriveBlogFromUser() {
        $blogB = new Blog("blogB", $this->userB);
        $this->blogSystem->addBlog($blogB);
        $returnedBlog = $this->blogSystem->getBlogsFromUser($this->userB);
        $this->assertEquals($returnedBlog, $blogB);
    }

}
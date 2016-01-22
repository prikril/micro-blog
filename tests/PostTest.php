<?php
/**
 * @covers Post
 */

class PostTest extends PHPUnit_Framework_TestCase
{
    public function testMessageCanBeRetrived() {
        $message = "Lorem Impsum";
        $post = new Post($message);
        $this->assertEquals($post->getMessage(), $message);
    }

    public function testMessageMustNotBeLong() {
        $message = "0123456789"; //10 characters
        $longMessage = "T";
        for ($i = 0; $i < 8; $i++) {
            $longMessage .= $message;
        }

        $this->setExpectedException(InvalidArgumentException::class, "Message must be smaller than 80 characters");
        $post = new Post($longMessage);
    }

}
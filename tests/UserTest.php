<?php
/**
 * @covers User
 */

class UserTest extends PHPUnit_Framework_TestCase
{
    public function testNicknameCanBeRetrived() {
        $nickname = "nick";
        $user = new User($nickname, "mail@mail.com");
        $this->assertTrue($user->getNickname() == $nickname);
    }

    public function testMailAddressCanBeRetrived() {
        $mailAddress = "mail@mail.com";
        $user = new User("nick", $mailAddress);
        $this->assertTrue($user->getMailAddress() == $mailAddress);
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Dominik
 */
class User
{
    private $nickname;
    private $mailAddress;
    private $ownBlog;

    function __construct($nickname, $mailAddress) {
        $this->nickname = $nickname;
        $this->mailAddress = $mailAddress;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getMailAddress()
    {
        return $this->mailAddress;
    }
}
<?php

use Mockery as m;
use Gtk\FlashMessage\Flash;

abstract class TestCase extends PHPUnit_Framework_TestCase
{
    protected $session;

    protected $flash;

    public function setUp()
    {
        $this->session = m::mock('Gtk\FlashMessage\SessionStore');

        $this->flash = new Flash($this->session);
    }
}
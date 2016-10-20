<?php

use Gtk\FlashMessage\Flash;
use Mockery as m;

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

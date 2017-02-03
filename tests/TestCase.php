<?php

use Gtk\FlashMessage\Flash;
use Mockery as m;
use Illuminate\Translation\FileLoader;

abstract class TestCase extends PHPUnit_Framework_TestCase
{
    protected $session;

    protected $flash;

    public function setUp()
    {
        $this->session = m::mock('Gtk\FlashMessage\SessionStore');
        $this->flash = new Flash($this->session, $this->getIlluminateArrayTranslator());
    }

    /**
     * Array translator with some test values
     *
     * @return \Illuminate\Translation\Translator
     */
    protected function getIlluminateArrayTranslator()
    {
        $loader = new FileLoader(new \Illuminate\Filesystem\Filesystem, __DIR__);
        $loader->load('en', 'flash');
        return new Illuminate\Translation\Translator($loader, 'en');
    }
}

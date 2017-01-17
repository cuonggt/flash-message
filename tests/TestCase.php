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
        $this->flash = new Flash($this->session, $this->getIlluminateArrayTranslator());
    }

    /**
     * Array translator with some test values
     *
     * @return \Illuminate\Translation\Translator
     */
    protected function getIlluminateArrayTranslator()
    {
        $loader = new Illuminate\Translation\ArrayLoader();
        $loader->addMessages('en', 'group', [
            'translatable_title' => 'Translated title.',
            'translatable_message' => 'Translated message.'
        ]);

        return new Illuminate\Translation\Translator($loader, 'en');
    }
}

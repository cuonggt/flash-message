<?php

if (! function_exists('flash')) {

    /**
     * Arrange for a flash message.
     *
     * @param string|null $title
     * @param string|null $message
     * @param string      $level
     * @param string      $key
     *
     * @return \Gtk\FlashMessage\Flash
     */
    function flash($title = null, $message = null, $level = 'info', $key = 'flash_message')
    {
        $flash = app('flash');

        if (func_num_args() == 0) {
            return $flash;
        }

        return $flash->create($title, $message, $level, $key);
    }
}

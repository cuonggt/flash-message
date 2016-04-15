<?php

if (! function_exists('flash')) {

    /**
     * Arrange for a flash message
     *
     * @param string|null $title
     * @param string|null $message
     * @return \GTK\FlashMessage\Flash
     */
    function flash($title = null, $message = null)
    {
        $flash = app('flash');

        if (func_num_args() == 0) {
            return $flash;
        }

        return $flash->info($title, $message);
    }

}
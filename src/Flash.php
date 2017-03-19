<?php

namespace Gtk\FlashMessage;

class Flash
{
    /**
     * The session writer.
     *
     * @var SessionStore
     */
    private $session;

    /**
     * Create a new flash instance.
     *
     * @param SessionStore $session
     */
    public function __construct(SessionStore $session)
    {
        $this->session = $session;
    }

    /**
     * Create a flash message.
     *
     * @param string $title
     * @param string $message
     * @param string $key
     *
     * @return $this
     */
    public function create($title, $message, $level = 'info', $key = 'flash_message')
    {
        $this->session->flash($key, [
            'title'   => $title,
            'message' => $message,
            'level'   => $level,
        ]);

        return $this;
    }

    /**
     * Flash a success message.
     *
     * @param string $title
     * @param string $message
     * @param string $key
     *
     * @return $this
     */
    public function success($title, $message, $key = 'flash_message')
    {
        return $this->create($title, $message, 'success', $key);
    }

    /**
     * Flash an info message.
     *
     * @param string $title
     * @param string $message
     * @param string $key
     *
     * @return $this
     */
    public function info($title, $message, $key = 'flash_message')
    {
        return $this->create($title, $message, 'info', $key);
    }

    /**
     * Flash an error message.
     *
     * @param string $title
     * @param string $message
     * @param string $key
     *
     * @return $this
     */
    public function error($title, $message, $key = 'flash_message')
    {
        return $this->create($title, $message, 'error', $key);
    }

    /**
     * Flash an danger message.
     *
     * @param string $title
     * @param string $message
     * @param string $key
     *
     * @return $this
     */
    public function danger($title, $message, $key = 'flash_message')
    {
        return $this->create($title, $message, 'danger', $key);
    }

    /**
     * Flash a warning message.
     *
     * @param string $title
     * @param string $message
     * @param string $key
     *
     * @return $this
     */
    public function warning($title, $message, $key = 'flash_message')
    {
        return $this->create($title, $message, 'warning', $key);
    }

    /**
     * Flash an overlay modal.
     *
     * @param string $title
     * @param string $message
     * @param string $level
     * @param string $key
     *
     * @return $this
     */
    public function overlay($title, $message, $level = 'info', $key = 'flash_message')
    {
        return $this->create($title, $message, $level, $key.'_overlay');
    }
}
